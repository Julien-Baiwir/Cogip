document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name');
    const tva = document.getElementById('tva');
    const email = document.getElementById('email');
    const description = document.getElementById('description');
    const country = document.getElementById('country');

    // Check required fields
    if (!name.value || !tva.value || !country.value ){
        alert('Please fill in all fields');
        return false;
    }

    this.submit();
});
