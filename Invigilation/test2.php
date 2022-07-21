<?php

include'connect.php';
if(isset($_POST['submit']))
{
       $tid=$_POST['time'];
       $cid=$_POST['time2'];
}

?>
<html>

<head>
	<!--begin::Fonts-->
		<link rel="stylesheet" href="/css-2?family=Poppins:300,400,500,600,700">
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
                                 <form method="post">
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
									<!--<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title">-->
								
								</div>

                                <div class="col-md-6 fv-row">
                                <?php
                                        include'connect.php';
                                        $q="select cid,class from class_id";
                                        $r=mysqli_query($con,$q);

                                ?>
									<label class="required fs-6 fw-bold mb-2">Select Staff</label>
                                    <select name="time2" class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="2" selected="selected">Select</option>
                                    <?php 
                                            while($row=mysqli_fetch_array($r))
                                            {
                                                echo'<option value='.$row['cid'].'>'.$row['class'].'</option>';
                                            }
                                    ?>
												</select>
									<!--<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title">-->
								
								</div>
                               <button type="submit" name="submit">submit</button>
                               
                                            
                               
                               </form>

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
                                                                                $query = "select one,two,three,four,five,six,seven,eight from class_time_Table where cid='$cid' and day ='$day[$i]'";
                                                                                $run = mysqli_query($con,$query) or die(mysqli_query);
                                                                                $data = mysqli_fetch_assoc($run);
                                                                                echo
                                                                                '<tr>
                                                                                <td>'.$day[$i].'</td>';
                                                                                foreach($data as $val)
                                                                                {
                                                                                    if($val == $tid)
                                                                                        echo '<td class="text-end">
																						<span class="fw-bolder">'.$val.'</span>
																					</td>';
                                                                                    else
                                                                                        echo '<td class="text-end">
																						<span class="fw-bolder">--</span>
																					</td>';    
                                                                                }
                                                                                $i++;
                                                                            }
?>

																					<!--end::Action=-->
																				</tr>
																				<!--end::Table row-->
																			</tbody>
																			<!--end::Table body-->
																		</table>
																		<!--end::Table-->
																	</div>
																	<!--end::Card body-->
																</div>
																<!--end::Products-->
															</div>
															<!--end::Content-->
														</div>
											</div>

            </div>


            </body>