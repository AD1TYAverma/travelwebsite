let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');


// function setTheme(theme){

//     document.body.classList.remove("dark-theme");
//     document.body.classList.remove("blue-theme");

//     if(theme === "dark"){
//         document.body.classList.add("dark-theme");
//     }

//     if(theme === "blue"){
//         document.body.classList.add("blue-theme");
//     }

// }



menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
});


var swiper = new Swiper(".review-slider", {
    loop: true,
    spaceBetween: 20,
    autoHeight: true,
    grabCursor: true,   // ✅ yaha spelling fix

    breakpoints:{
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },
    }
});

// let lodeMoreBtn = document.querySelector('.package .load-more .btn');
// let currentItem = 3;
// loadeMoreBtn.onclick = ()=>{
//     let boxes = [...document.querySelectorAll('.package .box-container .box')];
//     for(var i = currentItem; i<currentItem +3; i++){
//         boxes[i].style.display='inline-block';
//     };
//     currentItem +=3;
//     if(currentItem >= boxes.length){
//         lodeMoreBtn.style.display='none';
//     }
// }

let loadMoreBtn = document.querySelector('.package .load-more .btn');
let currentItem = 6;

loadMoreBtn.onclick = () => {

    let boxes = document.querySelectorAll('.package .box-container .box');

    for(let i = currentItem; i < currentItem + 3; i++){
        if(boxes[i]){
            boxes[i].style.display = "block";
        }
    }

    currentItem += 3;

    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = "none";
    }
}