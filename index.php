<!DOCTYPE html>
<html ng-app="testApp" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Favicons -->
  <link rel="shortcut  icon" type="image/png" href="assets/img/favicons.png" sizes="50x96" />
  <title>
    KALAM
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/material-kit.css?v=2.0.3" />
  <!-- ========================================================================================== -->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css" />
</head>

<body>
         <!-- <div id="mySidenav" class="sidenav">
          <div id="mymenu">
            <a class="closebtn pointer text-white" onclick="closeMyNav()">&times;</a>
            <a id="about" onclick="openMysideDisplay(),closeMyNav()" href="#">About Kalam</a>
            <a id="events" onclick="openMysideDisplay_1(),closeMyNav()" href="#">Events</a>
            <a id="sponsers" onclick="openMysideDisplay_2(),closeMyNav()" href="#">Sponsers</a>
            <a id="tech_team" onclick="openMysideDisplay_3(),closeMyNav()" href="#">Tech Team</a>
            <a id="login_menu" onclick="openMysideDisplay_4(),closeMyNav()" href="#">Login</a>
          </div>
        </div> 


        <div id="sidedisplay" class="sidedisplay d-flex justify-content-center align-items-center">
          <a class="closebtn_1 pointer text-white" onclick="closeMysideDisplay()">&times;</a>
          <div class="side_pannel">
            <div class="row">
              <div class="card d-flex justify-content-center align-items-center">
                <div class="card-header w-75 text-center"><h4>Tech Partner</h4></div>
                <div class="card-body">
                  <h1>content</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="sidedisplay_1" class="sidedisplay d-flex justify-content-center align-items-center">
          <a class="closebtn_1 pointer text-white" onclick="closeMysideDisplay_1()">&times;</a>
          <div class="side_pannel"></div>
        </div>
        <div id="sidedisplay_2" class="sidedisplay d-flex justify-content-center align-items-center" style="background-color: white">
          <a class="closebtn_1 pointer text-white" onclick="closeMysideDisplay_2()">&times;</a>
          <div class="side_pannel">
            <img src="assets/img/PARTNERS.png" style="width: 1050px;height: auto;">
          </div>
        </div>
        <div id="sidedisplay_3" class="sidedisplay d-flex justify-content-center align-items-center">
          <a class="closebtn_1 pointer text-white" onclick="closeMysideDisplay_3()">&times;</a>
          <div class="side_pannel"></div>
        </div>
        <div id="sidedisplay_4" class="sidedisplay d-flex justify-content-center align-items-center">
          <a class="closebtn_1 pointer text-white" onclick="closeMysideDisplay_4()">&times;</a>
          <div class="side_pannel"></div>
        </div> -->


    <div class="d-flex">
      <div class="col-sm-2 col-md-2 d-flex justify-content-center align-items-center">
        <!-- <span style="font-size:30px;cursor:pointer;color: white" onclick="openMyNav()">&#9776;</span> -->
      </div>
      <div class="col-sm-6 col-md-8  mt-3 college_name d-flex justify-content-center align-items-center">
        <span><img src="assets/img/college.png"></span>
      </div>
      <div class="col-sm-4 col-md-2">
        <!-- extra -->
      </div>
    </div>
  <div class="simpleslide100">
    <div class="simpleslide100-item bg-img1" style="background-image: url('assets/img/bg1.jpg');"></div>
  </div>
  <!-- <img class="collegestlye" src="./assets/img/SIET.png" alt="college" /> -->
  <!-- <img class="kalam_logo" src="./assets/img/KALAM 2020 LOGO.png" alt="LOGO" > -->
  <div class="flex-col-c-m p-l-15 p-r-15 p-t-80 p-b-99">
    <!-- <h3 class="l1-txt2 txt-center p-b-55 respon1">
      K A L A M
    </h3> -->
    <div class="image_box">
      <img src="assets/img/KALAM.png"class="m-5">
    </div>
    <div class="row countdown_text">
      <div class="flex-w cd100 p-t-10 p-b-10 p-r-0 countdown_text">
        <div class="flex-w flex-b m-2">
          <p class="l1-txt1 wsize1 days">30</p>
          <span class="m1-txt1 p-b-2">Days</span>
        </div>

        <div class="flex-w flex-b m-2">
          <p class="l1-txt1 wsize1 hours">17</p>
          <span class="m1-txt1 p-b-2">Hr</span>
        </div>

        <div class="flex-w flex-b m-2">
          <p class="l1-txt1 wsize1 minutes">50</p></span>
          <span class="m1-txt1 p-b-2">Min
        </div>

        <div class="flex-w flex-b m-2">
          <p class="l1-txt1 wsize1 seconds">39</p>
          <span class="m1-txt1 p-b-2">Sec</span>
        </div>
      </div>
    </div>

    <h3 class="text-white">Registration opens soon..</h3>
    <a href="main_event/events.php"><button class="btn btn-1 btn-1e">Events</button></a>
  </div>

  <!--   Core JS Files   -->
  <!-- <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/bootstrap-material-design.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--	Plugin f.or Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js"></script>
  <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
  <script src="assets/js/material-kit.js?v=2.0.3"></script>

  

  <!--==========================  countdowntime  =======================================================-->
  <script src="assets/countdowntime/moment.min.js"></script>
  <script src="assets/countdowntime/moment-timezone.min.js"></script>
  <script src="assets/countdowntime/moment-timezone-with-data.min.js"></script>
  <script src="assets/countdowntime/countdowntime.js"></script>



  <script type="text/javascript"src="assets/js/script.js"></script>

<script type="text/javascript">
  $(".cd100").countdown100({
      /*Set Endtime here*/
      /*Endtime must be > current time*/
  endtimeYear: 2020,
  endtimeMonth: 2,
  endtimeDate: 6,
  endtimeHours: 24,
  endtimeMinutes: 0,
  endtimeSeconds: 0,
  timeZone: "Asia/Kolkata"
      // ex:  timeZone: "America/New_York"
      //go to " http://momentjs.com/timezone/ " to get timezone
});
</script>
  <!--============================ popup  ========================================================-->
  <!--  <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js"></script>
    <script src="./assets/js/popup.js"></script> -->
  <!-- ============================================================================================== -->
</body>

</html>