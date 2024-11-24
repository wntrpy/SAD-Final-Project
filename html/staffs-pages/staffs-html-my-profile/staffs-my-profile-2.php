<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Staffs My Profile</title>
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
            href="/html/staffs-pages/staffs-notification.php"
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
          <a href="/html/staffs-pages/staffs-dashboard.php">
            <img src="/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/html/staffs-pages/staffs-programs.php">
            <img src="/img/icons/category-icon.svg" alt="" />
            <p>Programs</p>
          </a>

          <a href="/html/staffs-pages/staffs-calendar.php">
            <img src="/img/staffs img/application-dates-icon.png" alt="" />
            <p>Calendar</p>
          </a>

          <a href="/html/staffs-pages/staffs-verification.php">
            <img src="/img/staffs img/verification-icon.png" alt="" />
            <p>Verification</p>
          </a>

          <a href="/html/staffs-pages/staffs-announcement.php">
            <img src="/img/staffs img/announcements-icon.png" alt="" />
            <p>Announcement</p>
          </a>

          <a href="/html/staffs-pages/staffs-view-feedbacks.php">
            <img src="/img/staffs img/view-feedbacks-icon.png" alt="" />
            <p>View Feedbacks</p>
          </a>

          <a href="/html/staffs-pages/staffs-generate-email.php">
            <img src="/img/staffs img/generate-email-icon.png" alt="" />
            <p>Generate Email</p>
          </a>

          <a href="/html/staffs-pages/staffs-generate-reports.php">
            <img src="/img/staffs img/generate-reports-icon.png" alt="" />
            <p>Generate Reports</p>
          </a>
        </div>
      </div>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="content-container">
        <form id="profileForm">
          <h2>Family information</h2>
          <div class="family-profile-form-first-row">
            <!--===========================================================================================================================================-->
            <!--FATHER FIELDS CONTAINER -->
            <!--===========================================================================================================================================-->
            <fieldset>
              <legend>Father</legend>
              <div class="field-row">
                <div>
                  <label>Last Name</label>
                  <input
                    type="text"
                    id="father-last-name-field"
                    placeholder="Last Name"
                    required
                  />
                </div>
                <div>
                  <label>Given Name</label>
                  <input
                    type="text"
                    id="father-given-name-field"
                    placeholder="Given Name"
                    required
                  />
                </div>
                <div>
                  <label>Middle Name</label>
                  <input
                    type="text"
                    id="father-middle-name-field"
                    placeholder="Middle Name"
                    required
                  />
                </div>
                <div>
                  <label>Contact no.</label>
                  <input
                    type="text"
                    id="father-contact-no-field"
                    placeholder="Contact no."
                    required
                  />
                </div>
              </div>

              <div class="field-row" style="margin-bottom: 2rem">
                <div>
                  <label>Civil status</label>
                  <input
                    type="text"
                    id="father-civil-status-field"
                    placeholder="Civil status"
                    required
                  />
                </div>
                <div>
                  <label>Occupation</label>
                  <input
                    type="text"
                    id="father-occupation-field"
                    placeholder="Occupation"
                    required
                  />
                </div>
                <div>
                  <label>Annual gross income</label>
                  <input
                    type="text"
                    id="father-annual-gross-field"
                    placeholder="Annual gross income"
                    required
                  />
                </div>

                <div>
                  <label>Educational Attainment</label>
                  <input
                    type="text"
                    id="father-educational-attainment"
                    placeholder="Educational Attainment"
                    required
                  />
                </div>
              </div>
            </fieldset>
          </div>

          <!--===========================================================================================================================================-->
          <!--MOTHER FIELDS CONTAINER -->
          <!--===========================================================================================================================================-->
          <fieldset class="mother-profile-firt-row" style="margin-top: 1rem">
            <legend>Mother</legend>
            <div class="field-row">
              <div>
                <label>Last Name</label>
                <input
                  type="text"
                  id="mother-last-name-field"
                  placeholder="Last Name"
                  required
                />
              </div>
              <div>
                <label>Given Name</label>
                <input
                  type="text"
                  id="mother-given-name-field"
                  placeholder="Given Name"
                  required
                />
              </div>
              <div>
                <label>Middle Name</label>
                <input
                  type="text"
                  id="mother-middle-name-field"
                  placeholder="Middle Name"
                  required
                />
              </div>
              <div>
                <label>Contact no.</label>
                <input
                  type="text"
                  id="mother-contact-no-field"
                  placeholder="Contact no."
                  required
                />
              </div>
            </div>

            <div class="field-row" style="margin-bottom: 2rem">
              <div>
                <label>Civil status</label>
                <input
                  type="text"
                  id="mother-civil-status-field"
                  placeholder="Civil status"
                  required
                />
              </div>
              <div>
                <label>Occupation</label>
                <input
                  type="text"
                  id="mother-occupation-field"
                  placeholder="Occupation"
                  required
                />
              </div>
              <div>
                <label>Annual gross income</label>
                <input
                  type="text"
                  id="mother-annual-gross-field"
                  placeholder="Annual gross income"
                  required
                />
              </div>

              <div>
                <label>Educational Attainment</label>
                <input
                  type="text"
                  id="mother-educational-attainment"
                  placeholder="Educational Attainment"
                  required
                />
              </div>
            </div>
          </fieldset>

          <!--===========================================================================================================================================-->
          <!--PAGE, AND BUTTONS CONTAINER -->
          <!--===========================================================================================================================================-->
          <fieldset class="family-profile-form-footer">
            <p>Page 2 of 3</p>
            <div>
              <a
                href="/html/staffs-pages/staffs-html-my-profile/staffs-my-profile.php"
                id="my-profile-back-button"
              >
                <img src="/img/icons/arrow-left-icon.svg" alt="" />
                Back</a
              >

              <a
                href="/html/staffs-pages/staffs-html-my-profile/staffs-my-profile-3.php"
                class="my-profile-next-button"
                >Next</a
              >
            </div>
          </fieldset>
        </form>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--DROPDOWN MENU-->
    <!--===========================================================================================================================================-->
    <div class="dropdown" id="dropdown">
      <a href="/html/staffs-pages/staffs-html-my-profile/staffs-my-profile.php">My Profile</a>
      <a href="/index.php">Log out</a>
    </div>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/script/login.js"></script>
    <script src="/script/open-popups.js"></script>
    <script src="/script/validate.js"></script>
    <script src="/script/my-profile.js"></script>
  </body>
</html>
