//console.log("test");

var cars = ["Honda", "Ford", "Audi", "Reanult", "Bmw"];

function getCarType (type, cars) {
	var element = cars.indexOf(type);
	if (element === -1) {
		alert("Car type " + type + " is not in the list");
	}
	return element;
}

var carType = getCarType("Bmw", cars); 
console.log (carType);