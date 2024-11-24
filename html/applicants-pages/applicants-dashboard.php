<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant Dashboard</title>
    <html lang="en" dir="ltr">

    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href=
"https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="/styles/general.css">
  <link rel="stylesheet" href="/styles/layout.css" />
  <link rel="stylesheet" href="/styles/user-pages-styles/calendar.css" />
  <link rel="stylesheet" href="/styles/user-pages-styles/dashboard.css" />
    
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
          <a
            href="/html/applicants-pages/applicants-dashboard.php"
            style="background-color: var(--nav-hover-active-state)"
          >
            <img src="/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/html/applicants-pages/applicants-category.php">
            <img src="/img/icons/category-icon.svg" alt="" />
            <p>Category</p>
          </a>

          <a href="/html/applicants-pages/applicants-html-application/applicants-application.php">
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
      <div id="dashboard-content-container">
        <div class="cbody">
          <!-- Main Header -->
          <header class="main-header"></header>
          <div class="calendar-container">
            <header class="calendar-header">
              <p class="calendar-current-date"></p>
              <div class="calendar-navigation">
                <span id="calendar-prev" class="material-symbols-rounded">
                  chevron_left
                </span>
                <span id="calendar-next" class="material-symbols-rounded">
                  chevron_right
                </span>
              </div>
            </header>
      
            <div class="calendar-body">
              <ul class="calendar-weekdays">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
      
              <ul class="calendar-dates"></ul>
            </div>
          </div>
        </div>
          <!--dashboard content-->

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
    <script src="/script/calendar.js"></script>
  </body>
</html>
