<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document submission</title>
    <link rel="stylesheet" href="/styles/general.css" />
    <link rel="stylesheet" href="/styles/layout.css" />
    <link rel="stylesheet" href="/styles/user-pages-styles/application.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!-- Sidebar -->
      <div id="sidebar">
        <div class="sidebar-header">
          <img src="/img/icons/systemLogo-icon.png" alt="" width="140px" />
          <a
            href="/html/applicants-pages/applicants-notification.php"
            class="notification-container"
          >
            <img src="/img/icons/notification-icon.png" alt="" />
            <div class="notification-count">0</div>
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

      <!-- Content Container -->
      <div id="application-content-container">
        <form id="document-list-container" class="application-form">
          <label>Upload the following required documents:</label>
          <div class="document-list-table">
            <!-- Table header -->
            <header>
              <div>Name</div>
              <div style="gap: 160px">
                <p>File</p>
                <p>Status</p>
                <p>Operations</p>
              </div>
            </header>
            <!--CONTAINER FOR DOCUMENT ENTRIES-->
            <div class="document-list-content" id="document-list"></div>
          </div>

          <div class="personal-info-form-footer">
            <p style="font-size: 1.5rem; margin-top: 3rem">Page 4 of 5</p>
            <div>
              <a
                class="application-form-back-button"
                href="/html/applicants-pages/applicants-html-application/applicants-application-family-info.php"
              >
                <img src="/img/icons/arrow-left-icon.svg" alt="" />
                Back
              </a>

              <input
                type="submit"
                value="Submit"
                class="application-form-next-button"
                id="application-form-submit-button"
              />
            </div>
          </div>
        </form>
      </div>

      <footer></footer>
    </div>

    <!-- Dropdown -->
    <div class="dropdown" id="dropdown">
      <a
        href="/html/applicants-pages/applicants-html-my-profile/applicants-my-profile.php"
        >My Profile</a
      >
      <a href="/index.php">Log out</a>
    </div>

    <!-- Scripts -->
    <script src="/script/open-popups.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script src="/script/category.js"></script>
    <script>
      document
        .getElementById("document-list-container")
        .addEventListener("submit", function (event) {
          event.preventDefault(); 

          if (this.checkValidity()) {
            alert("Test");
            window.location.href =
              "/html/applicants-pages/applicants-html-application/applicants-application-submitted.php";
          } else {
            this.reportValidity();
            alert("error bitch");
          }
        });
    </script>
  </body>
</html>
