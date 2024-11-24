<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Information</title>
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
        <form id="contact-info-form" class="application-form">
          <!--Contact Info and Permanent address-->
          <div class="application-form-main-container">
            <!--Contact information container-->
            <div class="application-form-content-first-row">
              <label>Contact Information</label>
              <div>
                <input
                  type="email"
                  id="application-email-field"
                  placeholder="qwert@gmail.com"
                  required
                />
                <input
                  type="number"
                  id="application-contact-number-field"
                  placeholder="0901001"
                  required
                />
              </div>
            </div>

            <!--PERMANENT ADDRESS-->
            <div class="application-form-content-second-row">
              <h2 style="margin-left: 1.75rem; font-size: 2rem">
                Permanent address
              </h2>
              <!--FIRST ROW-->
              <div
                class="personal-info-row"
                style="display: flex; gap: 10px; flex-direction: row"
              >
                <input
                  type="text"
                  id="application-zipcode-field"
                  placeholder="Zipcode"
                  required
                />
                <input
                  type="text"
                  id="application-city-field"
                  placeholder="City/Municipality"
                  required
                />
                <input
                  type="text"
                  id="application-province-field"
                  placeholder="Province"
                  required
                />
                <input
                  type="number"
                  id="application-barangay-field"
                  placeholder="Barangay"
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
                  id="application-village-field"
                  placeholder="Village/Subdivision"
                  required
                />

                <input
                  type="text"
                  id="application-unitNo-field"
                  placeholder="House no/Unit no."
                  required
                />
              </div>
            </div>
          </div>

          <div class="personal-info-form-footer">
            <p style="font-size: 1.5rem; margin-top: 3rem">Page 2 of 5</p>

            <div>
              <a
                class="application-form-back-button"
                href="/html/applicants-pages/applicants-html-application/applicants-application-personal-info.php"
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
        .getElementById("contact-info-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          if (this.checkValidity()) { 
            window.location.href =
              "/html/applicants-pages/applicants-html-application/applicants-application-family-info.php";
          } else {
            
            this.reportValidity();
          }
        });
    </script>
  </body>
</html>
