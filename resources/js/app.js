import './bootstrap';
import '~resources/scss/app.scss';

// Permette a vite di processare le immagini
import.meta.glob([
    '../img/**'
]);

// Importiamo parte js di bootstrap 

import * as bootstrap from 'bootstrap';

const buttons = document.querySelectorAll('.btn-delete');

buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const deleteModal = new bootstrap.Modal('#delete-modal');

        const title       = button.getAttribute('data-title');
        document.querySelector('#title-to-delete').innerHTML = title;

        document.querySelector('#action-delete').addEventListener('click', () => {
            button.parentElement.submit();

        });

        deleteModal.show();
    })
})