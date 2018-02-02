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
    @yield('content')
</div>

<!-- Include the JS files here for maximum performance. -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/survey.js"></script>
</body>
</html>
