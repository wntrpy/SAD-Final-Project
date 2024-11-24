<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Family Information</title>
    <link rel="stylesheet" href="/styles/general.css" />
    <link rel="stylesheet" href="/styles/layout.css" />
    <link rel="stylesheet" href="/styles/user-pages-styles/application.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!--SIDEBAR-->
      <!--===========================================================================================================================================-->
      <div id="sidebar">
        <div class="sidebar-header">
          <img src="/img/icons/systemLogo-icon.png" alt="" width="140px" />
          <a
            href="/html/applicants-pages/applicants-notification.php"
            class="notification-container"
          >
            <img src="/img/icons/notification-icon.png" alt="" />
          </a>
        </div>

        <button
          class="sidebar-user-profile"
          onclick="toggleDropDown('#dropdown')"
        >
          <div class="sidebar-user-profile-left-container">
            <img
              id="user-profile-image"
              src="/img/icons/user-icon.png"
              alt=""
              width="50px"
            />
            <div>
              <p id="user-first-name">Denyel</p>
              <p id="user-last-name">Pirnandow</p>
            </div>
          </div>
        </button>

        <hr />

        <div class="sidebar-nav">
          <a href="/html/applicants-pages/applicants-dashboard.php">
            <img src="/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/html/applicants-pages/applicants-category.php">
            <img src="/img/icons/category-icon.svg" alt="" />
            <p>Category</p>
          </a>

          <a
            href="/html/applicants-pages/applicants-html-application/applicants-application.php"
            style="background-color: var(--nav-hover-active-state)"
          >
            <img src="/img/applicants img/application.png" alt="" />
            <p>Application</p>
          </a>

          <a href="/html/applicants-pages/applicants-status.php">
            <img src="/img/icons/status-icon.svg" alt="" />
            <p>Status</p>
          </a>

          <a href="/html/applicants-pages/applicants-feedback.php">
            <img src="/img/icons/feedback.png" alt="" />
            <p>Feedback</p>
          </a>
        </div>
      </div>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="application-content-container">
        <form id="family-info-form" class="application-form">
          <h1>Family Information</h1>
          <!--Family info-->
          <div
            class="application-form-main-container"
            style="margin-bottom: 11%"
          >
            <!--Father-->
            <div class="application-form-content-first-row">
              <label>Father</label>
              <!--FIRST ROW-->
              <div
                class="personal-info-row"
                style="display: flex; gap: 10px; flex-direction: row"
              >
                <input
                  type="text"
                  id="father-given-name"
                  name="father_given_name"
                  placeholder="Given name"
                  required
                />
                <input
                  type="text"
                  id="father-middle-name"
                  name="father_middle_name"
                  placeholder="Middle name"
                  required
                />
                <input
                  type="text"
                  id="father-last-name"
                  name="father_last_name"
                  placeholder="Last name"
                  required
                />
                <input
                  type="text"
                  id="father-mobile-number"
                  name="father_mobile_number"
                  placeholder="Mobile phone no."
                  required
                />
              </div>

              <!--SECOND ROW-->
              <div
                class="personal-info-row"
                style="
                  display: flex;
                  gap: 10px;
                  margin-top: 10px;
                  flex-direction: row;
                "
              >
                <input
                  type="text"
                  id="father-civil-status"
                  name="father_civil_status"
                  placeholder="Civil Status"
                />
                <input
                  type="text"
                  id="father-contact-number"
                  name="father_contact_number"
                  placeholder="Contact number"
                />
                <input
                  type="text"
                  id="father-occupation"
                  name="father_occupation"
                  placeholder="Occupation"
                />
                <input
                  type="text"
                  id="father-annual-gross-income"
                  name="father_annual_gross_income"
                  placeholder="Annual Gross Income"
                />
              </div>
            </div>

            <!--Mother-->
            <div class="application-form-content-second-row">
              <label style="margin-left: 2rem">Mother</label>
              <!--FIRST ROW-->
              <div
                class="personal-info-row"
                style="display: flex; gap: 10px; flex-direction: row"
              >
                <input
                  type="text"
                  id="mother-given-name"
                  name="mother_given_name"
                  placeholder="Given name"
                  required
                />
                <input
                  type="text"
                  id="mother-middle-name"
                  name="mother_middle_name"
                  placeholder="Middle name"
                  required
                />
                <input
                  type="text"
                  id="mother-last-name"
                  name="mother_last_name"
                  placeholder="Last name"
                  required
                />
                <input
                  type="text"
                  id="mother-mobile-number"
                  name="mother_mobile_number"
                  placeholder="Mobile phone no."
                  required
                />
              </div>

              <!--SECOND ROW-->
              <div
                class="personal-info-row"
                style="
                  display: flex;
                  gap: 10px;
                  margin-top: 10px;
                  flex-direction: row;
                "
              >
                <input
                  type="text"
                  id="mother-civil-status"
                  name="mother_civil_status"
                  placeholder="Civil Status"
                  required
                />
                <input
                  type="text"
                  id="mother-contact-number"
                  name="mother_contact_number"
                  placeholder="Contact number"
                  required
                />
                <input
                  type="text"
                  id="mother-occupation"
                  name="mother_occupation"
                  placeholder="Occupation"
                  required
                />
                <input
                  type="text"
                  id="mother-annual-gross-income"
                  name="mother_annual_gross_income"
                  placeholder="Annual Gross Income"
                  required
                />
              </div>
            </div>
          </div>

          <div class="personal-info-form-footer">
            <p style="font-size: 1.5rem; margin-top: 3rem">Page 3 of 5</p>

            <div>
              <a
                class="application-form-back-button"
                href="/html/applicants-pages/applicants-html-application/applicants-application-contact-info.php"
              >
                <img src="/img/icons/arrow-left-icon.svg" alt="" />
                Back
              </a>

              <input
                type="submit"
                value="Next"
                class="application-form-next-button"
              />
            </div>
          </div>
        </form>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--DROPDOWN MENU-->
    <!--===========================================================================================================================================-->
    <div class="dropdown" id="dropdown">
      <a
        href="/html/applicants-pages/applicants-html-my-profile/applicants-my-profile.php"
        >My Profile</a
      >
      <a href="/index.php">Log out</a>
    </div>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/script/open-popups.js"></script>
    <script>
      document
        .getElementById("family-info-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          if (this.checkValidity()) {
            window.location.href =
              "/html/applicants-pages/applicants-html-application/applicants-application-document.php";
          } else {
            this.reportValidity();
          }
        });
    </script>
  </body>
</html>
