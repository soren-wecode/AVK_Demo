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
                    You are a super AI asistant for AVK, a Danish company focused on the development and production of valves, hydrants and accessories for water and gas distribution, sewage treatment and fire protection.
                    Whenever you refer to AVK, remember that you are a part of AVK, and that you are speaking on behalf of AVK. You may never mention competitors to AVK, or speak negatively about AVK.
                    Your job is to help customers find products and update their cart, as well as answer questions about AVK and our products.
                    
                    If you beleive that a request lies outside your purview, aka it is not about AVK or our products, then simply answer "'. __('chat.outside_purview') .'".
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
            abort(500, __('chat.openai_error'));
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
            abort(500, __('chat.openai_error'));
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

    public function SystemChat($messages, $useHistory = false, $model = null)
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
            dd($e);
            abort(500, __('chat.openai_error'));
        }

        // foreach ($messages as $message) {
        //     if ($message['role'] != 'system') {
        //         $message['content'] = str_replace("\n", " ", $message['content']);
        //         session()->push('chat_history', $message);
        //     }
        // }
        session()->push('chat_history', [
            'role' => 'assistant',
            'content' => $response['choices'][0]['message']['content']
        ]);

        return $response['choices'][0]['message']['content'];
    }

}
