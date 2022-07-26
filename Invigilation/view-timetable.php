
<?php

include'connect.php';
if(isset($_POST['submit']))
{
       $tid=$_POST['time'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>View Timetable</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

<link rel="stylesheet" href="assets/css/style.css">


    <script type="text/javascript" src="js.js"></script>
  

</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<!--<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>--
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>-->
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>

<!--<div class="top-nav-search">
<form>
    <input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>-->


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

<!-- <li class="nav-item dropdown noti-dropdown"> -->
<!-- <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
</a> -->
<!--<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header"><span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message"></li>
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
 <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>-->


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/profile.png" width="31"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/profile.png" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6></h6>
<p class="text-muted mb-0">admin</p>
</div>
</div>
<a class="dropdown-item" href="logout.php">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="submenu active">
<a href="#"><i class="fas fa-users"></i> <span> Dashboard</span></a>
<!-- <ul>
<li><a href="student-dashboard.php" class="active">Recuiter Dashboard</a></li>
</ul> -->
</li>
<li class="submenu">
<a href="#"><i class="fas fa-university"></i> <span> Examinations</span><span class="menu-arrow"></span></a>
 <ul>
<li><a href="add-exam.php"> Add Exam</a></li>
<!--<li><a href="university-student-add.php">Add Student</a></li>-->
<li><a href="add-invigilation.php">Add Invigilation</a></li>
<li><a href="view-invigilation.php">View Invigilation</a></li>
</ul>
</li> 
<li class="submenu">
<a href="#"><i class="fas fa-university"></i> <span> Staff</span><span class="menu-arrow"></span></a>
 <ul>
<li><a href="add-staff.php"> Add satff</a></li>
<!--<li><a href="university-student-add.php">Add Student</a></li>-->
<li><a href="view-staff.php">view staff</a></li>
<li><a href="edit-staff.php">Edit staff</a></li>
</ul>
</li> 
<li class="submenu">
<a href="#"><i class="fas fa-university"></i> <span> Time Tables</span><span class="menu-arrow"></span></a>
 <ul>
<li><a href="add-timetable.php"> Add Timetable</a></li>
<!--<li><a href="university-student-add.php">Add Student</a></li>-->
<li><a href="view-timetable.php">view Timetable</a></li>
<li><a href="edit-timetable.php">editTimetable</a></li>
</ul>
</li> 
<!--<li class="menu-title">
<span>Management</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="fees-collections.html">Fees Collection</a></li>
<li><a href="expenses.html">Expenses</a></li>
<li><a href="salary.html">Salary</a></li>
<li><a href="add-fees-collection.html">Add Fees</a></li>
<li><a href="add-expenses.html">Add Expenses</a></li>
<li><a href="add-salary.html">Add Salary</a></li>
</ul>
</li>
<li>
<a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li>
<li>
<a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
</li>
<li>
<a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
</li>
<li>
<a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="error-404.html">Error Page</a></li>
</ul>
</li>
<li>
<a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
</li>
<li class="menu-title">
<span>Others</span>
</li>
<li>
<a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li>
<li>
<a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
</li>
<li>
<a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li>
<a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul>
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>-->
</div>
</div>
</div>



<div class="page-wrapper" id="pagewrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">View Timetable's</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="">Staff</a></li>
<li class="breadcrumb-item active">View Timetable</li>
</ul>
</div>
</div>
</div>

<!-- <div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-nine w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center"> -->
<!-- <div class="db-icon"> -->
<!-- <i class="fas fa-book-open"></i> -->
<!-- </div> -->
<!-- <div class="db-info">
<h3><?php echo $rank;?></h3>
<h6>Academic Rank</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-six w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-file-alt"></i>
</div> 
<div class="db-info">
<h3><?php echo $rank2;?></h3>
<h6>CCA Rank</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-ten w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-clipboard-list"></i>
</div> 
<div class="db-info">
<h3><?php echo $rank3;?></h3>
<h6>Sports Rank</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-ten w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-clipboard-list"></i>
</div> 
<div class="db-info">
<h3><?php echo $rank4;?></h3>
<h6>Overall Rank</h6>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="col-auto  ">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> ReportCard</a>
</div> -->
<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-eleven w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-clipboard-check"></i>
</div>
<div class="db-info">
<h3>15/20</h3>
<h6>Test Passed</h6>
</div>
</div>
</div>
</div>
</div> -->

<!-- Brand List  -->

                <!-- <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filter 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                              <button class="btn btn-primary btn-sm " type="reset">Reset</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Skills List</h6>
                            <hr>
                            
                                            <div>
                                                <input type="checkbox" name="brands[]" value="<?= $brandlist['skill_id']; ?>" 
                                                    <?php if(in_array($brandlist['skill_id'], $checked)){ echo "checked"; } ?>
                                                 
                                            </div>
                                        
                        </div>
                    </div>
                </form>
            </div>
             --><form action="" method="POST">
  <?php
                                        include'connect.php';
                                        $q="select tid,tname from staff";
                                        $r=mysqli_query($con,$q);

                                ?>
									<label class="required fs-6 fw-bold mb-2">Select Staff</label>
                                    <select name="time" class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="2" selected="selected">Select</option>
                                    <?php 
                                            while($row=mysqli_fetch_array($r))
                                            {
                                                echo'<option value='.$row['tid'].'>'.$row['tname'].'</option>';
                                            }
                                    ?>
												</select>
  <button type="submit" name="submit" class="btn btn-primary btn-sm float-end">Search</button>
</form>

                                  <div class="card card-table">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                
<div class="container">
                             <div class="card-body pt-0">
																		<!--begin::Table-->
																		<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
																			<!--begin::Table head-->
																			<thead>
																				<!--begin::Table row-->
																				<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																					
																					<th class="text-end min-w-70px">Day</th>
																					<th class="text-end min-w-70px">1</th>
																					<th class="text-end min-w-70px">2</th>
																					<th class="text-end min-w-100px">3</th>
																					<th class="text-end min-w-100px">4</th>
																					<th class="text-end min-w-100px">5</th>
																					<th class="text-end min-w-100px">6</th>
                                                                                    <th class="text-end min-w-100px">7</th>
                                                                                    <th class="text-end min-w-100px">8</th>
																				</tr>
																				<!--end::Table row-->
																			</thead>
																			<!--end::Table head-->
																			<!--begin::Table body-->
																			<tbody class="fw-bold text-gray-600">
																				<!--begin::Table row-->
																				<?php 
                                                                                  include 'connect.php';
                                                                                  $day = array("MONDAY", "TUESDAY", "WEDNESDAY", "THRUSDAY", "FRIDAY", "SATURDAY");
                                                                                ?>
                                                                                <?php
                                                                            $i = 0;
                                                                            while($i<6)
                                                                            {
                                                                                $query = "select one,two,three,four,five,six,seven,eight from time_table where TID ='$tid' and day ='$day[$i]'";
                                                                                $run = mysqli_query($con,$query) or die(mysqli_query);
                                                                                $data = mysqli_fetch_assoc($run);
                                                                                echo
                                                                                '<tr>
                                                                                <td>'.$day[$i].'</td>';
                                                                                foreach($data as $val)
                                                                                {
                                                                                    if($val == '0')
                                                                                        echo '<td class="text-end">
																						<span class="fw-bolder">❌</span>
																					</td>';
                                                                                    else
                                                                                        echo '<td class="text-end">
																						<span class="fw-bolder">'.$val.'</span>
																					</td>';    
                                                                                }
                                                                                $i++;
                                                                            }
?>

                                           

    

</div>
                           
                    </div>
                </div>
            </div>
        
    </div>

  
</div>
</div>





<!-- <div class="row">
<div class="col-12 col-lg-12 col-xl-9">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Attendence</h5>
</div>
<div class="col-6">
<span class="float-end view-link"><a href="#">View All Courses</a></span>
</div>
</div>
</div>
<div class="dash-circle">
<div class="row">
<div class="col-12 col-lg-6 col-xl-6 dash-widget3">
<div class="card-body dash-widget1">
<div class="circle-bar circle-bar2">
<div class="circle-graph2" data-percent="20">
<b>20%</b>
</div>
<h6>Lesson Learned</h6>
<h4>10 <span>/ 50</span></h4>
</div>
<div class="dash-details">
<h4>Facilisi etiam</h4>
<ul>
<li><i class="fas fa-clock"></i> 2.30pm - 3.30pm</li>
<li><i class="fas fa-book-open"></i> 5 Lessons</li>
<li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
<li><i class="fas fa-clipboard-check"></i> 5 Asignment</li>
</ul>
<div class="dash-btn">
<button type="submit" class="btn btn-info btn-border">Skip</button>
<button type="submit" class="btn btn-info">Continue</button>
</div>
</div>
</div>
</div>
<div class="col-6 col-lg6 col-xl-8 dash-widget2">
<div class="card-body">
<div class="circle-bar circle-bar3">
<div class="circle-graph3" data-percent="50">
<b>50%</b>
</div>
<h6>Attendence</h6>
<h4>25 <span>/ 50</span></h4>

</div>
 <div class="dash-details">
<h4>Augue mauris</h4>
<ul>
<li><i class="fas fa-clock"></i> 3.30pm - 4.30pm</li>
<li><i class="fas fa-book-open"></i> 6 Lessons</li>
<li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
<li><i class="fas fa-clipboard-check"></i> 6 Asignment</li>
</ul>
<div class="dash-btn">
<button type="submit" class="btn btn-info btn-border">Skip</button>
<button type="submit" class="btn btn-info">Continue</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- <script>
    $.get('checkupdate.php?lastupdate='+$("#lastUpdate").val(),function(data){
   if(data == '1'){
    refreshData();
   }
 });
    </script> -->
    <!-- <script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#pagewrapper').load('studentdashboard.php').fadeIn("slow");
}, 1000); // refresh every 1000 milliseconds
</script> -->
<!-- <div class="teaching-card">
<ul class="activity-feed">
<li class="feed-item">
<div class="feed-date1">Sep 05, 9 am - 10 am (60min)</div>
<span class="feed-text1"><a>Lorem ipsum dolor</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 04, 2 pm - 3 pm (70min)</div>
<span class="feed-text1"><a>Et dolore magna</a></span>
<p>Completed</p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 02, 1 pm - 2 am (80min)</div>
<span class="feed-text1"><a>Exercitation ullamco</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Aug 30, 10 am - 12 pm (90min)</div>
<span class="feed-text1"><a>Occaecat cupidatat</a></span>
<p>Completed</p>
</li>
</ul>
</div>
</div>
</div> -->
<!-- </div>
</div>
</div> -->
<!-- <div class="col-12 col-lg-12 col-xl-3 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">Calendar</h5>
</div>
</div>
</div>
<div class="card-body">
<div id="calendar-doctor" class="calendar-container"></div>
<div class="calendar-info calendar-info1">
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
<div class="calendar-details">
<p>10 am</p>
<h6 class="calendar-violet d-flex justify-content-between align-items-center">Pharetra et <span>10am - 11am</span></h6>
</div>
<div class="calendar-details">
<p>11 am</p>
<h6 class="calendar-red d-flex justify-content-between align-items-center">Break <span>11am - 11.30am</span></h6>
</div>
<div class="calendar-details">
<p>12 pm</p>
<h6 class="calendar-orange d-flex justify-content-between align-items-center">Massa <span>11.30am - 12.00pm</span></h6>
</div>
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>

</div> -->

<!-- 

</div>

</div> -->


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

 <!-- chart  js plugin -->



<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script> 

<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>

<script src="assets/js/circle-progress.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>