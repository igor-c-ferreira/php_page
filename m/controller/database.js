var webdb = new DBConnector(loadTodoItems);

function loadTodoItems(tx, rs) {
	var rowOutput = "";
	var todoItems = document.getElementById("allItens");
	for (var i=0; i < rs.rows.length; i++) {
	  rowOutput += renderTodo(rs.rows.item(i));
	}
	todoItems.innerHTML = rowOutput;
}

function renderTodo(row) {
	return "<li>" + row.todo  + " [<a href='javascript:void(0);'  onclick='webdb.deleteTodo(" + row.ID +");'>Delete</a>]</li>";
}

function init() {
	webdb.open();
	webdb.createTable();
	webdb.getAllTodoItens(loadTodoItems);
}

function addTodo() {
	var todo = document.getElementById("todo");
	webdb.addTodo(todo.value);
	todo.value = "";
}