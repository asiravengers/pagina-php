document.addEventListener("DOMContentLoaded", () => {
    const pantallaCarga = document.querySelector('.charge');
    const contenidoPrincipal = document.querySelector('.index');

        pantallaCarga.style.display = 'flex';
        contenidoPrincipal.style.display = 'none';

    const cargarRecursosDiferidos = () => {
    const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
        });

    const lazyIframes = document.querySelectorAll('iframe[data-src]');
        lazyIframes.forEach(iframe => {
            iframe.src = iframe.dataset.src;
            iframe.removeAttribute('data-src');
        });
    };

    setTimeout(() => {
        pantallaCarga.style.display = 'none';
        contenidoPrincipal.style.display = 'block';
            document.body.style.overflow = 'auto';
            cargarRecursosDiferidos();
        }, 5000);
    });
