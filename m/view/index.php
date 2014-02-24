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
    
    <!-- Model imports -->
    <script type="text/javascript" src="../model/testModel.js"></script>
    
	<!-- Controller imports -->
	<script type="text/javascript" src="../controller/index.js"></script>
    
  </head>
  <body>
	<!-- Start of second page -->
	<div data-role="page" id="bar">

		<div data-role="header">
			<h1>Bar</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
			<p><a href="#main">Back to main</a></p>
			<p><a href="about.php" rel="external">About</a></p>
		</div><!-- /content -->

		<div data-role="footer">
			<h4>Page Footer</h4>
		</div><!-- /footer -->
	</div><!-- /page -->
  </body>
</html>
