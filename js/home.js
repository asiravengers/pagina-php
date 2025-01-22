
const video = document.getElementById('background-video');
const toggleButton = document.getElementById('toggle-video');

if (toggleButton) {
    toggleButton.addEventListener('click', () => {
        if (video.paused) {
            video.play();
            toggleButton.textContent = 'Pause Video';
        } else {
            video.pause();
            toggleButton.textContent = 'Play Video';
        }
    });
}

window.addEventListener('scroll', function() {
    const secciones = document.querySelectorAll('.apartado');
    
    secciones.forEach(function(seccion) {
        const seccionTop = seccion.getBoundingClientRect().top;
        const seccionVisible = window.innerHeight - 150;
        
        if (seccionTop < seccionVisible) {
            seccion.classList.add('visible');
        }
    });
});



document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    
    let currentIndex = 0;
    
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;
    
    function updateCarousel() {
        // Asegúrate de que la posición de los items se actualice correctamente
        const offset = -currentIndex * 100;
        carousel.style.transform = `translateX(${offset}%)`;
    }
    
    prevBtn.addEventListener('click', () => {
        currentIndex--;
        if (currentIndex < 0) currentIndex = totalItems - 1;
        updateCarousel();
    });
    
    nextBtn.addEventListener('click', () => {
        currentIndex++;
        if (currentIndex >= totalItems) currentIndex = 0;
        updateCarousel();
    });
});

