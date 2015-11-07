<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mandela Effect Survey + Profiler</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css"/>
        <style>
div.main {
    max-width: 40em;
    margin: 20px auto;
    padding: 20px;
}
        </style>
    </head>
    <body>
        <div class="main">
            <h1>Mandela Effect Survey</h1>
            <p>The evidence for the Mandela Effect are everywhere, for those with the eyes to see and ears to hear.</p>
            <p>But there is so much we do not know, like, why does it majorly affect only Americans? Why are certain
            generations more affected, while older generations seeem immune? Are Mandela Effect witnesses mostly empaths?</p>
            <p>Answer this survey, and let's get to some answers!</p>

            <form class="form-horizontal" id="addQuestion" role="form" method="post" action="app.php?context=survey&action=addQuestion">
                <h3>Add a Question</h3>
                <?php
                if (!empty($_GET['addQuestion']) && $_GET['addQuestion'] == 1) {
                ?>
                <h3>
                    <span class="label label-success">
                        Thank you for submitting a question for review! Submit another?
                    </span>
                </h3>
                <?php
                }
                ?>
                <p>Don't see a Mandela Effect below? Submit it for inclusion!</p>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="question">Question</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="question" id="question"
                               placeholder="Try no tto give the answer away"/>
                    </div>
                </div>
                <div id="options">
                    <div class="form-group" id="form-group-opt-1">
                        <label class="control-label col-sm-2" for="option-1">Option 1:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="options[]"
                                id="option-1" placeholder="Potential answer"/>
                        </div>
                    </div>
                    <div class="form-group" id="form-group-opt-2">
                        <label class="control-label col-sm-2" for="option-2">Option 2:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="options[]"
                                   id="option-2" placeholder="Potential answer"/>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-success addQuestionOptionButton">Add Option</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit Question</button>
                    </div>
                </div>

            </form>
            <h3>Current Questions</h3>
<?php
$dh = opendir('data/surveys/');
while ($filename = readdir($dh)) {
    if ($filename == '.' || $filename == '..') {
        continue;
    }
    $surveySection = json_decode(file_get_contents('data/surveys/' . $filename));
    echo $surveySection->title;
    ?>
            <ol>
<?php
        foreach ($surveySection->questions as $question) {
?>
                <li><?php echo htmlspecialchars($question->text); ?></li>
<?php
        }
?>
            </ol>
<?php
}
?>
            <form method="post" action="app.php?context=survey&action=submit">
                <div id="survey">
                    <button id="beginSurvey" class="btn btn-primary nextSection">Begin</button>
                    <h2 id="mockupWarning" class="bg-danger" style="padding: 15px 20px">Do not complete the survey!! It does not work yet! It's a mockup.</h2>
                </div>
            </form>
        </div>

        <!-- Include the JS files here for maximum performance. -->
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/survey.js"></script>
    </body>
</html>
