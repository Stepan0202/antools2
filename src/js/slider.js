
const leftArrow = document.querySelector(".slider__left");
const rightArrow = document.querySelector(".slider__right");
const sliderItems = document.querySelectorAll(".slider__item");
const itemContainer = document.querySelector(".slider__content");
const paginationContainer = document.querySelectorAll(".slider__lines");
const paginationElements = createElements("div", "slider__line", sliderItems.length);
let sliderLineActive = "slider__line_active";
let sliderDisabled = "slider__line_disabled";
let currentPosition = 0;

sliderItems.forEach((slide,indx) => {
    slide.style = `transform: translateX(${indx * 100}%)`
});

rightArrow.addEventListener("click", () => {
    paginationElements[currentPosition].classList.remove(sliderLineActive);
    paginationElements[currentPosition].classList.add(sliderDisabled);
    currentPosition++;
    paginationElements[currentPosition].classList.add(sliderLineActive);
    if (currentPosition >= sliderItems.length) {
      currentPosition = 0;
    }
    sliderItems.forEach((item, indx) => {
      const position = indx - currentPosition;
      item.style.transform = `translateX(${position * 100}%)`;
    });
  });
  
  leftArrow.addEventListener("click", () => {
    paginationElements[currentPosition].classList.remove(sliderLineActive);
    paginationElements[currentPosition].classList.add(sliderDisabled);
    currentPosition--;
    paginationElements[currentPosition].classList.add(sliderLineActive);
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
function createElements(type, elementClass, quantity){
    let elements = [];
    for (let index = 0; index < quantity; index++) {
        let element = document.createElement(type);
        element.classList.add(elementClass);
        elements[index] = element;
    }
    return elements;
}
