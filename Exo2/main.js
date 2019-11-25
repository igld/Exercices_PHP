let bouton = document.querySelector('.UpdateCouleur');

let divColorBlue = document.querySelector(".backgroundColoRBlue");

bouton.addEventListener("click", function() {
    divColorBlue.classList.remove("backgroundColoRBlue");
    divColorBlue.classList.add("backgroundColorRed");

});
