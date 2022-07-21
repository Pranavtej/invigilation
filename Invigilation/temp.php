
<?php
include 'connect.php';
if($_GET['day'])
{
    $day = $_GET['day'];
    $day = strtoupper($day);
    $time=$_GET['time'];
    if($time == 0){
        $q = "select tid from time_table where day='$day' and one='0' and two='0' and three='0' and four='0'";
        $run = mysqli_query($con,$q) or die(xx1);
    }
    else{
        $q = "select tid from time_table where day='$day' and five='0' and six='0' and seven='0' and eight='0'";
        $run = mysqli_query($con,$q) or die(xx2);
    }
}

?>

<html>
<body>
<?php
    while($row = mysqli_fetch_assoc($run))
    {
        $s = $row['tid'];
        echo nl2br("$s \n");
        }
?>

</body>
</html>