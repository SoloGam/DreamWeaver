var list = document.getElementById("color");

//numara subdiviziunile din "color"
var count = list.childElementCount;

console.log (count);

var i = 0;

while (i < count) {
	list.children[i].addEventListener("click", function () {
		document.body.className = this.className;
//		console.log(this.className);
	});
	i++;
}
//while (i < count) {
//	list.children[i].addEventListener("mouseover", function () {
//		document.body.className = this.className;
////		console.log(this.className);
//	});
//	i++;
//}
