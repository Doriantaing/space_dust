// //modal
let btn = document.querySelector(".--userDevis");
let modal = document.querySelector(".modal");
let overlay = document.querySelector(".modal__overlay");

btn.addEventListener("click", function() {
  modal.style.display = "block";
});

overlay.addEventListener("click", function() {
  modal.style.display = "";
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