const accounts = { //key = account email
  applicant1: {
    password: "1234",
    role: "applicant",
    personalInfo: {
      lastName: "Pham",
      givenName: "Hanni",
      middleName: "Pham",
      dateOfBirth: "2004-10-15",
      phoneNumber: "09123456789",
      email: "hannipham@gmail.com",
    },
  },
  scholar1: {
    password: "qwerty",
    role: "scholar",
    personalInfo: {
      lastName: "Uchinaga",
      givenName: "Aeri",
      middleName: "Uchinaga",
      dateOfBirth: "2000-10-30",
      phoneNumber: "09198765432",
      email: "aerichandesu@2gmail.com",
    },
  },
  staff1: {
    password: "54321",
    role: "staff",
    personalInfo: {
      lastName: "Yizhuo",
      givenName: "Ning",
      middleName: "Yizhuo",
      dateOfBirth: "2002-10-23",
      phoneNumber: "09234567890",
      email: "imnontningning@gmail.com",
    },
  },
};


function testLogin(event) {
  event.preventDefault();

  const emailInput = document.querySelector("#email-field").value.trim();
  const passwordInput = document.querySelector("#password-field").value.trim();

  if (!checkIfFieldsAreEmpty(emailInput, passwordInput)) {
    return;
  }

  const accountKey = checkCredentials(emailInput, passwordInput);

  if (accountKey) {
    const account = accounts[accountKey];

    // Redirect based on role
    switch (account.role) {
      case "applicant":
        window.location.href = "/html/applicants html/applicants-dashboard.html";
        break;
      case "scholar":
        window.location.href = "/html/scholars html/scholars-dashboard.html";
        break;
      case "staff":
        window.location.href = "/html/staffs html/staffs-dashboard.html";
        break;
    }
  }
}

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


