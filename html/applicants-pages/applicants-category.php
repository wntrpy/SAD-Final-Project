<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant Category</title>
    <link rel="stylesheet" href="/styles/general.css" />
    <link rel="stylesheet" href="/styles/layout.css" />
    <link rel="stylesheet" href="/styles/user-pages-styles/category.css" />
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

          <a
            href="/html/applicants-pages/applicants-category.php"
            style="background-color: var(--nav-hover-active-state)"
          >
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
      <div class="category-main-container">
        <div class="category-cards-container">
          <h2>Mga Kategorya</h2>
          <div>
            <div class="category-card">
              SHS PUBLIC<button onclick="openPopup('#shs-public-popup')">
                See more...
              </button>
            </div>
            <div class="category-card">
              SHS PRIVATE<button onclick="openPopup('#shs-private-popup')">
                See more...
              </button>
            </div>
          </div>

          <div>
            <div class="category-card-large">
              STATE/LOCAL UNIVERSITIES AND COLLEGES
              <button onclick="openPopup('#suc-popup')">See more...</button>
            </div>
            <div class="category-card-large">
              OS PRIVATE UNIVERITIES AND COLLEGES<button
                onclick="openPopup('#os-private-popup')"
              >
                See more...
              </button>
            </div>
          </div>
        </div>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--CATEGORY CARDS-->
    <!--===========================================================================================================================================-->
    <div class="overlay"></div>

    <!--===========================================================================================================================================-->
    <!--SHS PUBLIC-->
    <!--===========================================================================================================================================-->
    <div id="shs-public-popup">
      <h1>SHS PUBLIC</h1>
      <div class="category-popup-main-container">
        <!--LIST OF REQUIREMENTS CONTAINER-->
        <div class="list-of-requirements-container">
          <header>List of Requirements</header>
          <div class="lists-of-requirements-content">
            <p>
              1. Filled out Scholarship Application Form with 1x1 picture (1
              page only back-to-back)
            </p>
            <p>
              2. Letter addressed to Gov. Daniel R. Ferndando (Handwritten in
              short or legal bond paper)
            </p>

            <p>3. Barangay Clearance from the place of residence (Original)</p>

            <p>
              4. Certificate of Enrollment/Registration (COE/COR SY 2024-2025)
              (Original/Photocopy)
            </p>

            <p>5. Report Card AY 2023-2024 for Grade 11 & 12 (Photocopy)</p>

            <p>
              6. Photocopy of Certificate of Completion for Incoming Grade 11
              (Original and Photocopy)
            </p>

            <p>
              7. Photocopy of National ID or School ID (Front and back with
              handwritten complete name w/signature, complete address, and
              contact no.) (2 copies)
            </p>
          </div>

          <a
            href="https://drive.google.com/file/d/1JNnFW8d65ei3A_Rd0g9Zb_1fiHFgB1mS/view"
            class="download-requirements-btn"
            target="_blank"
            >Download application requirements</a
          >
        </div>

        <div
          class="application-available-container"

        >
          <div class="application-date-container">
            <header>Application date</header>
            <div class="application-date-content">
              <p>
                AUGUST 19 2024 <br />
                MONDAY
              </p>
            </div>
          </div>

          <!--AVAILABLE SLOTS-->
          <div class="available-slots-container">
            <header>Available slots</header>
            <div class="available-slots-content">
              <p>90</p>
            </div>
          </div>

          <button onclick="closePopup('#shs-public-popup')">
            <img src="/img/icons/arrow-right-icon.svg" alt="" />
            Back
          </button>
        </div>
      </div>
    </div>

    <!--===========================================================================================================================================-->
    <!--SHS PRIVATE-->
    <!--===========================================================================================================================================-->
    <div id="shs-private-popup">
      <h1>SHS PRIVATE</h1>
      <div class="category-popup-main-container">
        <!--LIST OF REQUIREMENTS CONTAINER-->
        <div class="list-of-requirements-container">
          <header>List of Requirements</header>
          <div class="lists-of-requirements-content">
            <p>
              1. Filled out Scholarship Application Form with 1x1 picture (1
              page only back-to-back)
            </p>
            <p>
              2. Letter addressed to Gov. Daniel R. Ferndando (Handwritten in
              short or legal bond paper)
            </p>

            <p>3. Barangay Clearance from the place of residence (Original)</p>

            <p>
              4. Certificate of Enrollment/Registration (COE/COR SY 2024-2025)
              (Original/Photocopy)
            </p>

            <p>5. Report Card AY 2023-2024 for Grade 11 & 12 (Photocopy)</p>

            <p>
              6. Photocopy of Certificate of Completion for Incoming Grade 11
              (Original and Photocopy)
            </p>

            <p>7. Photocopy of Birth Certificate</p>

            <p>
              8. Photocopy of National ID or School ID (Front and back with
              handwritten complete name w/signature, complete address, and
              contact no.) (2 copies)
            </p>
          </div>

          <a
            href="https://drive.google.com/file/d/1R7MSVd8SUAnGg-CwXrfeBHUvLukJcTUy/view"
            class="download-requirements-btn"
            target="_blank"
            >Download application requirements</a
          >
        </div>

        <div class="application-available-container">
          <!--APPLICATION DATE & AVAILABLE SLOTS-->
          <div class="application-date-container">
            <header>Application date</header>
            <div class="application-date-content">
              <p>
                AUGUST 19 2024 <br />
                MONDAY
              </p>
            </div>
          </div>

          <!--AVAILABLE SLOTS-->
          <div class="available-slots-container">
            <header>Available slots</header>
            <div class="available-slots-content">
              <p>90</p>
            </div>
          </div>

          <button onclick="closePopup('#shs-private-popup')">
            <img src="/img/icons/arrow-right-icon.svg" alt="" />
            Back
          </button>
        </div>
      </div>
    </div>

    <!--===========================================================================================================================================-->
    <!--STATE/LOCAL UNIVERSITIES AND COLLEGES-->
    <!--===========================================================================================================================================-->
    <div id="suc-popup">
      <h1>STATE/LOCAL UNIVERSITIES AND COLLEGES</h1>
      <div class="category-popup-main-container">
        <!--LIST OF REQUIREMENTS CONTAINER-->
        <div class="list-of-requirements-container">
          <header>List of Requirements</header>
          <div class="lists-of-requirements-content">
            <p>
              1. Filled out Scholarship Application Form with 1x1 picture (1
              page only back-to-back)
            </p>
            <p>
              2. Letter addressed to Gov. Daniel R. Ferndando (Handwritten in
              short or legal bond paper)
            </p>

            <p>3. Barangay Certificate of Indigency (Original)</p>

            <p>
              4. Certificate of Registration COR 1st Semester SY 2024-2025
              (Original and Photocopy)
            </p>

            <p>
              5. Certificate of Grades COG 2nd Semester SY 2023-2024 (Original
              and Photocopy)
            </p>

            <p>
              6. Certificate of Registration COR 2nd Semester SY 2023-2024
              (Original and Photocopy)
            </p>

            <p>
              7. Photocopy of School ID or National ID (Front and back with
              handwritten complete name w/ signature, complete address, and
              contact no.) (2 copies)
            </p>
          </div>

          <a
            href="https://drive.google.com/file/d/1CkI1SwlHNSmJVKlN6gF-EA0qFtgErOx3/view"
            class="download-requirements-btn"
            target="_blank"
            >Download application requirements</a
          >
        </div>

        <div class="application-available-container">
          <!--APPLICATION DATE & AVAILABLE SLOTS-->
          <div class="application-date-container">
            <header>Application date</header>
            <div class="application-date-content">
              <p>
                AUGUST 23 2024 <br />
                FRIDAY
              </p>
            </div>
          </div>

          <!--AVAILABLE SLOTS-->
          <div class="available-slots-container">
            <header>Available slots</header>
            <div class="available-slots-content">
              <p>876</p>
            </div>
          </div>

          <button onclick="closePopup('#suc-popup')">
            <img src="/img/icons/arrow-right-icon.svg" alt="" />
            Back
          </button>
        </div>
      </div>
    </div>

    <!--===========================================================================================================================================-->
    <!--OS PRIVATE UNIVERSITIES AND COLLEGES-->
    <!--===========================================================================================================================================-->
    <div id="os-private-popup">
      <h1>OS PRIVATE UNIVERSITIES AND COLLEGES</h1>
      <div class="category-popup-main-container">
        <!--LIST OF REQUIREMENTS CONTAINER-->
        <div class="list-of-requirements-container">
          <header>List of Requirements</header>
          <div class="lists-of-requirements-content">
            <p>
              1. Filled out Scholarship Application Form with 1x1 picture (1
              page only back-to-back)
            </p>
            <p>
              2. Letter addressed to Gov. Daniel R. Ferndando (Handwritten in
              short or legal bond paper)
            </p>

            <p>3. Barangay Certificate of Indigency (Original)</p>

            <p>
              4. Certificate of Registration COR 1st Semester SY 2024-2025
              (Original and Photocopy)
            </p>

            <p>
              5. Certificate of Grades COG 2nd Semester SY 2023-2024 (Original
              and Photocopy)
            </p>

            <p>
              6. Certificate of Registration COR 2nd Semester SY 2023-2024
              (Original and Photocopy)
            </p>

            <p>7. Photocopy of Birth Certificate</p>

            <p>
              8. Photocopy of School ID or National ID (Front and back with
              handwritten complete name w/signature, complete address, and
              contact no.) (2 copies)
            </p>
          </div>

          <a
            href="https://drive.google.com/file/d/1-2QTOmd6R_VDMB3D0YAvNwucbklwYhPv/view"
            class="download-requirements-btn"
            target="_blank"
            >Download application requirements</a
          >
        </div>

        <div class="application-available-container">
          <!--APPLICATION DATE & AVAILABLE SLOTS-->
          <div class="application-date-container">
            <header>Application date</header>
            <div class="application-date-content">
              <p>
                AUGUST 22 2024 <br />
                THURSDAY
              </p>
            </div>
          </div>

          <!--AVAILABLE SLOTS-->
          <div class="available-slots-container">
            <header>Available slots</header>
            <div class="available-slots-content">
              <p>800</p>
            </div>
          </div>

          <button onclick="closePopup('#os-private-popup')">
            <img src="/img/icons/arrow-right-icon.svg" alt="" />
            Back
          </button>
        </div>
      </div>
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
  </body>
</html>
