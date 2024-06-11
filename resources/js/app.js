import 'flowbite';

const countElement = document.getElementById("count");
const increaseButton = document.getElementById("increase");
const decreaseButton = document.getElementById("decrease");

let count = 0;

function updateCount() {
  countElement.textContent = count;
}

increaseButton.addEventListener("click", () => {
  count++;
  updateCount();
});

decreaseButton.addEventListener("click", () => {
  if (count > 0) {
    count--;
    updateCount();
  }
});

updateCount();
