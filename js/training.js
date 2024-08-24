let outerContainer = document.querySelector(".all_courses_container")
let innerContainer_1 = outerContainer.querySelector(".all_courses_list")
let innerContainer = outerContainer.getElementsByTagName("a")
let innercardWidth = innerContainer_1.clientWidth+27

let bodywidth = 3

if (document.body.clientWidth<1200){
    bodywidth = 2
}
if (document.body.clientWidth<768){
    bodywidth = 1
}

outerContainer.style.width = innercardWidth*innerContainer.length+"px"

let cardLeftBtn = document.querySelector("#crs_left_btn")
let cardRightBtn = document.querySelector("#crs_right_btn")

let totalwidth = (innerContainer.length-bodywidth)*innercardWidth
console.log(totalwidth,innerContainer_1.style.marginLeft)

cardRightBtn.addEventListener("click", function() {
    if(-totalwidth != ((innerContainer_1.style.marginLeft.slice(0,-2)))){
        console.log((innerContainer_1.style.width.slice(0,-2))-innercardWidth)
        innerContainer_1.style.marginLeft = ((+innerContainer_1.style.marginLeft.slice(0,-2))-innercardWidth)+"px"
    }
    
    
})
cardLeftBtn.addEventListener("click", function() {
    if(innerContainer_1.style.marginLeft.slice(0,-2) !=  0){
        console.log((innerContainer_1.style.width.slice(0,-2))+innercardWidth,((innerContainer_1.style.marginLeft.slice(0,-2))-innercardWidth))
        innerContainer_1.style.marginLeft = ((+innerContainer_1.style.marginLeft.slice(0,-2))+innercardWidth)+"px"
    }
    
})
//console.log("outercontainer", innercardWidth,innercardWidth*innerContainer.length+150)

