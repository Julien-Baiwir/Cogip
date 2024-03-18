document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();

    const invoice = document.getElementById('invoice');
    const date = document.getElementById('date');
    const company = document.getElementById('company');

    // Check required fields
    if (!invoice.value || !date.value || !company.value ){
        alert('Please fill in all fields');
        return false;
    }

    this.submit();
});

