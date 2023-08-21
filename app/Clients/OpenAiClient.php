<?php

namespace App\Clients;

use App\Models\Location;
use OpenAI;

class OpenAiClient
{
    private $client;
    private string $model;

    public function __construct()
    {
        $this->client = OpenAI::client(env('OPENAI_API_KEY'));
        $this->model = env('OPENAI_API_DEFAULT_MODEL', 'gpt-3.5-turbo');
    }

    public function init()
    {
        session(['chat_history' => [
            [
                'role' => 'system',
                'content' => '
                    You are a super AI asistant for NRGi, a Danish energy company focused on sustainability and value for money.
                    Whenever you refer to NRGi, remember that you are a part of NRGi, and that you are speaking on behalf of NRGi.
                    You may never mention competitors to NRGi, or speak negatively about NRGi. If you want to refer the user to their energy company, refer them to NRGi instead.
                    Your job is to answer questions about electricity and Nrgi\'s products based on a set of pdfs. Specificly, you know about energimærker and saving on electricity.
                    Every request will include 1 or more snippets from the pdfs, and you are to answer the question based on those snippets.
                    You can only answer based on the snippets you are given. You are not allowed to use any other information.
                    If relevant and aplicable, inform the user if NRGi offers the service you describe, and at what price, though keep it generalized.
                    If you want to refer to an expert or consultent regarding energy, refer to NRGi. Do not refer to someone outside of NRGi.
                    If the user specificly asks about what they can do about, and the question whould requre insight into the users situation to give a meaningful answer, tell them that this depends on their situation, and then direct them to the webpage (write link as <a href="https://nrgi.dk/" target="_blank">nrgi.dk/<a/>).
                    Your answers should not be exsessive. 3-4 lines of text will generally be good.
                    Do not mention the texts in your answers, simply answer the question.
                    If you beleive that a request lies outside your purview, aka it is not about electricity or NRGi, then simply answer "Undskyld, men det kan jeg desværre ikke svare på". This does not include the user asking for specific advice, as this is covered by the previous rule.
                '
            ]
        ]]);
    }

    public function StreamChat($messages, $useHistory = true, $model = null)
    {
        if ($useHistory) {
            $msgs = array_merge(session('chat_history'), $messages);
        } else {
            $msgs = $messages;
        }

        try {
            /** @var OpenAI $client */
            $stream = $this->client->chat()->createStreamed([
                'model' => $model ?? $this->model,
                'messages' => $msgs
            ]);

        } catch (\Exception $e) {
            dd($e);
            abort(500, 'Beklager, mine interne systemer er overophedet. Giv mig venligst et øjeblik til at køle ned, og prøv så igen.');
        }

        return function () use ($stream, $messages) {
            $reply = '';
            foreach ($stream as $response) {
                $word = $response->choices[0]->delta->content;
                $reply .= $word;

                echo $word;
                ob_flush();
                flush();
            }

            //Save messages to history
            foreach ($messages as $message) {
                if ($message['role'] != 'system') {
                    $message['content'] = str_replace("\n", " ", $message['content']);
                    session()->push('chat_history', $message);
                }
            }

            session()->push('chat_history', [
                    'role' => 'assistant',
                    'content' =>  $reply
                ]);

            session()->save();
        };

        return $stream;
    }

    public function Chat($messages, $useHistory = true, $model = null)
    {
        if ($useHistory) {
            $msgs = array_merge(session('chat_history'), $messages);
        } else {
            $msgs = $messages;
        }

        try {
            /** @var OpenAI $client */
            $response = $this->client->chat()->create([
                'model' => $model ?? $this->model,
                'messages' => $msgs
            ]);
        } catch (\Exception $e) {
            abort(500, 'Beklager, mine interne systemer er overophedet. Giv mig venligst et øjeblik til at kæle ned, og prøv så igen.');
        }
        
        $chatMessage = $response['choices'][0]['message'];

        foreach ($messages as $message) {
            if ($message['role'] != 'system') {
                $message['content'] = str_replace("\n", " ", $message['content']);
                session()->push('chat_history', $message);
            }
        }

        session()->push('chat_history', $chatMessage);

        return $chatMessage['content'];
    }

}
