(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.changePasswordForm');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        // Prevent submission if the form is invalid
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          const password = document.getElementById('NewPassword').value;
          const confirmPassword = document.getElementById('ConfirmNewPassword').value;
  
          // Compare passwords and handle mismatch
          if (!comparePasswords(password, confirmPassword)) {
            alert('Password not Match');
            
            var errMes = document.getElementById('ErrorMes');
            errMes.classList.remove('invalid-feedback');
            errMes.classList.add('valid-feedback');

            var MisPass = document.getElementById('MisMatchPassword');
            MisPass.classList.remove('invisible');
            MisPass.classList.add('invalid-feedback');
                
            var Message = document.getElementById('ConfirmNewPassword');
            if(Message.classList.contains('is-valid')){
              Message.classList.remove('is-valid');
            }
            Message.classList.add('is-invalid')
            
            if(form.classList.contains('was-validated')){
              form.classList.remove('was-validated');
            }

            event.preventDefault(); // Prevent form submission if passwords don't match
            event.stopPropagation();

            return;
          }
        }
        
        var errMes = document.getElementById('ErrorMes');
        //errMes.classList.add('invisible');
        if (errMes.classList.contains('valid-feedback')){
          errMes.classList.remove('valid-feedback');
        }
        if (errMes.classList.contains('invalid-feedback') === false)
        {
          errMes.classList.add('invalid-feedback')
        }

        var MisPass = document.getElementById('MisMatchPassword');
        MisPass.classList.add('invisible');

        var Message = document.getElementById('ConfirmNewPassword');
        if (Message.classList.contains('is-invalid')){
          Message.classList.remove('is-invalid');
        }
        Message.classList.add('is-valid');
        

        form.classList.add('was-validated');
        
        
      }, false);
    });
    
})()

function comparePasswords(password, confirmPassword) {


  // Check if passwords match
  if (password !== confirmPassword) {
      return false;
  }

  return true;
}
