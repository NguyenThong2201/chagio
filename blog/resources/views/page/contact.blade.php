@extends('layouts.home.pagedetail')
@section('content')
<div class="col-md-9 technology-left">
		<div class="contact-section">
			<h2 class="w3">LIÊN HỆ</h2>
			<div class="contact-grids">
				<div class="col-md-8 contact-grid">
					<p>Mọi thắc mắc và yêu cầu xin vui lòng liên hệ trược tiếp đến chúng tôi.</p>
					<form action="#" method="post">
						<input type="text" name="Name" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
						<textarea type="text" name="textarea" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="col-md-4 contact-grid1">
					<h4>Thông tin liên hệ trược tiếp</h4>
					<div class="contact-top">
						<div class="clearfix"></div>
					</div>
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Phone : 0984250265</li>
						<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0977970263</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:diennuocdatduong@gmail.com">diennuocdatduong@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8679554096!2d150.65178930803913!3d-33.847403996396665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1470643502584" allowfullscreen></iframe>
			</div>
		</div>
	</div>
@endsection()