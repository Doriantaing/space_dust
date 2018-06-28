
// Numbers 
let numbersBox = document.querySelectorAll(".numbers__datas-key");
let time = 100;

numbersBox.forEach(numbers => {
  numbs = numbers.textContent;
  var demo = new CountUp(numbersBox, 0, parseInt(numbs), 0, 2.5);
  if (!demo.error) {
    demo.start();
  } else {
    console.error(demo.error);
  }
});


let btn = document.querySelector(".--userDevis");
let modal = document.querySelector(".modal");
let overlay = document.querySelector(".modal__overlay");

btn.addEventListener("click", function() {
  modal.style.display = "block";
});

overlay.addEventListener("click", function() {
  modal.style.display = "";
});


var submitUser = document.querySelector('.submit_user');

submitUser.addEventListener('click',function(event){
  event.preventDefault();
  modal.style.display = "";
})