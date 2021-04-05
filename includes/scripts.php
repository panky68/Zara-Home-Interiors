<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<!-- Used to check footer-form validation, will display error msgs if form is in-valid -->
<script>
    var form = document.querySelector('.needs-validation'); //access document's form, using the class needs-validation
    form.addEventListener('submit', function(event){ //add event listener for when the form been submitted
        if(form.checkValidity() === false){ //if form is NOT valid
            event.preventDefault(); //prevent default, ie form is not sent
            event.stopPropagation(); //stop form submission 
        }
        form.classList.add('was-validated');
    });
</script>

<!-- Used to change classes to form to hide/display form on button click-->
<script src="footer-contact-form.js"></script>