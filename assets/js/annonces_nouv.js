document.querySelector('section form button')
    .addEventListener('click',function (event) {
        event.preventDefault();

        let error = false;
        const inputVerif = function() {
            if (this.value === '') {
                this.classList.add('error');
                this.previousElementSibling.classList.add('error');
                error = true;
            } else {
                this.classList.remove('error');
                this.previousElementSibling.classList.remove('error');
                error = false;
            }
        };

        let titreInput = document.getElementById('titre');
        let resumeInput = document.getElementById('resume');
        let contenuInput = document.getElementById('contenu');
        let imageInput = document.getElementById('image');

        if (titreInput.value === '') {
            titreInput.classList.add('error');
            titreInput.previousElementSibling.classList.add('error');
            error = true;
        }
        titreInput.addEventListener('input', inputVerif);

        if (resumeInput.value === '') {
            resumeInput.classList.add('error');
            resumeInput.previousElementSibling.classList.add('error');
            error = true;
        }
        resumeInput.addEventListener('input', inputVerif);

        if (contenuInput.value === '') {
            contenuInput.classList.add('error');
            contenuInput.previousElementSibling.classList.add('error');
            error = true;
        }
        contenuInput.addEventListener('input', inputVerif);

        if (imageInput.value.match(/\.(gif|jpe?g|tiff|png|webp|bmp)$/) === null) {
            imageInput.classList.add('error');
            imageInput.previousElementSibling.classList.add('error');
            error = true;
        }
        imageInput.addEventListener('input', function () {
            if (this.value.match(/\.(gif|jpe?g|tiff|png|webp|bmp)$/) === null) {
                this.classList.add('error');
                this.previousElementSibling.classList.add('error');
                error = true;
            } else {
                this.classList.remove('error');
                this.previousElementSibling.classList.remove('error');
                error = false;
            }
        });

        if (!error) {
            document.querySelector('section form').submit();
        }
        else {
            document.querySelector('section form .alert').classList.remove('hidden');
        }
    });