
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
