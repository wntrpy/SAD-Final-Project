/***************************************************************************************************************/
/***** REGISTRATION PASSWORD VALIDATION ************************************************************************/
/***************************************************************************************************************/

function validatePassword(event) {
  event.preventDefault();

  const form = document.querySelector("#register-form");
  const getPasswordField = document.querySelector(
    "#register-password-field"
  );
  const getConfirmPasswordField = document.querySelector(
    "#register-confirm-password-field"
  );

  //guard clause pang check bago mag proceed sa submission ng form
  if (getPasswordField.value !== getConfirmPasswordField.value) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Password did not match!",
    });

    getPasswordField.value = ""; 
    getConfirmPasswordField.value = ""; //para hindi magka error pag ibaback ni user tapos hindi niya tinanggal yung password na naka input, pag " " kasi yung value niya, mag eequal both fields
    return false; //stops yung form sa pagsusubmit
  }

  /*
  sweet alert iconsss
  success, warning, info, question
  */

  //If nakalusot sa guard clause
  Swal.fire({
    icon: "success",
    title: "Success",
    text: "Registration Successful!",
  }).then((result) => {
    if (result.isConfirmed) {
      closePopup('#user-register-popup');
      form.submit(); //submits yung form after i click yung button sa alert
    }
  });
}


/***************************************************************************************************************/
/***** lOGIN ACCOUNT VALIDATION ********************************************************************************/
/***************************************************************************************************************/

function checkIfFieldsAreEmpty(emailInput, passwordInput){
  if (!emailInput || !passwordInput) { //if falsy
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "All fields must be filled out!",
    });
    return false;
  }
  return true; //if truthy
}





