<?php

class SurveyController
{
    public function getSurveySectionAction()
    {
        $sectionId = filter_input(INPUT_GET, 'sectionId', FILTER_SANITIZE_NUMBER_INT);
        $surveyPath = 'data/surveys/section-' . $sectionId . '.json';
        if (!is_readable($surveyPath)) {
            throw new \RuntimeException("Could not open the survey file for $sectionId; $surveyPath");
        }
        $surveySection = json_decode(file_get_contents($surveyPath));
        if (!$surveySection) {
            throw new \RuntimeException("Invalid json for $sectionId");
        }

        // Is there a next section id waiting?
        $hasNextSection = false;
        $nextSurveyPath = 'data/surveys/section-' . ($sectionId + 1) . '.json';
        if (is_readable($nextSurveyPath)) {
            $hasNextSection = true;
        }

        include 'views/surveySection.php';
    }
}
