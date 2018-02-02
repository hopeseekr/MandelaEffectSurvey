<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyQuestionController
{
    public function store(Request $request)
    {
        if (empty($_POST['question'])) {
            exit;
        }


        $data = [
            'text' => $request->get('question'),
            'options' => $request->get('options'),
        ];

        $submissionsPath = base_path('data/submissions');

        // Repeat until the random ID is truly unique.
        $file = $submissionsPath . '/question-' . uniqid() . '.json';
        while (file_exists($file)) {
            $file = $submissionsPath . '/question-' . uniqid() . '.json';
        }

        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

        $previousURL = app('url')->previous();

        return redirect()->to($previousURL . '?questionAdded=1');
    }
}