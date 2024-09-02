let slideIndex = 0;
let slideInterval;

function showSlides(n) {
    const slides = document.querySelectorAll('.banner-principal .slide');
    const dots = document.querySelectorAll('.dot');

    // Ajusta o índice do slide atual para ser cíclico
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    } else {
        slideIndex = n;
    }

    // Oculta todos os slides
    slides.forEach((slide) => {
        slide.style.display = 'none';
    });

    // Remove a classe 'active' de todos os pontos
    dots.forEach((dot) => {
        dot.className = dot.className.replace(' active', '');
    });

    // Mostra o slide atual e ativa o ponto correspondente
    slides[slideIndex].style.display = 'block';
    dots[slideIndex].className += ' active';
}

function nextSlide() {
    showSlides(slideIndex + 1);
}

function currentSlide(n) {
    clearInterval(slideInterval); // Para a alternância automática ao clicar em um indicador
    showSlides(n);
    slideInterval = setInterval(nextSlide, 5000); // Reinicia a alternância automática
}

// Configura o intervalo para alternar os slides automaticamente
slideInterval = setInterval(nextSlide, 7000);

// Adicione um listener de evento aos pontos
document.querySelectorAll('.dot').forEach((dot, index) => {
    dot.addEventListener('click', () => currentSlide(index));
});

// Mostra o primeiro slide
showSlides(slideIndex);




