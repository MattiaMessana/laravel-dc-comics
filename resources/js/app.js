import './bootstrap';
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import '@fortawesome/fontawesome-free/js/all.min.js';
import.meta.glob(["../img/**"]);



const deleteBtns = document.querySelectorAll('.delete-form button')

if (deleteBtns.length > 0) {
    deleteBtns.forEach((btn) => {
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            // alert('bottone cliccato');
            //creo modale in js
            const modal = new bootstrap.Modal(
                document.getElementById('delete-modal')
            );
            //prelevo titolo comic
            const comicTitle = btn.dataset.comicTitle;
            //inserisco i dati del comic nel modale 
            console.log(comicTitle);
            document.getElementById('modal-title').innerHTML = `Stai per cancellare ${ comicTitle }`;
            //ascoltimo il clik cul bottone
            document.getElementById('modal-delete-btn').addEventListener('click' , function() {
                btn.parentElement.onsubmit();
            });
            //mostro il modale
            modal.show();
        });
    });
};

