function countDown(max) {
  var i = 0;
  while (i < (max + 1)) {
    (function (i) {
      setTimeout(function () {
          var second = max - i;
          document.getElementById("countDown").innerHTML += second + "<br />";
          if (second === 0) {
            alert('Your time was ended!');
          }
      }, 1000 * i);
    })(i++);
  }
}

countDown(10);
