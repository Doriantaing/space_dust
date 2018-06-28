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
