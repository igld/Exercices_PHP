var bouton = document.querySelector('.UpdateCouleur');

var divColorBlue = document.querySelector(".backgroundColoRBlue");

bouton.addEventListener("click", function () {
    divColorBlue.classList.remove("backgroundColoRBlue");
    divColorBlue.classList.add("backgroundColorRed");

});
