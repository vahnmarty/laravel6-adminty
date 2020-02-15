var date = new Date();
const elementDate = document.getElementById("printDate");
const elementDay = document.getElementById("printDay");
const elementTime = document.getElementById("printTime");
const listOfDays = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday"
];
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

function printDate() {
  var day = date.getDate();
  var month = months[date.getMonth()];
  var year = date.getFullYear();

  elementDate.innerHTML = month + " " + day + ", " + year;
}

function printDay() {
  date = new Date();
  var numberOfDay = date.getDay();
  var day = listOfDays[numberOfDay];
  elementDay.innerHTML = day;
}

function printTime() {
  date = new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (hours > 12) {
    hours = hours - 12;
    elementTime.innerHTML = hours + " : " + minutes + " : " + seconds + "  PM ";
  } else if (hours < 12) {
    elementTime.innerHTML = hours + " : " + minutes + " : " + seconds + "  AM ";
  } else if (hours = 12) {
    elementTime.innerHTML = hours + " : " + minutes + " : " + seconds + "  PM ";
  }
}

setInterval(function() {
  printTime();
  printDate();
  printDay();
}, 1000);