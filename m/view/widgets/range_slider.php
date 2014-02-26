<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta content="Página usada para o uso do componente slider da api JQuery UI" name="description">
    <title>jQuery UI Slider - Range slider</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
      $(function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 500,
          values: [ 0, 500 ],
          slide: function( event, ui ) {
            $( "#quantia" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
          }
        });
        $( "#quantia" ).val($( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );
      });
    </script>
  </head>
  <body>
    <p>
      <label for="quantia">Range selecionado:</label>
      <input type="text" id="quantia" style="border:0; color:#f6931f; font-weight:bold;">
    </p>
    <div id="slider-range" style="margin-left:2%; margin-right:2%"></div>
  </body>
</html>