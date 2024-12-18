<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="styles/login.css" />
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/layout.css" />


  </head>
  <body>
    <div class="main-container">
      <div class="image-container">
        <img src="img/logo1.png" alt="logo1" />
      </div>

      <form id="login-form" name = "form" action="login.php" method="POST">
        <div class="form-content">
          <h2 class="login-title">Log in to your account</h2>
          <div class="email-field">
            <label>Email</label>
            <input type="text" id="email-field" name="email" />
          </div>
          <div class="password-field">
            <label>Password</label>
            <input type="password" id="password-field" name="password"/>
          </div>
          <a href="/html/forgot-password.html" id="forgot-password"
            >Forgot your password?</a
          >
          <!--need type=button para hindi i-view as type=submit-->
          <input type="submit" class="login-btn" value="Log in" name="submit">
          <!-- Log in -->
          
          <p>
            Don't have an account?
            <button
              id="create-account"
              type="button"
              onclick="openPopup('#user-register-popup')"
            >
              Create an account 
            </button>
          </p>
        </div>
      </form>

      <!--===========================================================================================================================================-->
      <!--USER REGISTER POPUP-->
      <!--===========================================================================================================================================-->

      <!--yung overlay is para magmukhang inactive yung ibang functionalities, and ma-highlight yung register-->
      <div class="overlay"></div>
      <div id="user-register-popup">
        <!-- onsubmit="validatePassword(event)"-->
        <form id="register-form" name = "form" action="registration.php" method="POST">
          <h2 style="font-size: 2.5rem">Your Personal Information</h2>
          <p class="register-info">
            Ensure all details are accurate before proceeding.
          </p>

          <div class="register-inputs-group">
            <div>
              <label for="register-first-name-field">First Name*</label>
              <input type="text" id="register-first-name-field" name="firstname" required  />
            </div>

            <div>
              <label for="register-middle-name-field">Middle Name*</label>
              <input type="text" id="register-middle-name-field" name="midname" required />
            </div>

            <div>
              <label for="register-last-name-field">Last Name*</label>
              <input type="text" id="register-last-name-field" name="lastname" required />
            </div>
          </div>

          <div class="register-inputs-group">
            <div>
              <label for="register-date-of-birth-field">Date of Birth*</label>
              <input type="date" id="register-date-of-birth-field" name="dateofbirth" required />
            </div>

            <div>
              <label for="register-phone-no-field">Phone No.*</label>
              <input type="tel" id="register-phone-no-field" name="phone"required />
            </div>

            <div>
              <label for="register-email-field">Email*</label>
              <input type="email" id="register-email-field" name="email"required />
            </div>
          </div>

          <div class="register-inputs-group">
            <div>
              <label for="register-password-field">Password*</label>
              <input type="password" id="register-password-field" name="password" required />
            </div>

            <div>
              <label for="register-confirm-password-field">Confirm Password*</label>
              <input
                type="password"
                id="register-confirm-password-field"
                name = "confirmpass"
                required
              />
            </div>
          </div>

          <div class="button-container">
            <button
              class="back-button-register"
              onclick="closePopup('#user-register-popup')"
            >
              <img src="img/icons/arrow-left-icon.svg" alt="" />
              <p style="color: black; margin: 0px">Back</p>
            </button>

            <input type="submit" value="Register" class="submitBtn" name="submit" />
          </div>
        </form>
      </div>
    </div>

    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script src="script/login.js"></script>
    <script src="script/validate.js"></script>
    <script src="script/open-popups.js"></script>
    <script src="script/my-profile.js"></script>

  </body>
</html>
