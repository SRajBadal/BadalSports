var index = 0;
function carousel() {
    var slides = document.getElementsByClassName("mySlides");
    var labels = document.getElementsByClassName("myLabels");
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        labels[i].style.display = "NONE";
    }
    index++;
    if (index > slides.length) 
        index = 1
    slides[index-1].style.display = "block";
    labels[index-1].style.display = "block";
    setTimeout(carousel, 3000)
}