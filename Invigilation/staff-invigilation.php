
<?php
include 'connect.php';
if($_GET['day'])
{
    $day = $_GET['day'];
    $etype=$_GET['etype'];
    $day = strtoupper($day);
    $time=$_GET['time'];
    $date=$_GET['date'];
    $ecode=$_GET['ecode'];
    if($time == 0){
        $q = "select tid from time_table where day='$day' and one='0' and two='0' and three='0' and four='0'";
        $run = mysqli_query($con,$q) or die('Unexpected error Mn');
    }
    else{
        $q = "select tid from time_table where day='$day' and five='0' and six='0' and seven='0' and eight='0'";
        $run = mysqli_query($con,$q) or die('Unexpected error AF');
    }
}

?>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Staff Invigilation</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

<link rel="stylesheet" href="assets/css/style.css">

 <script type="text/javascript" src="js.js"></script>
 
</head>
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


<<div class="sidebar" id="sidebar">
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

<body>
<div class="page-wrapper" id="pagewrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">

<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Staff</a></li>
<li class="breadcrumb-item active">Adding Invigilation</li>
</ul>
</div>
</div>
</div>
<div class="card shadow mt-3">
<div class="card-body">
                            <h6>Date :<?php echo $date?></h6>
                            <h6>Exam Code :<?php echo $ecode?></h6>
                            <form method="POST">
                            <button  type="button" class="btn btn-rounded btn-primary">Send Message</button>
                            <button type="submit" name="submit" class="btn btn-rounded btn-primary">Save Data</button>
                            <hr>
                                            <div>
                          <?php
                          include'connect.php';
                                    while($row = mysqli_fetch_assoc($run))
                                    {
                                        $s = $row['tid'];
                                        $sa="select tname from staff where tid='$s'";
                                        $r=mysqli_query($con,$sa);
                                        $ro = mysqli_fetch_assoc($r);

                                        //echo nl2br("$s \n");
                                        ?>
                                         <input type="checkbox" name="brands[]" value="<?php echo $s?>"/> <?php echo $ro['tname'];
                                         
                                       
                                    }
                            ?>
                            
                                                                                   
</div>
</div>
</form>
<?php
if(isset($_POST['submit']))  
{  
  
$checkbox1=$_POST['brands'];
$c=$_POST['brands'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into exam_staff(examid,date,tid) values('$ecode','$date','$chk')");  

   foreach ($c as $d)
   {   
       if ($etype==0)
       {
       $x="select ucount from invigilation_staff where tid='$d'";
       $o=mysqli_query($con,$x);
       $f=mysqli_fetch_assoc($o);
       $n=$f['ucount'];
       $n=$n+1;
       $j="insert into  invigilation_staff(tid,ucount) values('$d','$n') ON DUPLICATE KEY UPDATE ucount='$n'";
  
       $e=mysqli_query($con,$j);
       }
       else{
            $x="select  mcount from invigilation_staff where tid='$d'";
       $o=mysqli_query($con,$x);
       $f=mysqli_fetch_assoc($o);
       $n=$f['mcount'];
       $n=$n+1;
       $j="insert into  invigilation_staff(tid,mcount) values('$d','$n') ON DUPLICATE KEY UPDATE mcount='$n'";
       $e=mysqli_query($con,$j) or die('');

       }
   } 

   if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';
      echo' <script>history.go(-2)</script>';
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   } 

}  
?>  













                             <?php
                            // if(isset($_GET['brands']))
                            // {
                            //     $branchecked = [];
                            //     $branchecked = $_GET['brands'];
                            //     ?>
                            <?php
                            //     foreach($branchecked as $rowbrand)
                            //     {
                            //         // echo $rowbrand;
                            //         // $products = "select sid,sname,branch,degree,cgpa,internships FROM students WHERE uid='$rowbrand' group by cgpa desc";
                            //         $products = "insert into exam_staff(examid,date,tid) values('$ecode','$date','$rowbrand')";
                            //         $products_run = mysqli_query($con, $products);
                            //         if(mysqli_num_rows($products_run) > 0)
                            //         {
                                     
                                            
                            //         }
                            //     }
                            // }
                             ?>
                            
                            <?php
                            // else
                            // {
                            //     $products = "SELECT * FROM a_products";
                            //     $products_run = mysqli_query($con, $products);
                            //     if(mysqli_num_rows($products_run) > 0)
                            //     {
                            //         foreach($products_run as $proditems) :
                            //             
                           //                 <div class="col-md-4 mt-3">
                            //                     <div class="border p-2">
                            //                         <h6><?= $proditems['name']; </h6>
                            //                     </div>
                            //                 </div> -->
                                       
                            //         endforeach;
                            //     }
                            ?>
                            
                    </div>
                </div>
            </div>
        
    </div>

<?php
//     while($row = mysqli_fetch_assoc($run))
//     {
//         $s = $row['tid'];
//         echo nl2br("$s \n");
//         }
// ?>

</body>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</html>