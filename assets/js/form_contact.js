document.querySelector('section form button')
    .addEventListener('click',function (event) {
        event.preventDefault();

        let error = false;
        const regexInput = /^[\S]{1,50}$/;
        const inputVerif = function() {
            if (this.value.match(regexInput) === null) {
                this.classList.add('error');
                this.previousElementSibling.classList.add('error');
                error = true;
            } else {
                this.classList.remove('error');
                this.previousElementSibling.classList.remove('error');
                error = false;
            }
        };

        let firstNameInput = document.getElementById('firstName');
        let lastNameInput = document.getElementById('lastName');
        let emailInput = document.getElementById('email');
        let messageInput = document.getElementById('message');

        if (firstNameInput.value.match(regexInput) === null) {
            firstNameInput.classList.add('error');
            firstNameInput.previousElementSibling.classList.add('error');
            error = true;
        }
        firstNameInput.addEventListener('input', inputVerif);

        if (lastNameInput.value.match(regexInput) === null) {
            lastNameInput.classList.add('error');
            lastNameInput.previousElementSibling.classList.add('error');
            error = true;
        }
        lastNameInput.addEventListener('input', inputVerif);

        if (emailInput.value.match(/^[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_.]+\.[a-z]{2,}$/) === null) {
            emailInput.classList.add('error');
            emailInput.previousElementSibling.classList.add('error');
            error = true;
        }
        emailInput.addEventListener('input', inputVerif);

        if (messageInput.value === '') {
            messageInput.classList.add('error');
            messageInput.previousElementSibling.classList.add('error');
            error = true;
        }
        messageInput.addEventListener('input', function () {
            if (this.value === '') {
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
            alert('Message envoyé !');
        }
        else {
            document.querySelector('section form .alert').classList.remove('hidden');
        }
    });