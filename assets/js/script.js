"use strict";

function addFriend(id, obj) {

    if (id != '') {

        $(obj).closest('.sugestaoitem').fadeOut();

        $.ajax({
            type: 'POST',
            url: 'ajax/add_friend',
            data: { id: id }
        });

    }

}

function aceitarFriend(id, obj) {

    if (id != '') {
        $(obj).closest('.requisicaoitem').fadeOut();

        $.ajax({
            type: 'POST',
            url: 'ajax/aceitar_friend',
            data: { id: id }
        });
    }

}

/* modelo de slide show do W3Schools - deve ser trocado pela lightbox? */
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
// script do authbox /
function mostrarElemento(idElemento) {
    document.getElementById(idElemento).style.display = "block";
}
function ocultarElemento(idElemento) {
    document.getElementById(idElemento).style.display = "none";
}
function validaLogin() {
    var nome = document.getElementById("login").value;
    var senha = document.getElementById("password").value;

    if ((nome == "") && (senha == "")) {
        alert("Tente novamente");
    } else {
        mostrarElemento("div_mensagem");
        mostrarElemento("idioma")
        ocultarElemento("div_login");
    }
}