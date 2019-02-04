var str         = document.getElementById("fruits").textContent;
var start       = str.indexOf(":");
var end         = str.indexOf(".");
var fruits      = str.substring(start + 1, end);
var listaFructe = fruits.split(",");

var i = 0;
var list = document.getElementById("fruitsList");
listaFructe.forEach(function (element) {
    list.innerHTML += "Fructe: " + element + "<br />";
});
