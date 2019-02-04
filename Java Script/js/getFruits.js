var element = document.getElementById("Fruits");
console.log(getText);
var getText = element.textContent;
//Lui Andrei ii plac urmatoarele fructe: mere, pere, banane, portocale si kivi.

var start = getText.indexOf(":");
console.log("Start is in position " + start + ".");

var end = getText.indexOf(".");
console.log("End is in position " + end + ".");

var fruits = getText.substring(start + 1 , end);

console.log(fruits);

var div = document.createElement("div");
var newElement = element.appendChild(div);
newElement.setAttribute("id", "fruitlist");

newElement.textContent ="Fruits list: " + fruits;  

var arr = fruits.split(",");
console.log(arr);