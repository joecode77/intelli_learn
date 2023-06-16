var typeElementOnLandingPage = document.getElementsByClassName("type")[0];
var textOptions = [
  "Deliver interactive lectures",
  "Provide graded quizzes",
  "Allow collaboration",
  "Provide exam prep resources",
];

var index = 1;

function changeText() {
  typeElementOnLandingPage.innerHTML = textOptions[index];
  index = (index + 1) % textOptions.length;
}

setInterval(changeText, 7000);
