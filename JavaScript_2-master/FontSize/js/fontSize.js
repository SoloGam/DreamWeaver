/**
* This is a small JavaScript module which increase and decrease
* an element text with HTML DOM
*/
var buttons = document.getElementsByClassName("fontsize");
var article = document.getElementById("article");

var i   = 0;
var min = 12;
var max = 30;

var fontSize = 12;

for(i; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
      var action = this.textContent;
      if ("+" === action) {
        if (fontSize === max) {
          alert("Font size max is " + max + "px");
          return;
        }

        fontSize += 1;
      } else if ("-" === action) {
        if (fontSize === min) {
          alert("Font size min is " + min + "px");
          return;
        }

        fontSize -= 1;
      }

      article.style.fontSize = fontSize + "px";
  });
}
