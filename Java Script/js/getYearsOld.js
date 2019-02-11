function getYearsOld (now, then, callback) {
	var year = now - then;
	callback(year);
}

getYearsOld(2019, 1981, function (result) {
			console.log("You have " + result + " years old")
			});