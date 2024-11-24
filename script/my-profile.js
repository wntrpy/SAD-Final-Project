function displayAccountData() {
  /*const emailInput = document.querySelector("#email-field").value.trim();
  const passwordInput = document.querySelector("#password-field").value.trim();
  const accountKey = checkCredentials(emailInput, passwordInput);
  if (!accountKey) {
    alert("error");
    return; 
  }*/

  //lagay yung dummy personal info per account sa fields
  if (account && account.personalInfo) {
    alert("test");
    document.getElementById("last-name-field").value = account.personalInfo.lastName; //nakabase lang to sa dummy personal infos, palitan nalang
    document.getElementById("given-name-field").value = account.personalInfo.givenName;
    document.getElementById("middle-name-field").value = account.personalInfo.middleName;
    document.getElementById("date-of-birth-field").value = account.personalInfo.dateOfBirth;
    document.getElementById("contact-number-field").value = account.personalInfo.phoneNumber;
    document.getElementById("email-field").value = account.personalInfo.email;
  } else {
    alert("error");
  }
}

/***************************************************************************************************************/
/***** CHANGE PASSWORD ****************************************************************************************/
/***************************************************************************************************************/
document.getElementById("change-password-popup").addEventListener("submit", function(event) {
  event.preventDefault(); 

  const currentPassowrd = document.getElementById("current-password-field").value;//for later use
  const newPassword = document.getElementById("new-password-field").value;
  const confirmPassword = document.getElementById("confirm-password-field").value;

  if (newPassword !== confirmPassword) {
    alert("New Password and Confirm Password do not match.");
    return;
  }

  if (newPassword.length < 8) {
    alert("New Password must be at least 8 characters long.");
    return;
  }

  alert("Password changed successfully!");
  closePopup('#change-password-popup');
});


/***************************************************************************************************************/
/***** UPLOADE NEW PICTURE ************************************************************************************/
/***************************************************************************************************************/

function handleUploadNewPicture() {
  let uploadedFile = null;

  const choosePhotoBtn = document.getElementById("choose-photo-btn");
  const fileInput = document.getElementById("file-input");
  const profilePicture = document.getElementById("profile-picture"); 

  if (!choosePhotoBtn || !fileInput || !profilePicture) {
    alert("Null element");
    return;
  }

  choosePhotoBtn.addEventListener("click", () => {
    fileInput.click(); //open file picker since naka hide siya sa choose photo button
  });

  // Handle file selection
  fileInput.addEventListener("change", (event) => {
    uploadedFile = event.target.files[0]; 

    if (uploadedFile) {
      const reader = new FileReader();

      reader.onload = function (e) {
        // change src ni profile pict 
        alert(`Picture: ${e.target.result}`);
        profilePicture.src = e.target.result; //base64 encoded string
        closePopup('#upload-new-pic-popup'); //close popup pagkatapos mag upload

        //php here para isave yung pic sa db?
        //mawawala din agad yung pic pag nirefresh
      };

      reader.onerror = function (error) {
        console.error("Error reading file:", error);
      };

      reader.readAsDataURL(uploadedFile); 
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  handleUploadNewPicture();
});
