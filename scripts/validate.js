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

    getPasswordField.value = ""; //not necessarily needed to, trip ko lang ilagay
    getConfirmPasswordField.value = ""; //saka para na din hindi magka error pag ibaback ni user tapos hindi niya tinanggal yung password na naka input, pag " " kasi yung value niya, mag eequal both fields eh
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
      closeRegisterPopup();
      form.submit(); //submits yung form after i click yung button sa sweet alert
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

function checkCredentials(emailInput, passwordInput) {
  const accounts = {
    applicant1: {password: "1234", role: "applicant",},
    scholar1: {password: "qwerty",role: "scholar",},
    staff1: {password: "54321",role: "staff",},
  };

  let role = null;
 //checks if nag exists yung inputted email account sa accounts(applicant1, scholar1, staff1)
  //checks if magmamatch yung password sa password na ininput
  //if success, role = kung anong role kabilang yung account
  //display an alert kapag hindi nag eexist yung account

  if (accounts[emailInput] && accounts[emailInput].password === passwordInput) {
    role = accounts[emailInput].role;
  } 
  else {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Invalid account!",
    });
    return false; //log in failed
  }

  // lipat page based sa role
  //file paths ng dashboards since dashboards mauunang mag appear after login
  switch (role) {
    case "applicant":
      window.location.href =
        "/html/applicants html/applicants-dashboard.html";
      break;
    case "scholar":
      window.location.href =
        "/html/scholars html/scholars-dashboard.html";
      break;
    case "staff":
      window.location.href = "/html/staffs html/staffs-dashboard.html";
      break;
  }
}
