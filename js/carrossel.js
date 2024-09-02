
// Seção carrosel
document.addEventListener('DOMContentLoaded', function() {
    const carrossel = document.querySelector('.carrossel');
    const images = carrossel.querySelectorAll('img');
    const prevButton = document.querySelector('.carrossel-prev');
    const nextButton = document.querySelector('.carrossel-next');

    let currentIndex = 0;

    function showImage(index) {
        // Remove a classe active de todas as imagens
        images.forEach(img => img.classList.remove('active'));
        // Adiciona a classe active na imagem atual
        images[index].classList.add('active');
    }

    function showNextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    function showPrevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }

    nextButton.addEventListener('click', showNextImage);
    prevButton.addEventListener('click', showPrevImage);

    // Exibir a primeira imagem inicialmente
    showImage(currentIndex);
});






