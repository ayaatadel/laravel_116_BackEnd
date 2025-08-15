<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatbotController extends Controller
{
    public function respond(Request $request)
    {
        $message = strtolower($request->input('message'));
        // Use the iti_data.jsonl file from the project root
        $filePath = base_path('iti_data.jsonl');
        $reply = 'Sorry, I did not understand.';

        if (file_exists($filePath)) {
            $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                $data = json_decode($line, true);
                if (isset($data['question']) && isset($data['answer'])) {
                    // Match if the user's message contains the question or vice versa
                    if (stripos($message, strtolower($data['question'])) !== false || stripos(strtolower($data['question']), $message) !== false) {
                        $reply = $data['answer'];
                        break;
                    }
                }
            }
        }

        return response()->json(['reply' => $reply]);
    }
}
