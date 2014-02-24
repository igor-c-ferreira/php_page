function DBConnector(renderFunction)
{
	var db = null;
	var me = this;
	
	this.open = function(){
		var dbSize = 5 * 1024 * 1024;
		db = openDatabase("Todo","1.0","Todo manager", dbSize);
	};
	
	this.createTable = function(){
		db.transaction(function(tx) {
			tx.executeSql("CREATE TABLE IF NOT EXISTS todo(ID INTEGER PRIMARY KEY ASC, todo TEXT, added_on DATETIME)", []);
		});
	};
	
	this.getAllTodoItens = function(renderFunc) {
		db.transaction(function(tx) {
          tx.executeSql("SELECT * FROM todo", [], renderFunc, onError);
        });
	};
	
	var onSuccess = function(tx, r){
		me.getAllTodoItens(renderFunction);
	};
	
	var onError = function(tx, e){
		alert("There has been an error: " + e.message);
	};
	
	this.addTodo = function(todo){
		db.transaction(function(tx) {
			var addedOn = new Date();
			tx.executeSql("INSERT INTO todo(todo, added_on) VALUES (?,?)",
              [todo, addedOn],
              onSuccess,
              onError);
		});
	};
	
	this.deleteTodo = function(id) {
        db.transaction(function(tx){
          tx.executeSql("DELETE FROM todo WHERE ID=?", [id],
              onSuccess,
              onError);
          });
      };
};