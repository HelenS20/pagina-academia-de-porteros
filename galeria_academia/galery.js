window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
})







//? ------Cargar más-------

let hideText_btn = document.getElementById('hideText_btn');
let hideText = document.getElementById('hideText');
hideText_btn.addEventListener('click', toggleText);
function toggleText() {
hideText.classList.toggle('show');

    if(hideText.classList.contains ('show')){
        hideText_btn.innerHTML = 'Mostar menos<i class="bi bi-arrow-up-short"></i>';
    }
    else{
        hideText_btn.innerHTML = 'Cargar Más<i class="bi bi-arrow-down-short"></i>';
    }
}
