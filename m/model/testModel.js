function testModel(modifier)
{
	this.firstResult = '5' + modifier;
	this.secondResult = '5' - modifier;
	
	this.getResults = function() {
		return this.firstResult + ' / ' + this.secondResult;
	};
}