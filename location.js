
document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const nextBtn = document.querySelector(".slider-btn-next");
    const prevBtn = document.querySelector(".slider-btn-prev");

    let slideIndex = 0;

    function showSlide(index) {
        const slides = slider.querySelectorAll("img");
        if (index < 0) {
            slideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            slideIndex = 0;
        }

        slider.style.transform = `translateX(-${slideIndex * 100}%)`;
    }

    nextBtn.addEventListener("click", function() {
        slideIndex++;
        showSlide(slideIndex);
    });

    prevBtn.addEventListener("click", function() {
        slideIndex--;
        showSlide(slideIndex);
    });

    showSlide(slideIndex);
});