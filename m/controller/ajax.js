var xhr;
function response() {
	if(xhr.readyState == 4)
	{
		var element = document.getElementById("dinamic_content");
		if(xhr.readyState == 4 && xhr.status == 200)
		{
			element.innerHTML = xhr.responseText;	
			document.getElementById("dinamic_content").style.marginTop = "5px";
			document.getElementById("content_table").style.border = "1px solid red";
			document.getElementById("title").innerHTML = "<p>Table with margin 5px</p>";
			document.getElementById("title").style.visibility = "visible";
		}else
		{
			showError();
		}
	}
}

function showError() {
	document.getElementById("dinamic_content").innerHTML = "<p>Error on loading page: " + nhr.status + "</p>";
	document.getElementById("title").style.visibility = "hidden";
}

function requestData() {
	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}

	if(xhr != null)
	{
		xhr.open("GET","resources/content.xml", true);
		xhr.onreadystatechange = response;
		xhr.send(null);
	}else
	{
		showError();
	}
}

function ajaxResponse(text)
{
	var element = document.getElementById("dinamic_content");
	if(text == null)
	{
		showError();
	}else
	{
		element.innerHTML = text;
		$('#dinamic_content').css("margin-top", "10px");
		document.getElementById("content_table").style.border = "1px solid green";
		document.getElementById("title").innerHTML = "<p>Table with margin 10px</p>";
		document.getElementById("title").style.visibility = "visible";
	}
}

function jqAjax()
{
	$.ajax({
		type:		"GET",
		url:		"resources/contentjquery.xml",
		dataType:	"text",
		success: function(xml){
			ajaxResponse(xml);
		},
		error: function() {
			ajaxResponse(null);
		}
	});
}