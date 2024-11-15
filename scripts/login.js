function testLogin(event) {
  event.preventDefault();

  const emailInput = document.querySelector("#email-field").value;
  const passwordInput = document.querySelector("#password-field").value;

  if (!checkIfFieldsAreEmpty(emailInput, passwordInput)) { // if text fields are empty
    return;
  }

  if(!checkCredentials(emailInput, passwordInput)){ // if credentials are invalid
    return;
  }
}

/***************************************************************************************************************/
/***** POPSTATE ************************************************************************************************/
/***************************************************************************************************************/

//automatic na nagrurun to after matapos mag load ng LOGIN PAGE
window.addEventListener('load', () => {
    //state, window title, url() = structure ng Browser History Entry
    //(check browser history)
    //PUSHES new entry sa browser history na ang URL is si LOGIN PAGE
    history.pushState(null, null, window.location.href); //Browser History: [Applicant Dashboard Entry(example lang to), Login Page Entry]

    // Function kapag pinindot yung back button ng mouse
    window.addEventListener('popstate', () => {
      //Add ulit ng new browser entry na LOGIN PAGE pa din yung URL
      //Bale ganito yung itsura ng updated Browser History: 
        //[Applicant Dashboard Entry, login Page Entry, Login Page Entry]
      //Hindi makakabalik si user sa previous pages after mag log out kasi yung previous entry ng Browser History is LOGIN PAGE
      history.pushState(null, null, window.location.href);

      //Display yung sweet alert error pag pinindot yung back button
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "You must log in to access the previous page.",
      });
    });
});


