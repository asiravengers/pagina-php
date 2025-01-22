// Función para alternar la visibilidad de la descripción
function toggleDescription(index) {
    const member = document.querySelectorAll('.team-member')[index];
    const description = member.querySelector('.description');
    const button = member.querySelector('.toggle-description');

    // Si la descripción está oculta, mostrarla, si está visible, ocultarla
    if (description.style.display === 'block') {
        description.style.display = 'none';
        button.textContent = 'Leer más';
    } else {
        description.style.display = 'block';
        button.textContent = 'Leer menos';
    }
}
