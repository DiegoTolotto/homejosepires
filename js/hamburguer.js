document.querySelector('#menu-btn').addEventListener('click', function() {
    const nav = document.querySelector('.nav');
    const dropdownMenu = document.querySelector('#dropdown-menu');
    
    // Alterna a classe 'active' no menu de navegação
    nav.classList.toggle('active');
    
    // Verifica se o menu de navegação está ativo
    if (nav.classList.contains('active')) {
        dropdownMenu.style.display = 'block'; // Mostra o drop-down
    } else {
        dropdownMenu.style.display = 'none'; // Esconde o drop-down
    }
});