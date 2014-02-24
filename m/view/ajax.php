<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
    <head>
        <title>HTML5 Javascript Tutorial</title>

        <!-- Meta tags -->
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <meta content="igorferreira" name="author">
        <meta content="Página usada para o ensino básico de HTML5 e Javascript" name="description">
        <meta content="html5, javascript, pogamadores, tutorial" name="keywords">
        <meta content="BlueGriffon wysiwyg editor" name="generator">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Style sheet imports -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />

        <!-- Library imports -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

        <!-- Controller imports -->
        <script type="text/javascript" src="../controller/ajax.js"></script>

    </head>

    <body>
        <div data-role="page" id="ajax">
            <div data-role="header">
                <h1>Ajax</h1>
            </div>
            <div role="main" class="ui-content">
                <div id="title" style="visibility: hidden"><p>Table with margin 0px</p></div>
                <div id="dinamic_content"><p>The content will be shown here</p></div>
                <div id="actions">
                    <button type="button" onclick="requestData()">Show Content with XMLHttpRequest</button>
                    <button type="button" onclick="jqAjax()">Show Content with jQuery Ajax</button>
                    <br/>
                    Go back to <a href="index.php" rel="external">index</a>
                </div>
            </div>
            <div data-role="footer">
                <h4>Page footer</h4>
            </div>
        </div>
    <body>

</html>

