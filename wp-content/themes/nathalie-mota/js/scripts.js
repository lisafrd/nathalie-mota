document.addEventListener("DOMContentLoaded", function() {
    // Récupérer la modale et le lien "CONTACT"
    var modal = document.getElementById("modale-contact");
    var contactLink = document.querySelector(".header-contact");
    var closeButton = modal.querySelector(".close");
    var blackBackground = document.querySelector(".black-background");

    // Fonction pour afficher la modale
    function openModal() {
        modal.style.display = "block";
        blackBackground.classList.add("active");
    }

    // Fonction pour masquer la modale
    function closeModal() {
        modal.style.display = "none";
        blackBackground.classList.remove("active");
    }

    // Événement au clic sur le lien "CONTACT"
    contactLink.addEventListener("click", function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du lien
        openModal(); // Afficher la modale
    });

    // Événement au clic sur le bouton de fermeture
    closeButton.addEventListener("click", closeModal);

    // Événement pour fermer la modale si l'utilisateur clique en dehors de celle-ci
    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            closeModal();
        }
    });
});
