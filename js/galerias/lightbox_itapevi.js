let currentIndex = 0;
const images = [
    "../../img/galeria/Praça da cidadania de Itapevi/WhatsApp Image 2024-09-13 at 13.44.31 (1).jpeg",
    "../../img/galeria/Praça da cidadania de Itapevi/WhatsApp Image 2024-09-13 at 13.44.31 (2).jpeg",
    "../../img/galeria/Praça da cidadania de Itapevi/WhatsApp Image 2024-09-13 at 13.44.31.jpeg",
    "../../img/galeria/Praça da cidadania de Itapevi/WhatsApp Image 2024-09-13 at 13.44.32 (1).jpeg",
    "../../img/galeria/Praça da cidadania de Itapevi/WhatsApp Image 2024-09-13 at 13.44.32.jpeg"
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
