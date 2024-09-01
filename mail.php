<?php

if (isset($_POST['email']))
{
	
	

				$subject = "User Contact information Form Landing page ";

				$message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
							<tbody>
								<tr style='background: #47B7E8; color: #ffffff;'>
									<th colspan='2'>Contact Information</th>
								</tr>
								<tr style='background: #eee;'>
									<td>Name:</td><td>{$_POST['name']}</td>
								</tr>
										<tr style='background: #eee;'>
									<td>Email:</td><td>{$_POST['email']}</td>
								</tr>
										<tr style='background: #eee;'>
									<td>Telephone/Mobile:</td><td>{$_POST['phone']}</td>
								</tr>
								<tr style='background: #eee;'>
									<td>Services:</td><td>{$_POST['services']}</td>
								</tr>
								<tr style='background: #eee;'>
									<td>Message:</td><td>{$_POST['message']}</td>
								</tr>								 
							</tbody>
						</table>";
									
					
				    $to = "anuj@digitalwebsolutions.in";
					$from = $_POST['email'];
					$headers .= 'MIME-Version: 1.0'."\r\n";
					$headers ="From: info@dev.mobilewebsitepro.com\r\n";
					$headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n";	
					@mail($to,$subject,$message,$headers);
					
					$redirect = 'thankyou.html';
               
					echo "<script>window.location='{$redirect}';</script>";
					
}

?> 