@extends('layouts.home.pagedetail')
@section('content')
<div class="col-md-9 technology-left">
	<div class="agileinfo">
	  <h2 class="w3">CHI TIẾT</h2>
		<div class="single">
		   <img src="page/images/sing-1.jpg" class="img-responsive" alt="">
		    <div class="b-bottom"> 
		      <h5 class="top">SỬA CHỮA ĐIỆN NƯỚC TẠI NHÀ</h5>
			   <p class="sub">Công ty điện nước thành thị tự hào là đơn vị tiên phong trong ngành dịch vụ sửa chữa điện nước với về dày nhiều năm kinh nghiệm với đội ngũ nhân viên tận tình chu đáo sẽ là địa chỉ đáng tin cậy về chất lượng, giá cả để quý khách hàng có thể gửi gắm những khó khăn và lo lắng mỗi khi gặp phải những vấn đề sau.
			   VẤN ĐỀ VỀ HỆ THỐNG ĐIỆN
				Khi bạn có nhu cầu tư vấn thiết kế lắp đặt hệ thống điện nước cho gia đình, văn phòng , xí nghiệp hay nhà xưởng.
				Khi gặp sự cố về mất điện, chập điện.
				Sự cố cháy chập, ổ cắm chìm hỏng, tủ điện thiết bị điện đồng loạt bị cháy.
				Khi bạn cần một đội thi công lành nghề giàu kinh nghiệp và uy tín để thi công điện, điện nhẹ,điện thông minh.
				Khi gia hệ thống nhà ở biệt thự của bạn muốn thi công lại hoặc thi công làm mới hệ thống điện cho hiện đại và an toàn hơn.
				Khi bạn gia đình bạn có trẻ nhỏ người già muốn kiểm tra lại đường dây điện để đảm bảo an toàn.</p>
		      <p>On Aug 01 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
			 
			</div>
		 </div>
			<div class="response">
				<h4>Responses</h4>
				<div class="media response-info">
					<div class="media-left response-text-left">
						<a href="#">
							<img src="images/sin1.jpg" class="img-responsive" alt="">
						</a>
					</div>
					<div class="media-body response-text-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul>
							<li>Jun 21, 2016</li>
							<li><a href="#">Reply</a></li>
						</ul>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img src="images/sin2.jpg" class="img-responsive" alt="">
								</a>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>July 17, 2016</li>
									<li><a href="#">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="media response-info">
					<div class="media-left response-text-left">
						<a href="#">
							<img src="images/sin1.jpg" class="img-responsive" alt="">
						</a>
					</div>
					<div class="media-body response-text-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul>
							<li>Jul 22, 2016</li>
							<li><a href="#">Reply</a></li>
						</ul>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img src="images/sin2.jpg" class="img-responsive" alt="">
								</a>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>Aug 01, 2016</li>
									<li><a href="#">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>	
			<div class="coment-form">
				<h4>Leave your comment</h4>
				<form action="#" method="post">
					<input type="text" value="Name " name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Website" name="websie" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
					<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
					<input type="submit" value="Submit Comment">
				</form>
			</div>	
			<div class="clearfix"></div>
		</div>
	</div>
@endsection()