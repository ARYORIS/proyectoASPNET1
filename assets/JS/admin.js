document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.carousel');

    // Ejemplo de contenido dinámico en el carrusel
    const items = ['Elemento 1', 'Elemento 2', 'Elemento 3', 'Elemento 4'];

    items.forEach(item => {
        const div = document.createElement('div');
        div.textContent = item;
        carousel.appendChild(div);
    });
});
