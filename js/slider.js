// Slider on Homepage
/*
let slides = document.querySelectorAll(".slide");
let prevBtn = document.querySelector(".prev");
let nextBtn = document.querySelector(".next");
var timer;
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    var newIndex = slideIndex - 1;
    slides[slideIndex - 1].style.display = "block";
    clearTimeout(timer);
    timer = setTimeout(() => plusSlides(1), 5000);
}

prevBtn.addEventListener("click", function (event) {
    plusSlides(-1);
})

nextBtn.addEventListener("click", function (event) {
    plusSlides(1);
})
*/
var counter = 1;
setInterval(function () {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);