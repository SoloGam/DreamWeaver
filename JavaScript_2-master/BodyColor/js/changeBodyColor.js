// 1. we have to obtain the "ul" object
var list = document.getElementById("color");

// 2. we have to count how many elements ul has
var elements = list.childElementCount;

var i = 0;
while (i < elements) {
  list.children[i].addEventListener("click", function () {
    document.body.className = this.className;
  });
  i++;
}
