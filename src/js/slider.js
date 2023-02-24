
window.onload = init;
const leftArrow = document.querySelector(".slider__left");
const rightArrow = document.querySelector(".slider__right");
const sliderItems = document.querySelectorAll(".slider__item");
const itemContainer = document.querySelector(".slider__content");
const paginationContainer = document.querySelector(".slider__lines");
const paginationElements = createElements("div", "slider__line", sliderItems.length);
let sliderLineActive = "slider__line_active";
let sliderDisabled = "slider__line_disabled";
let currentPosition = 0;


rightArrow.addEventListener("click", () => {
    paginationElements[currentPosition].classList.remove(sliderLineActive);
    paginationElements[currentPosition].classList.add(sliderDisabled);
    currentPosition++;
    if (currentPosition >= sliderItems.length) {
      currentPosition = 0;
    }
    paginationElements[currentPosition].classList.add(sliderLineActive);
    sliderItems.forEach((item, indx) => {
      const position = indx - currentPosition;
      item.style.transform = `translateX(${position * 100}%)`;
    });
  });
  
  leftArrow.addEventListener("click", () => {
    paginationElements[currentPosition].classList.remove(sliderLineActive);
    paginationElements[currentPosition].classList.add(sliderDisabled);
    currentPosition--;
    if (currentPosition < 0) {
      currentPosition = sliderItems.length - 1;
    }
    paginationElements[currentPosition].classList.add(sliderLineActive);
    sliderItems.forEach((item, indx) => {
      const position = indx - currentPosition;
      item.style.transform = `translateX(${position * 100}%)`;
    });
  });
/*
 step 1: 0%, 100%, 200%
 step
*/
function init(){
    appendElements(paginationElements, paginationContainer);
    sliderItems.forEach((slide,indx) => {
        slide.style = `transform: translateX(${indx * 100}%)`
    });
}
function createElements(type, elementClass, quantity){
    let elements = [];
    for (let index = 0; index < quantity; index++) {
        let element = document.createElement(type);
        element.classList.add(elementClass);
        elements[index] = element;
    }
    return elements;
}
function appendElements(elements, container){
    elements.forEach((element, index) => {
        container.appendChild(element);
        if(index === currentPosition) element.classList.add("slider__line_active");
        else element.classList.add("slider__line_disabled");
    });
}