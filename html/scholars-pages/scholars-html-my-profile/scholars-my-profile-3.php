<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Profile Scholars</title>
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
            href="/html/scholars-pages/scholars-notifiation.php"
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
          <a href="/html/scholars-pages/scholars-dashboard.php">
            <img src="/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/html/scholars-pages/scholars-category.php">
            <img src="/img/icons/category-icon.svg" alt="" />
            <p>Category</p>
          </a>

          <a href="/html/scholars-pages/scholars-renewal.php">
            <img src="/img/scholar img/renewal-icon.png" alt="" />
            <p>Renewal</p>
          </a>

          <a href="/html/scholars-pages/scholars-status.php">
            <img src="/img/icons/status-icon.svg" alt="" />
            <p>Status</p>
          </a>

          <a href="/html/scholars-pages/scholars-feedback.php">
            <img src="/img/icons/feedback.png" alt="" />
            <p>Feedback</p>
          </a>
        </div>
      </div>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="content-container">
        <form id="profileForm"  method="POST">
          <h2>School information</h2>
          <!--===========================================================================================================================================-->
          <!--SCHOOL INFORMATION FIELDS -->
          <!--===========================================================================================================================================-->
          <div class="family-profile-form-first-row">
            <fieldset>
              <div class="field-row">
                <div>
                  <label>Current school name</label>
                  <input
                    type="text"
                    id="current-school-field"
                    value="Current school name"
                    required
                  />
                </div>

                <div>
                  <label>Course/Program</label>
                  <input
                    type="text"
                    id="course-field"
                    value="course/program"
                    required
                  />
                </div>
                <div>
                  <label for="grade-level">Grade Level</label>
                  <select id="grade-level" name="grade-level" required>
                    <option value="" disabled selected>
                      Select your grade level
                    </option>
                    <!-- Senior High School -->
                    <optgroup label="Senior High School">
                      <option value="grade-11-1st-semester">
                        Grade 11 - 1st Semester
                      </option>
                      <option value="grade-11-2nd-semester">
                        Grade 11 - 2nd Semester
                      </option>
                      <option value="grade-12-1st-semester">
                        Grade 12 - 1st Semester
                      </option>
                      <option value="grade-12-2nd-semester">
                        Grade 12 - 2nd Semester
                      </option>
                    </optgroup>
                    <!-- College -->
                    <optgroup label="College">
                      <option value="1st-year-1st-semester">
                        1st Year - 1st Semester
                      </option>
                      <option value="1st-year-2nd-semester">
                        1st Year - 2nd Semester
                      </option>
                      <option value="2nd-year-1st-semester">
                        2nd Year - 1st Semester
                      </option>
                      <option value="2nd-year-2nd-semester">
                        2nd Year - 2nd Semester
                      </option>
                      <option value="3rd-year-1st-semester">
                        3rd Year - 1st Semester
                      </option>
                      <option value="3rd-year-2nd-semester">
                        3rd Year - 2nd Semester
                      </option>
                      <option value="4th-year-1st-semester">
                        4th Year - 1st Semester
                      </option>
                      <option value="4th-year-2nd-semester">
                        4th Year - 2nd Semester
                      </option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="field-row" style="margin-bottom: 2rem">
                <div>
                  <label>Province</label>
                  <input
                    type="text"
                    id="school-province-field"
                    placeholder="Province"
                    required
                  />
                </div>
                <div>
                  <label>Municipality</label>
                  <input
                    type="text"
                    id="school-municipality-field"
                    placeholder="Municipality"
                    required
                  />
                </div>
                <div>
                  <label>School address</label>
                  <input
                    type="text"
                    id="school-address-field"
                    placeholder="School address"
                    required
                  />
                </div>
              </div>
            </fieldset>
          </div>

          <!--===========================================================================================================================================-->
          <!--PAGE, AND BUTTONS CONTAINER -->
          <!--===========================================================================================================================================-->
          <fieldset class="school-profile-form-footer">
            <p>Page 3 of 3</p>
            <div>
              <a
                href="/html/scholars-pages/scholars-html-my-profile/scholars-my-profile-2.php"
                id="my-profile-back-button"
              >
                <img src="/img/icons/arrow-left-icon.svg" alt="" />
                Back</a
              >

              <button type="button" id="my-profile-update-button">
                Update
              </button>
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
      <a href="/html/scholars-pages/scholars-my-profile.php">My Profile</a>
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
