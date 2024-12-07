$(document).ready(function () {
    $('#applicationForm').on('submit', function (e) {
        const fullName = $('#fullName').val();
        const email = $('#email').val();
        const phone = $('#phone').val();

        if (!fullName || !email || !phone) {
            alert('Please fill in all required fields.');
            e.preventDefault();
        }
    });
});
