const slides= document.querySelector(".slide")
var counter=0;

slides.forEach(
    (slide, index) => {
        slide.style.left = '${index*100}%'
    }
)