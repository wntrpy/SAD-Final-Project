<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant My Profile</title>
    <link rel="stylesheet" href="/styles/general.css" />
    <link rel="stylesheet" href="/styles/layout.css" />
    <link rel="stylesheet" href="/styles/user-pages-styles/my-profile.css" />
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
          style="background-color: var(--nav-hover-active-state)"
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
      <div id="content-container">
        <form id="profileForm" action="/updateProfile" method="POST">
          <div class="profile-form-first-row">
            <!--===========================================================================================================================================-->
            <!--CONTAINER FOR PROFILE PICT, UPLOAD NEW PICTURE, AND CHANGE PASSWORD-->
            <!--===========================================================================================================================================-->
            <div class="profile-form-image-container">
              <div>
                <img src="/img/hannipy.jpeg" alt="" id="profile-picture" />
              </div>
              <div>
                <button
                  type="button"
                  onclick="openPopup('#upload-new-pic-popup')"
                >
                  <img src="/img/icons/camera-icon.png" alt="" />
                  Upload new picture
                </button>
                <button
                  type="button"
                  onclick="openPopup('#change-password-popup')"
                >
                  <img src="/img/icons/change-password-icon.png" alt="" />
                  Change Password
                </button>
              </div>
            </div>

            <!--===========================================================================================================================================-->
            <!--PERSONAL INFORMATION FIELDS-->
            <!--===========================================================================================================================================-->
            <fieldset>
              <legend>Personal Information</legend>
              <div class="field-row">
                <div>
                  <label>Last Name</label>
                  <input
                    type="text"
                    id="last-name-field"
                    value="Last Name"
                    readonly
                  />
                </div>
                <div>
                  <label>Given Name</label>
                  <input
                    type="text"
                    id="given-name-field"
                    value="Given Name"
                    readonly
                  />
                </div>
                <div>
                  <label>Middle Name</label>
                  <input
                    type="text"
                    id="middle-name-field"
                    value="Middle Name"
                    readonly
                  />
                </div>
                <div>
                  <label>Gender</label>
                  <input type="text" id="gender-field" placeholder="Gender" />
                </div>
              </div>

              <div class="field-row">
                <div>
                  <label>Date of Birth</label>
                  <input type="date" id="date-of-birth-field" />
                </div>

                <div>
                  <label>Place of Birth</label>
                  <input
                    type="text"
                    id="place-of-birth-field"
                    placeholder="Place of Birth"
                  />
                </div>
                <div>
                  <label>Civil Status</label>
                  <input
                    type="text"
                    id="civil-status-field"
                    placeholder="Civil Status"
                  />
                </div>
              </div>

              <div class="field-row" style="margin-bottom: 2rem">
                <div>
                  <label>Nationality</label>
                  <input
                    type="text"
                    id="nationality-field"
                    placeholder="Nationality"
                  />
                </div>
                <div>
                  <label>Religion</label>
                  <input
                    type="text"
                    id="religion-field"
                    placeholder="Religion"
                  />
                </div>
                <div>
                  <label>Email</label>
                  <input type="email" id="email-field" placeholder="Email" />
                </div>
                <div>
                  <label>Contact no.</label>
                  <input
                    type="text"
                    id="contact-number-field"
                    placeholder="Contact no."
                  />
                </div>
              </div>
            </fieldset>
          </div>

          <!--===========================================================================================================================================-->
          <!--PERMANENT ADDRESS FIELDS-->
          <!--===========================================================================================================================================-->
          <fieldset class="permanent-address-fields" style="margin-top: 1rem">
            <legend>Permanent Address</legend>
            <div class="full-address-container">
              <label>Full address</label>
              <input
                type="text"
                id="full-address-field"
                placeholder="Full Address"
              />
            </div>

            <div class="address-field-row">
              <div>
                <label>Zipcode</label>
                <input type="text" id="zipcode-field" placeholder="Zipcode" />
              </div>
              <div>
                <label>Barangay</label>
                <input type="text" id="barangay-field" placeholder="Barangay" />
              </div>
              <div>
                <label>Province/Region</label>
                <input
                  type="text"
                  id="province-region-field"
                  placeholder="Province/Region"
                />
              </div>
              <div>
                <label>Municipality/City</label>
                <input
                  type="text"
                  id="municipality-city-field"
                  placeholder="Municipality/City"
                />
              </div>
            </div>
          </fieldset>

          <!--===========================================================================================================================================-->
          <!--PAGE, AND BUTTONS CONTAINER -->
          <!--===========================================================================================================================================-->
          <fieldset class="profile-form-footer">
            <p>Page 1 of 3</p>
            <a
              href="/html/applicants-pages/applicants-html-my-profile/applicants-my-profile-2.php"
              class="my-profile-next-button"
              >Next</a
            >
          </fieldset>
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
    <!--CHANGE PASSWORD-->
    <!--===========================================================================================================================================-->
    <div class="overlay"></div>
    <form id="change-password-popup">
      <h2 style="margin-left: 5rem; font-size: 2rem">Change Password</h2>

      <div class="change-password-field-container">
        <label>Current Password:</label>
        <input
          type="text"
          id="current-password-field"
          required
          style="margin-left: 12px"
        />
      </div>
      <div class="change-password-field-container">
        <label>New Password:</label>
        <input
          type="text"
          id="new-password-field"
          required
          style="margin-left: 36.6px"
        />
      </div>
      <div class="change-password-field-container">
        <label>Confirm Password:</label>
        <input
          type="text"
          id="confirm-password-field"
          required
          style="margin-left: 10px"
        />
      </div>

      <div class="button-container">
        <button
          type="button"
          class="change-pass-back-button"
          onclick="closePopup('#change-password-popup')"
        >
          <img src="/img/icons/arrow-left-icon.svg" alt="" />
          <p style="color: black; margin: 0px">Back</p>
        </button>

        <input type="submit" value="Submit" class="change-pass-submit-button" />
      </div>
    </form>

    <!--===========================================================================================================================================-->
    <!--UPLOAD NEW PICTURE-->
    <!--===========================================================================================================================================-->
    <form id="upload-new-pic-popup">
      <div class="new-pic-back-btn-container">
        <button
          type="button"
          class="new-pic-back-button"
          onclick="closePopup('#upload-new-pic-popup')"
        >
          <img src="/img/icons/white-left-arrow-icon.png" alt="" />
        </button>
      </div>
      <div>
        <h2 style="font-size: 40px; margin-top: -15px; margin-bottom: 0.75rem">
          Upload new picture
        </h2>
      </div>

      <div style="display: flex; justify-content: center">
        <input
          type="file"
          id="file-input"
          accept="image/*"
          style="display: none"
        />
        <button
          type="button"
          id="choose-photo-btn"
          onclick="handleUploadNewPicture()"
        >
          Choose photo
        </button>
      </div>
    </form>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/script/login.js"></script>
    <script src="/script/open-popups.js"></script>
    <script src="/script/validate.js"></script>
    <script src="/script/my-profile.js"></script>
  </body>
</html>
