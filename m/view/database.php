<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
	<head>
		<title>HTML5 Javascript Tutorial</title>

		<!-- Meta tags -->
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<meta content="igorferreira" name="author">
		<meta content="Página usada para o ensino básico de HTML5 e Javascript" name="description">
		<meta content="html5, javascript, pogamadores, tutorial" name="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Style sheet imports -->
    	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
    
	    <!-- Library imports -->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
		<script type="text/javascript" src="../model/DBConnector.js"></script>
		<script type="text/javascript" src="../controller/database.js"></script>
	</head>

	<body onload="init();">
		<div data-role="page" id="database">
			<div data-role="header">
				<h1>Database</h1>
			</div>
			<div role="main" class="ui-content">
				<ul id="allItens">
				</ul>
				<form type="post" onsubmit="addTodo(); return false;">
					<input type="text" id="todo" name="todo" placeholder="What do you need to do?" style="width: 200px;"/>
					<input type="submit" value="Add Todo Item"/>
				</form>	
				<br/>
				<p>Return to the <a href="index.php" rel="external">main</a></p>		
			</div>
			<div data-role="footer">
				<h1>Page Footer</h1>
			</div>
		</div>
	</body>
</html>