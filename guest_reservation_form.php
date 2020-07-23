<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="css/guest_reservation_form.css">
</head>
<body>
	<div class="wrapper">
<!--header part start-->
	<div class="header">
		<div class="header_left"><span>international Hotel</span></div>
		<div class="menubar">
			<ul>
				<li><a href="index.html">welcome</a></li>
				<li><a href="room.html">rooms</a></li>
				<li><a href="location.html">location</a></li>
				<li><a href="#">reservation</a>
					<ul>
						<li>
						<a href="#">guest reservation</a>
						</li>
						<li>
						<a href="admin_reservation.html">Admin reservation</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="header_btn">
			<ul>
				<li><a href="#">Admin</a></li>
			</ul>
		</div>
	</div>
<!--header part end-->
<!--form part start-->

<div class="wrapper">
<div class="form">
	<form>
		<div class="form_1st_row">RESERVATION FORM</div>
		<div class="form_2nd_row">
			<div class="form_left1">
				<div class="salutation">
				<select>
					<option value="0">SALUTATION</option>
					<option value="1">MR</option>
					<option value="2">MRS</option>
					<option value="3">MISS</option>
					<option value="4">MS</option>
				</select>
			</div>
			<div class="first_name"><input class="" type="text" placeholder="First Name">
			</div>
			<div class="last_name"><input type="text" placeholder="Last Name">
			</div>
			<div class="email"><input type="email" placeholder="@gmai.com">
			</div>
			<div class="phn_num"><input type="number" placeholder="Contact Number">
			</div>
			<div class="textarea">
				<textarea  placeholder="Massage"></textarea>
			</div>
		</div>
			
			<div class="form_left2">
			<div class="COUNTRY">
				<select>
					<option value="0">CHOOSE YOUR COUNTRY</option>
					<option value="1">USA</option>
					<option value="2">UK</option>
					<option value="3">BANGLADESH</option>
					<option value="4">INDIA</option>
					<option value="5">JAPAN</option>
				</select>
				</div>
				<div class="city">
					<input type="text" placeholder="CITY">
				</div>
				<div class="postal_code">
					<input type="number" placeholder="POSTAL CODE">
				</div>
				<div class="address">
					<textarea placeholder="ADDRESS"></textarea>
				</div>
			</div>
		</div>
		<div class="foem_3rd_row">
			<div class="form_3rd_row_left_clm">
				<input class="sub" type="submit" value="HIT IT">
			</div>
			<div class="form_3rd_row_right_clm">
				<input class="res" type="reset" value="ERASE IT">
			</div>
		</div>
	</form>
</div>
</div>

<!--form part end-->
<!--footer start-->
<div class="footer_full_wrap">
	<div class="footer_left">
		<div class="footer_left1">
			STRAND INTERNATIONAL HOTEL
		</div>
		<div class="footer_left2">
			<div class="footer_left2_left">
				<ul>
					<li>ABOUT US</li>
					<li>DEALS</li>
					<li>ROOMS</li>
				</ul>
			</div>
			<div class="footer_left2_right">
				<ul>
					<li>AMENITIES</li>
					<li>WHAT'S NEARBY</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer_center">
		<div class="footer_center_left">
			<ul>
				<li>FAQs</li>
				<li>CONTACT US</li>
			</ul>
		</div>
		<div class="footer_center_right">
			<img src="images/footer_center.png">
		</div>
	</div>
	
	<div class="footer_right">
		<div class="footer_right1">
			<div class="footer_right1_email">
				JOIN OUR MAILING LIST
			</div>
			<form>
				<div class="footer_right1_input">
				<input class="input" type="email" placeholder="Your Email Address">
				<div class="clr"></div>
				<div class="footer_right1_input_submit">
					<input class="send" type="submit" value="SEND">
				</div>
			</div>
			</form>
		</div>
		<div class="footer_right2">
			<div class="connect">
				CONNECT WITH US
			</div>
			<div class="social">
				<a href="#"><img src="images/fb.png" width="25" height="28"></a>
				<a href="#"><img src="images/tweter.png" width="25" height="28"></a>
				<a href="#"><img src="images/insta.png" width="26" height="25"></a>
			</div>
		</div>
	</div>
</div>
<div class="copy_right">
	Copyright © 2018 Marriott International , IncAll Rights Reserved. Marriott ProprietarInformation
</div>
<!--footer end-->
	</div>
</body>
</html>