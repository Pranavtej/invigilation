

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Add Satff</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style.css">
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
</ul>
</li> 
<li class="submenu">
<a href="#"><i class="fas fa-university"></i> <span> Time Tables</span><span class="menu-arrow"></span></a>
 <ul>
<li><a href="add-timetable.php"> Add Timetable</a></li>
<!--<li><a href="university-student-add.php">Add Student</a></li>-->
<li><a href="view-timetable.php">view Timetable</a></li>
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

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Staff Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a >Staff</a></li>
<li class="breadcrumb-item active">Update Staff</li>
</ul>
</div>
</div>
</div>
<form method="post">
<div class="container">
<div class="col-12 col-sm-6">
<?php
include 'connect.php';
 $q="select tid,tname from staff";
 $res=mysqli_query($con,$q);

 ?>


									<label >Select Staff</label>
                                    <select name="times" class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="2" selected="selected">Select</option>
                                    <option value=4/4 IT SEM 2>4/4 IT SEM 2</option>
                                    <?php
                                     while($t=mysqli_fetch_assoc($res))
                                     {
                                         echo '<option value='.$t['tid'].'>'.$t['tname'].'</option>';
                                     }
                                     ?>
                                    </select>
							

</div>

<div class="col-auto text-end ">
<button type="submit" name="submit" class="btn btn-primary">Search Stafft</button>

</div>


</form>
<?php session_start();
include'connect.php';
if(isset($_POST['submit']))
{
    $tid=$_POST['times'];
    $_SESSION['tid']=$tid;
    $ti=$_SESSION['tid'];
    $e="select tid ,tname from staff where tid='$ti'";
    $un=mysqli_query($con,$e);
    $v=mysqli_fetch_assoc($un);

?>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form method="POST">
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Add Staff</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Staff Name </label>
<input type="text" class="form-control" placeholder="Staff name" name="tname" value=<?php  echo $v['tname'] ; ?> >
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Staff ID </label>
<input type="text" class="form-control" placeholder="Staff Id" name="tid" value=<?php  echo $v['tid'] ; ?> >
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Satff Email</label>
<input type="text" class="form-control" placeholder="Staff email" name="exam">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile Number</label>
<input type="text" class="form-control" placeholder="mobile no" name="exam">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>course id </label>
<input type="text" class="form-control" placeholder="course id" name="exam">
</div>
</div>
<div class="col-12">
<button type="submit" name="submits" class="btn btn-primary"> Add satff</button>
</div>
</div>
</form>
<?php
}
?>


<?php session_start();

include'connect.php';
if(isset($_POST['submits']))
{
   $tname=$_POST['tname'];
   $t=$_POST['tid'];
   //$tid=$_SESSION['tid'];
//    $fdate=$_POST['fdate'];
//    $tdate=$_POST['tdate'];
     $q="update staff  set tname='$tname' where tid='$t'";
     $r=mysqli_query($con,$q);
     if($r)
     {
         echo'<script> alert("Staff Updated  successfully...") </script>';
         session_distroy();
     }
}

?>

</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>