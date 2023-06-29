const open_btn = document.querySelector(".open-btn");
const close_btn = document.querySelector(".close-btn");
const nav = document.querySelectorAll(".nav");

open_btn.addEventListener("click", () => {
  nav.forEach((nav_el) => nav_el.classList.add("visible"));
});

close_btn.addEventListener("click", () => {
  nav.forEach((nav_el) => nav_el.classList.remove("visible"));
});

const valueDisplays = document.querySelectorAll(".nums");

valueDisplays.forEach((value) => {
  let startValue = 0;
  let endValue = parseInt(value.getAttribute("data-val"));
  if (endValue === 0) {
    value.textContent = startValue;
    return; // Exit the function for this element
  }

  let counter = setInterval(function () {
    startValue += 1;
    value.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, 1);
});
