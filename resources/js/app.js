import './bootstrap';

import * as bootstrap from 'bootstrap';

import '~resources/scss/app.scss';


import.meta.glob([
    '../img/**'
])
//preview img upload 
 const imageInput = document.querySelector('#image');

 imageInput.addEventListener('change', showPreview);

function showPreview(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-img-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}