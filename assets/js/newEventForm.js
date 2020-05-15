document.querySelector('section form button')
    .addEventListener('click', function (event) {
        event.preventDefault();

        let error = false;
        const inputVerif = function () {
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

        let titleInput = document.getElementById('title');
        let summaryInput = document.getElementById('summary');
        let contentInput = document.getElementById('content');
        let imageInput = document.getElementById('image');

        if (titleInput.value === '') {
            titleInput.classList.add('error');
            titleInput.previousElementSibling.classList.add('error');
            error = true;
        }
        titleInput.addEventListener('input', inputVerif);

        if (summaryInput.value === '') {
            summaryInput.classList.add('error');
            summaryInput.previousElementSibling.classList.add('error');
            error = true;
        }
        summaryInput.addEventListener('input', inputVerif);

        if (contentInput.value === '') {
            contentInput.classList.add('error');
            contentInput.previousElementSibling.classList.add('error');
            error = true;
        }
        contentInput.addEventListener('input', inputVerif);

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
        } else {
            document.querySelector('section form .alert').classList.remove('hidden');
        }
    });