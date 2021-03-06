<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
    <head>
        <title>Sendgrid</title>

        <!-- Meta tags -->
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <meta content="igorferreira" name="author">
        <meta content="Página usada para o ensino básico de HTML5 e Javascript" name="description">
        <meta content="html5, javascript, pogamadores, tutorial, sendgrid, pusher" name="keywords">
        <meta content="Xcode 5.0" name="generator">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Style sheet imports -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />

        <!-- Library imports -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <script type="text/javascript" src="http://js.pusher.com/2.1/pusher.min.js"></script>

        <!-- Controller imports -->
        <script type="text/javascript">
            Pusher.log = function(message) {
              if (window.console && window.console.log) {
                window.console.log(message);
              }
            };

            var pusher = new Pusher('461c8c8ac40ee3dc274d', {
              cluster: 'eu'
            });
            var channel = pusher.subscribe('sendgrid_email_parser');

            channel.bind('received_email', function(data) {
                document.getElementById("text_content").innerHTML = "<p><b>Email enviado por:</b> " + data.parameters.from + "</p>" + 
                "<p><b>Para:</b> " + data.parameters.to + "</p>" +
                "<p><b>Com o assunto: </b>" + data.parameters.subject +
                "<p><b>Conteúdo HTML:</b>" + data.parameters.html + "</p>" +
                "<p><b>E conteúdo simples:</b></p><p>" + data.parameters.text + "</p>";
            });
        </script>

    </head>

    <body>
        <div data-role="page" id="ajax">
            <div data-role="header">
                <h1>Sendgrid</h1>
            </div>
            <div role="main" class="ui-content">
                <div id="text_content">
                </div>
            </div>
        </div>
    <body>

</html>

