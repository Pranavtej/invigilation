<?php

include 'connect.php';

if(isset($_POST['submit']))
{
    
                                    $ename= $_POST['times'];
                                    $q="select time,from_date,to_date from exam_data where e_name='$ename'";
                                    $run = mysqli_query($con,$q) or die(xxx);
                                    $run = mysqli_fetch_assoc($run);
                                    $tt = $run['time'];
                                    $f = $run['from_date'];
                                    $t = $run['to_date'];
                                    $begin = new DateTime($f);
                                    $end = new DateTime($t);
                                    $end->modify("+1 day");

                                    $interval = DateInterval::createFromDateString('1 day');
                                    $period = new DatePeriod($begin, $interval, $end);                             
}                             

?>
<html>

<head>

</head>
<body>
            <div class="col-md-6 fv-row">
                                 <form method="post">
                                <?php
                                        include'connect.php';
                                        $q="select e_name from exam_data";
                                        $r=mysqli_query($con,$q);

                                ?>
									<label class="required fs-6 fw-bold mb-2">Select Examiantion</label>
                                    <select name="times" class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="2" selected="selected">Select</option>
                                    <?php 
                                            while($row=mysqli_fetch_array($r))
                                            {
                                                echo'<option value='.$row['e_name'].'>'.$row['e_name'].'</option>';
                                            }
                                    ?>
												</select>
							
                                <button type="submit" name="submit">submit</button>
                                </form>
                            </div>
                
                            <table>
                                <tr>
                                <?php
                                foreach ($period as $dt) {
                                        if($dt->format('l') != "Sunday")
                                            echo '<th><button class=".btn-rounded" name="select"><a href="temp.php?day='.$dt->format("l").'&time='.$tt.'">'.$dt->format("d-m-y \n").'</a></button>
                                           </th>';
                                    }
                                ?>
                                </tr>
                            </table>
</body>