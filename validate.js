
  const form = document.getElementById('signup-form');
  const username = document.getElementById('uname');
  const email = document.getElementById('email');
  const phone = document.getElementById('phone');
  const password = document.getElementById('password');
  const passwordConfirm = document.getElementById('passwordConfirm');
  const signupButton = document.getElementById('signup-button');

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    if (validateForm()) {
      form.submit();
    }
  });

  function validateForm() {
    let isValid = true;

    if (username.value === '') {
      isValid = false;
      showError(username, 'Username is required');
    }

    if (email.value === '') {
      isValid = false;
      showError(email, 'Email is required');
    } else if (!isValidEmail(email.value)) {
      isValid = false;
      showError(email, 'Email is invalid');
    }

    if (phone.value === '') {
      isValid = false;
      showError(phone, 'Phone number is required');
    } else if (!isValidPhone(phone.value)) {
      isValid = false;
      showError(phone, 'Phone number is invalid');
    }

    if (password.value === ''|| password.value.length<8) {
      isValid = false;
      showError(password, 'Password is required and make sure it is at least 8 characters');
    }

    if (passwordConfirm.value === '') {
      isValid = false;
      showError(passwordConfirm, 'Please confirm your password');
    } else if (password.value !== passwordConfirm.value) {
      isValid = false;
      showError(passwordConfirm, 'Passwords do not match');
    }

    return isValid;
  }

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  function isValidPhone(phone) {
    const phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone);
  }

  function showError(field, message) {
    const errorDiv = document.createElement('div'); //creates a new div
    errorDiv.innerHTML = message;
    errorDiv.style.color = 'red'; // add this line to set text color to red
    field.parentElement.insertBefore(errorDiv, field.nextSibling); //ensures that the error message appears immediately after the field element in the DOM.

  }

