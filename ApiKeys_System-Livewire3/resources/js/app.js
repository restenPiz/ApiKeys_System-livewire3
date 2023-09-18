import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// resources/js/app.js

require('alpinejs');

document.addEventListener('DOMContentLoaded', function () {
    // Verifica se há um alerta flash na página
    const alert = document.querySelector('.alert');
    
    if (alert) {
        // Fecha o alerta após 5 segundos
        setTimeout(function () {
            alert.style.display = 'none';
        }, 5000);
    }
});
