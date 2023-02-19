
const leftArrow = document.querySelector(".slider__left");
const rightArrow = document.querySelector(".slider__right");
const sliderItems = document.querySelectorAll(".slider__item");
const itemContainer = document.querySelector(".slider__content");
let currentPosition = 0;

sliderItems.forEach((slide,indx) => {
    slide.style = `transform: translateX(${indx * 100}%)`
});

rightArrow.addEventListener("click", () => {
    currentPosition++;
    if (currentPosition >= sliderItems.length) {
      currentPosition = 0;
    }
    sliderItems.forEach((item, indx) => {
      const position = indx - currentPosition;
      item.style.transform = `translateX(${position * 100}%)`;
    });
  });
  
  leftArrow.addEventListener("click", () => {
    currentPosition--;
    if (currentPosition < 0) {
      currentPosition = sliderItems.length - 1;
    }
    sliderItems.forEach((item, indx) => {
      const position = indx - currentPosition;
      item.style.transform = `translateX(${position * 100}%)`;
    });
  });
/*
 step 1: 0%, 100%, 200%
 step
*/