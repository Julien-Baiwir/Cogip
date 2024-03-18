document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');

    // Check required fields
    if (!name.value || !email.value || !phone.value ){
        alert('Please fill in all fields');
        return false;
    };

   // Check email format
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.value.match(emailPattern)) {
        alert('Please enter a valid email address');
        return false;
    }
   // If all checks pass, submit the form
    this.submit();
});

