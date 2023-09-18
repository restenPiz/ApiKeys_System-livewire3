import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// resources/js/app.js
require('alpinejs');

document.addEventListener('livewire:load', function () {
    Livewire.on('show-temp-alert', function () {
        const alert = document.querySelector('.alert');
        
        if (alert) {
            alert.style.display = 'block';

            setTimeout(function () {
                alert.style.display = 'none';
            }, 5000); // Fechar o alerta após 5 segundos
        }
    });
});