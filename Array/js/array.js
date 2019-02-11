var arr = [
	37,
	{status: "in progres"},
	"Link Academy",
	true, , {}
];

var element = arr[1];

console.log ("Element value is " + element);
console.log (typeof element);
console.log (arr);

function getDataType (type, data) {
	
	dataTypes = [
		"number",
		"object",
		"string",
		"boolean",
		"undefined"
	];
	
	if (dataTypes.indexOf(type) === -1) {
		alert ("Type " + type + " is not supported.");
		return data;
	}
	var i = 0;
	newData = []; 
	
	while (i < data.length) {
	if (typeof data[i] === type) {
		newData.push(data[i]);
	}
	
	i++;
  }
	
	return newData;
}


var arrayNumbers = getDataType ("number", arr);
console.log(arrayNumbers);
var arrayObject = getDataType ("object", arr);
console.log(arrayObject);
