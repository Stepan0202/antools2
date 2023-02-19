const leftArrow = document.querySelector(".slider__left");
const rightArrow = document.querySelector(".slider__right");
const sliderItems = document.querySelectorAll(".slider__item");
const itemContainer = document.querySelector(".slider__content");
let currentPosition = 0;

sliderItems.forEach((slide,indx) => {
    slide.style = `transform: translateX(${indx * 100}%)`
});

rightArrow.addEventListener("click", (e) => {
    currentPosition -= 100;
    sliderItems.forEach((slide,indx) => {
        slide.style = `transform: translateX(${(indx * currentPosition) - 100}%)`;
        console.log(`(indx * currentPosition) - 100: ${(indx * currentPosition) - 100}`);
        console.log(`current position: ${currentPosition}`);
        console.dir(slide);
    });
 
})
leftArrow.addEventListener("click", (e) => {
    currentPosition++;
    sliderItems.forEach((slide,indx) => {
        slide.style = `transform: translateX(${(indx+currentPosition) * 100}%)`
    });
})