let outerContainer = document.querySelector(".all_courses_container")
let innerContainer_1 = outerContainer.querySelector(".all_courses_list")
let innerContainer = outerContainer.getElementsByTagName("a")
let innercardWidth = innerContainer_1.clientWidth+10

console.log(innerContainer)
let bodywidth = 3

if (document.body.clientWidth < 1200) {
    bodywidth = 2
}
if (document.body.clientWidth < 768) {
    bodywidth = 1
}

outerContainer.style.width = (innercardWidth*innerContainer.length)+20 + "px"
console.log(outerContainer.clientWidth)
let cardLeftBtn = document.querySelector("#crs_left_btn")
let cardRightBtn = document.querySelector("#crs_right_btn")

let totalwidth = (innerContainer.length - bodywidth) * innercardWidth
//console.log(totalwidth,innerContainer_1.style.marginLeft)


function onSwipeRight() {
    if (innerContainer_1.style.marginLeft.slice(0, -2) != 0) {
        //console.log((innerContainer_1.style.width.slice(0,-2))+innercardWidth,((innerContainer_1.style.marginLeft.slice(0,-2))-innercardWidth))
        innerContainer_1.style.marginLeft = ((+innerContainer_1.style.marginLeft.slice(0, -2)) + (innercardWidth)) + "px"
    }

}
function onSwipeLeft() {
    if (-totalwidth != ((innerContainer_1.style.marginLeft.slice(0, -2)))) {
        //console.log((innerContainer_1.style.width.slice(0,-2))-innercardWidth)
        innerContainer_1.style.marginLeft = ((+innerContainer_1.style.marginLeft.slice(0, -2)) - innercardWidth) + "px";
    }
}

//console.log("outercontainer", innercardWidth,innercardWidth*innerContainer.length+150)

const swipeArea = outerContainer;

let startX = 0;
let endX = 0;

swipeArea.addEventListener('touchstart', (event) => {
    startX = event.touches[0].clientX;
});

swipeArea.addEventListener('touchend', (event) => {
    endX = event.changedTouches[0].clientX;

    // Determine the swipe direction
    if (endX > startX + 50) { // Swiped right (50px threshold to ensure it's a swipe)
        onSwipeRight();
    } else if (endX < startX - 50) { // Swiped left (50px threshold to ensure it's a swipe)
        onSwipeLeft();
    }
});

