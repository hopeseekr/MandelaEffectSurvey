<?php
?>
<!DOCTYPE html>
<html>
    <head>
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

            <form method="post" action="app.php?context=survey&action=submit">
                <div id="survey">
                    <button id="beginSurvey" class="btn btn-primary nextSection">Begin</button>
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
