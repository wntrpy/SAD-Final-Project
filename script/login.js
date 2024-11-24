
document.querySelector("#login-form").addEventListener("submit", function (event) {
  const emailInput = document.querySelector("#email-field").value.trim();
  const passwordInput = document.querySelector("#password-field").value.trim();

  if (!checkIfFieldsAreEmpty(emailInput, passwordInput)) {
      event.preventDefault(); 
  }
});





/***************************************************************************************************************/
/***** POPSTATE ************************************************************************************************/
/***************************************************************************************************************/
window.addEventListener('load', () => {
    //PUSHES new entry sa browser history na ang URL is si LOGIN PAGE
    history.pushState(null, null, window.location.href); //Browser History: [Applicant Dashboard Entry(example lang to), Login Page Entry]

    window.addEventListener('popstate', () => {
      //Add ulit ng new browser entry na LOGIN PAGE pa din yung URL
      //Bale ganito yung itsura ng updated Browser History: 
        //[Applicant Dashboard Entry, login Page Entry, Login Page Entry]
      history.pushState(null, null, window.location.href);

      //Display yung sweet alert error pag pinindot yung back button
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "You must log in to access the previous page.",
      });
    });
});


