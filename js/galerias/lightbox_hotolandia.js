let currentIndex = 0;
const images = [
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.50 (1).jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.50 (2).jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.50.jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.51 (1).jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.51 (2).jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.51 (3).jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.51.jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.52 (1).jpeg",
    "../../img/galeria/Praca da cidadania de hortolandia/WhatsApp Image 2024-09-13 at 13.56.52.jpeg"
];

// Abrir o lightbox com a imagem correspondente
function openLightbox(index) {
    document.getElementById('lightbox').style.display = 'block';
    currentIndex = index;
    showImage(currentIndex);
}

// Fechar o lightbox
function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}

// Exibir a imagem no lightbox
function showImage(index) {
    const lightboxImg = document.getElementById('lightbox-img');
    lightboxImg.src = images[index];
}

// Navegar pelas imagens
function mudarImagem(direction) {
    currentIndex += direction;

    if (currentIndex >= images.length) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = images.length - 1;
    }

    showImage(currentIndex);
}
