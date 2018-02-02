<?php

namespace App\Http\Controllers;

class SurveySectionController
{
    public function show($sectionId)
    {
        $surveyPath = base_path('data/surveys');
//        $sectionId = filter_input(INPUT_GET, 'sectionId', FILTER_SANITIZE_NUMBER_INT);
        $sectionFile = $surveyPath . '/section-' . $sectionId . '.json';
        if (!is_readable($sectionFile)) {
            throw new \RuntimeException("Could not open the survey file for $sectionId; $sectionFile");
        }
        $surveySection = json_decode(file_get_contents($sectionFile));
        if (!$surveySection) {
            throw new \RuntimeException("Invalid json for $sectionId");
        }

        // Is there a next section id waiting?
        $hasNextSection = false;
        $nextSurveyFile = $surveyPath . '/section-' . ($sectionId + 1) . '.json';
        if (is_readable($nextSurveyFile)) {
            $hasNextSection = true;
        }

        return view('surveySection', [
            'surveySection'  => $surveySection,
            'hasNextSection' => $hasNextSection,
        ]);
    }
}