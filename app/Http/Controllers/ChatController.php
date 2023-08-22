<?php

namespace App\Http\Controllers;

use App\Clients\OpenAiClient;
use App\Services\OpenAiService;
use App\Actions\SearchWeaviateAction;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController
{
    public function __construct(
        private readonly OpenAiService $openAiService,
        private readonly SearchWeaviateAction $searchWeaviate,
    ) {
    }

    function index()
    {
        return Inertia::render('OfferGenerator');
    }

    public function init()
    {
        $client = new OpenAiClient();
        $client->init();

        $welcomeMessage = "Hej, og velkommen til NRGi!<br>
            Hvordan kan jeg hjælpe dig i dag?
        ";

        return response()->json($welcomeMessage);
    }

    public function chat(Request $request)
    {
        $pdfSnippets = $this->searchWeaviate->execute('NRGi_PDFs', $request->message, $request->type);
        session(['pdf_snippets' => $pdfSnippets]);

        $context = '';
        foreach ($pdfSnippets as $snippet) {
            $context .= $snippet['section_title'] . ' ' . $snippet['text'];
        }

        $stream = $this->openAiService->chat($request->message, $context, true);

        return response()->stream($stream, 200, [
            'Content-Type' => 'text/event-stream',
            'Cache-Control' => 'no-cache',
            'X-Accel-Buffering' => 'no',
        ]);
    }

    public function getSource()
    {
        return response()->json(session('pdf_snippets'));
    }
}
