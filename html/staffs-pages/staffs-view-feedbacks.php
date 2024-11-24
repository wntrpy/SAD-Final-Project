<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Staffs View Feedbacks</title>
    <link rel="stylesheet" href="/styles/general.css" />
    <link rel="stylesheet" href="/styles/layout.css" />
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

          <a
            href="/html/staffs-pages/staffs-view-feedbacks.php"
            style="background-color: var(--nav-hover-active-state)"
          >
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
        <p>STAFF View Feedback</p>
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
    <script src="/script/open-popups.js"></script>
  </body>
</html>
