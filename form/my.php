<?php
					$quer_res=mysqli_query($con,"select * from tblorder where fld_email_id='$cust_id' && fldstatus='In Process'");
					while($roww=mysqli_fetch_array($quer_res))
					{   
				         $fid=$roww['fld_food_id'];
				         $qr=mysqli_query($con,"select * from tbfood where food_id='$fid'");
						 $qrr=mysqli_fetch_array($qr);
						
					  
					?>
					   <tr>
					   <td><?php echo $roww['fld_order_id']; ?></td>
					   <?php
					   if(empty($qrr['foodname']))
					   {
					   ?>
					   <td><span style="color:red;">Product Not Available Now</span></td>
					   <?php
					   }
					   else
					   {
						   ?>
						    <td><?php echo $qrr['foodname']; ?></td>
						   <?php
					   }
					   ?>
					  
					   <td><?php echo $qrr['cost']; ?></td>
					   <td><a href="#" onclick="del(<?php echo $roww['fld_order_id'];?>);"><button type="button" class="btn btn-danger">Cancel Order</button></a></td>
					   </tr>
					 <?php
					}
					 ?>  









. "<tr><td>". $row["fld_cart_id"] ."</td></tr>". "<tr><td>". $row["fldvendorid"] ."</td></tr>". "<tr><td>". $row["fld_food_id"] ."</td></tr>". "<tr><td>". $row["fld_email_id"] ."</td></tr>". "<tr><td>". $row["fld_payment"] ."</td></tr>". "<tr><td>". $row["fldstatus"] ."</td></tr>";


, fld_cart_id, fldvendorid, fld_food_id, fld_email_id, fld_payment, fldstatus 



