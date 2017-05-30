"use strict";

function addFriend(id, obj) {

    if (id != '') {

        $(obj).closest('.sugestaoitem').fadeOut();

        $.ajax({
            type: 'POST',
            url: 'ajax/add_friend',
            data: {
                id: id
            }
        });

    }

}

function aceitarFriend(id, obj) {

    if (id != '') {
        $(obj).closest('.requisicaoitem').fadeOut();

        $.ajax({
            type: 'POST',
            url: 'ajax/aceitar_friend',
            data: {
                id: id
            }
        });
    }

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

function eventDialog() {
    var dialog = document.querySelector('dialog');
    var showModalButton = document.querySelector('.show-modal');
    if (!dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }
    showModalButton.addEventListener('click', function () {
        dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function () {
        dialog.close();
    });
}