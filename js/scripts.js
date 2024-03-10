let num = document.querySelector('#phoneNumber');
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        const phoneNumberInput = num;
        const phoneNumberPattern = /^\d{10}$/;

        if (!phoneNumberPattern.test(phoneNumberInput.value)) {
            event.preventDefault(); 
            showErrorMessage(phoneNumberInput, 'Please enter a valid phone number.');
        }
    });

    function showErrorMessage(inputElement, message) {
        const errorElement = inputElement.nextElementSibling;

        if (errorElement.classList.contains('error-message')) {
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
        } else {
            const newErrorElement = document.createElement('div');
            newErrorElement.className = 'error-message';
            newErrorElement.textContent = message;
            inputElement.parentNode.insertBefore(newErrorElement, inputElement.nextSibling);
        }
    }
});

