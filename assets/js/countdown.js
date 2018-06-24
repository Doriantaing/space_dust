var day = document.querySelector(".suivi__estimatedTime-day");
var hour = document.querySelector(".suivi__estimatedTime-hour");
var minute = document.querySelector(".suivi__estimatedTime-minute");
var second = document.querySelector(".suivi__estimatedTime-second");

var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  day.innerHTML = days;
  hour.innerHTML = hours;
  minute.innerHTML = minutes;
  second.innerHTML = seconds;
}, 1000);
