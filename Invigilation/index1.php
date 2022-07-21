<?php 
include 'connect.php';
$day = array("MONDAY", "TUESDAY", "WEDNESDAY", "THRUSDAY", "FRIDAY", "SATURDAY");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Time Table</title>
<link rel="shortcut icon" href="assets/img/favicon.png"
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>Day</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
</tr>
</thead>
<tbody>
<?php
    $i = 0;
    while($i<6)
    {
        $query = "select one,two,three,four,five,six,seven,eight from time_table where TID ='T0001' and day = '$day[$i]'";
        $run = mysqli_query($con,$query) or die(mysqli_query);
        $data = mysqli_fetch_assoc($run);
        echo
        '<tr>
        <td>'.$day[$i].'</td>';
        foreach($data as $val)
        {
            if($val == 1)
                echo '<td>✔️</td>';
            else
                echo '<td>❌</td>';    
        }
        $i++;
    }
?>
<td class="text-end">
</div>
</div>
</div>
</div>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>