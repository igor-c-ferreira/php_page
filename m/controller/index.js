var results = new testModel(2);

document.write("<!-- Start of first page -->" +
	 "<div data-role=\"page\" id=\"main\">" + 
	 	"<div data-role=\"header\">" + 
	 		"<h1>Main</h1>" + 
	 	"</div>" + 
		 "<!-- /header -->" + 
		 "<div role=\"main\" class=\"ui-content\">" +
		 	"<p>The main scope results are: " + results.getResults() + "</p>" +
			"<p>I\'m first in the source order so I\'m shown as the page.</p>" + 
			"<p>View internal page called <a id=\"bar\" href=\"#bar\">bar</a></p>" + 
			"<p>View an example of the use of <a id=\"database\" href=\"database.php\" rel=\"external\">database</a></p>" +
			"<p>See an example of <a href=\"widgets/index.php\" rel=\"external\">jQuery widgets</a></p>" +
			"<p>See an example of <a href=\"ajax.php\" rel=\"external\">Ajax request</a></p>" + 
		 "</div>" + 
		 "<!-- /content -->" + 
		 "<div data-role=\"footer\">" + 
			"<h4>Page Footer</h4>" + 
		 "</div>" + 
		 "<!-- /footer -->" + 
	 "</div><!-- /page -->");