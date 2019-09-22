<!DOCTYPE html>
<html lang="vi">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
		.gm-err-container {
			height: 100%;
			width: 100%;
			display: table;
			background-color: #e0e0e0;
			position: relative;
			left: 0;
			top: 0
		}

		.gm-err-content {
			border-radius: 1px;
			padding-top: 0;
			padding-left: 10%;
			padding-right: 10%;
			position: static;
			vertical-align: middle;
			display: table-cell
		}

		.gm-err-content a {
			color: #4285f4
		}

		.gm-err-icon {
			text-align: center
		}

		.gm-err-title {
			margin: 5px;
			margin-bottom: 20px;
			color: #616161;
			font-family: Roboto, Arial, sans-serif;
			text-align: center;
			font-size: 24px
		}

		.gm-err-message {
			margin: 5px;
			color: #757575;
			font-family: Roboto, Arial, sans-serif;
			text-align: center;
			font-size: 12px
		}

		.gm-err-autocomplete {
			padding-left: 20px;
			background-repeat: no-repeat;
			background-size: 15px 15px
		}
	</style>
	<style>
		.gm-control-active>img {
			box-sizing: content-box;
			display: none;
			left: 50%;
			pointer-events: none;
			position: absolute;
			top: 50%;
			transform: translate(-50%, -50%)
		}

		.gm-control-active>img:nth-child(1) {
			display: block
		}

		.gm-control-active:hover>img:nth-child(1),
		.gm-control-active:active>img:nth-child(1) {
			display: none
		}

		.gm-control-active:hover>img:nth-child(2),
		.gm-control-active:active>img:nth-child(3) {
			display: block
		}
	</style>
	<style>
		.gm-ui-hover-effect {
			opacity: .6
		}

		.gm-ui-hover-effect:hover {
			opacity: 1
		}
	</style>
	<style>
		.gm-style .gm-style-cc span,
		.gm-style .gm-style-cc a,
		.gm-style .gm-style-mtc div {
			font-size: 10px;
			box-sizing: border-box
		}
	</style>
	<style>
		@media print {

			.gm-style .gmnoprint,
			.gmnoprint {
				display: none
			}
		}

		@media screen {

			.gm-style .gmnoscreen,
			.gmnoscreen {
				display: none
			}
		}
	</style>
	<style>
		.gm-style-pbc {
			transition: opacity ease-in-out;
			background-color: rgba(0, 0, 0, 0.45);
			text-align: center
		}

		.gm-style-pbt {
			font-size: 22px;
			color: white;
			font-family: Roboto, Arial, sans-serif;
			position: relative;
			margin: 0;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%)
		}
	</style>
	<style>
		.gm-style img {
			max-width: none;
		}

		.gm-style {
			font: 400 11px Roboto, Arial, sans-serif;
			text-decoration: none;
		}
	</style>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>BKHUB - TRUNG TÂM ĐÀO TẠO LẬP TRÌNH THỰC CHIẾN</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="{{asset('css/fontawesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/event.css')}}" rel="stylesheet">
	<link href="{{asset('css/green.css')}}" rel="stylesheet">

</head>

<body class="animate-page  pace-done" data-spy="scroll" data-target="#navbar" data-offset="100"
	data-cf-browser-state="modern" data-cf-browser-version="76" data-cf-browser-name="chrome" cz-shortcut-listen="true"
	style="">

	<header id="top" class="header">
		<div class="container">
			<div class="header_top-bg">
				<div class="logo">
				</div>
			</div>
			<h3 class="headline-support wow fadeInDown">Sự kiện nổi bật</h3>
			<h1 class="headline wow fadeInDown" data-wow-delay="0.1s">Ai cũng có thể tạo App</h1>
			<div class="when_where wow fadeIn" data-wow-delay="0.4s">
				<p class="event_when">Chủ nhật, 29 tháng 9, 2019 lúc 14:00 – 18:00</p>
				<p class="event_where">Hội Trường B6 Đại học Bách Khoa Hà Nội</p>
			</div>
			<div class="header_bottom-bg">
				<a class="btn btn-default btn-xl wow zoomIn" data-wow-delay="0.3s"
					data-toggle="modal"
					data-target="#email-register">ĐẶT CHỖ</a>
				<p class="cta_urgency wow fadeIn" data-wow-delay="0.5s"><small>Nhanh tay, chỉ còn vài chỗ trống</small></p>
			</div>
		</div>

	</header>
	<section class="highlight">
		<div class="container">
			<p class="lead text-center">Bạn có để ý ứng dụng di động đang phục vụ hết tất cả nhu cầu của bạn. Các công ty lớn bé đều đang muốn thâu tóm mảng app mobile. Vậy tại sao bạn lại bỏ qua cơ hội này? </p>
			<div class="countdown_wrap">
				<h6 class="countdown_title text-center">SỰ KIỆN BẮT ĐẦU SAU</h6>

				<ul id="countdown" data-event-date="Sep 29, 2019 14:00:00">
					<li class="wow zoomIn" data-wow-delay="0s"> <span class="days" id="count_day">00</span>
						<p class="timeRefDays">days</p>
					</li>
					<li class="wow zoomIn" data-wow-delay="0.2s"> <span class="hours" id="count_hour">00</span>
						<p class="timeRefHours">hours</p>
					</li>
					<li class="wow zoomIn" data-wow-delay="0.4s"> <span class="minutes" id="count_minute">00</span>
						<p class="timeRefMinutes">minutes</p>
					</li>
					<li class="wow zoomIn" data-wow-delay="0.6s"> <span class="seconds" id="count_second">00</span>
						<p class="timeRefSeconds">seconds</p>
					</li>
				</ul>
			</div>
		</div>
<p id="demo"></p>
	</section>
	<section class="schedule" id="schedule">
		<div class="container">
			<div class="section-title wow fadeInUp">
				<h4>LỊCH TRÌNH</h4>
			</div>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="day1">

					<section class="timeline">
						<div class="timeline-block">
							<div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
							</div>

							<div class="timeline-content">
								<h2 class="wow flipInX" data-wow-delay="0.3s"> Giới thiệu chương trình</h2>
								<span class="date wow flipInX" data-wow-delay="0.3s">14:00</span>
							</div>

						</div>

						<div class="timeline-block">
							<div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
							</div>

							<div class="timeline-content">
								<h2 class="wow flipInX" data-wow-delay="0.3s"> Giới thiệu người tham gia</h2>
								<p class="wow flipInX" data-wow-delay="0.3s">by Ngọc PM</p>
								<span class="date wow flipInX" data-wow-delay="0.3s">14:30</span>
							</div>

						</div>
						<div class="timeline-block">
							<div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
							</div>

							<div class="timeline-content">
								<h2 class="wow flipInX" data-wow-delay="0.3s"> Nghỉ giải lao</h2>
								<p class="wow flipInX" data-wow-delay="0.3s">by Ngọc PM</p>
								<span class="date wow flipInX" data-wow-delay="0.3s">15:00</span>
							</div>

						</div>
						<div class="timeline-block">
							<div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
							</div>

							<div class="timeline-content">
								<h2 class="wow flipInX" data-wow-delay="0.3s"> Giới thiệu sản phẩm</h2>
								<p class="wow flipInX" data-wow-delay="0.3s">by Ngọc PM</p>
								<span class="date wow flipInX" data-wow-delay="0.3s">16:00</span>
							</div>

						</div>
					</section>
				</div>
			</div>
		</div>

	</section>
	<section class="gallery" id="gallery">
		<div class="container">
			<div class="section-title">
				<h4>THƯ VIỆN ẢNH</h4>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="photo-gallery">
					<div class="popup-gallery">
						<div class="row">
							<div class="col-md-6">
								<a href="./images/CEO.jpg"
									title=""><img
										src="./images/CEO.jpg"
										alt="gallery image" class="img-responsive wow fadeIn"></a>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-sm-6">
										<a href="./images/workshop01.jpg"
											title=""><img
												src="./images/workshop01.jpg"
												alt="gallery image" class="img-responsive wow fadeIn"
												data-wow-delay="0.2s"></a>
									</div>
									<div class="col-sm-6">
										<a href="./images/study.jpg"
											title=""><img
												src="./images/study.jpg"
												alt="gallery image" class="img-responsive wow fadeIn"
												data-wow-delay="0.2s"></a>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<a href="./images/teamwork.jpg"
											title=""><img
												src="./images/teamwork.jpg"
												alt="gallery image" class="img-responsive wow fadeIn"
												data-wow-delay="0.4s"></a>
									</div>
									<div class="col-sm-6">
										<a href="./images/workshop.jpg"
											title=""><img
												src="./images/workshop.jpg"
												alt="gallery image" class="img-responsive wow fadeIn"
												data-wow-delay="0.4s"></a>
									</div>
								</div>

							</div>
						</div>

					</div>

				</div>
			</div>

		</div>

	</section>

	<section class="faq">
		<div class="container">
			<div class="section-title">
				<h5>Câu hỏi hay gặp</h5>
			</div>
			<div class="row">
				<div class="col-md-6 wow fadeInLeft" data-wow-duration="2s">
					<h6 class="faq-title">Người không biết gì về toán có học lập trình được không?</h6>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					<h6 class="faq-title">Người không bằng cấp có xin được việc trong ngành lập trình?</h6>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				<div class="col-md-6 wow fadeInRight" data-wow-duration="2s">
					<h6 class="faq-title">Làm việc ngành lập trình này có phải khó tìm người yêu?</h6>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					<h6 class="faq-title">Làm IT có phải việc nhàn lương cao?</h6>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="highlight">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contact-box">
						<h5>ĐỊA CHỈ</h5>
						<p>Số 11 ngõ 15,
							<br>Vương Thừa Vũ,
							<br> Ngã Tư Sở, Hà Nội
					</div>
				</div>
				<div class="col-sm-6">
					<div class="contact-box">
						<h5>LIÊN HỆ</h5>
						<p><a href="mailto:bkhub296@gmail.com">bkhub296@gmail.com</a>
							<br>
							<br>0902.734.494
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="container" id="contact">
		<div class="section-title">
			<h5>ĐỂ LẠI LỜI NHẮN</h5>
			<p>Nếu bạn có bất kỳ câu hỏi nào về sự kiện, hãy gửi cho chúng tôi</p>
		</div>
		<div class="contact-form bottom-space-xl wow fadeInUp">
			<form action="" id=""
				method="POST" novalidate="novalidate">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<label>Họ vào tên</label>
							<input type="text" class="form-control" name="first_name" placeholder="First Name"
								required="" aria-required="true">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email Address"
								required="" aria-required="true">
						</div>
						<div class="form-group">
							<label>Số Điện Thoại</label>
							<input type="text" class="form-control" name="phone" placeholder="Phone Number" required=""
								aria-required="true">
						</div>
						<div class="form-group">
							<label>Lời Nhắn</label>
							<textarea class="form-control" name="message" rows="6" placeholder="Enter your message here"
								required="" aria-required="true"> </textarea>
						</div>
						<div class="text-center top-space">
							<button type="submit" class="btn btn-success btn-block btn-lg" id="js-contact-btn">Gửi</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<footer>
		<p> <small class="text-muted">Copyright © 2019. All rights reserved.</small></p>
	</footer>

	<div class="modal fade" id="email-register" tabindex="-1" role="dialog" aria-labelledby="register-now-label"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">×</span></button>
					<h4 class="modal-title text-center" id="register-now-label">Đăng ký tham gia
					</h4>
				</div>
				<div class="modal-body">
					<div class="registration-form">
						<form action="/post-register-email" method="POST"
							target="_top" id="registration_form"
							novalidate="novalidate">
							<div class="row">
								<div class="form-group">
									<label>Họ và Tên</label>
									<input type="text" class="form-control" name="Họ và tên"
										placeholder="First Name" required="" aria-required="true">
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="Địa chỉ email"
										required="" aria-required="true">
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<label>Số Điện Thoại</label>
									<input type="number" class="form-control" name="phone" placeholder="Số điện thoại"
										required="" aria-required="true">
								</div>
							</div>
							<div class="text-center top-space">
								<input type="submit" id="register-btn"
									class="btn btn-success btn-lg js-register-btn" value="Đăng ký ngay">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script src="{{asset('js/countdown.js')}}"></script>

<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	   	// bind 'myForm' and provide a simple callback function
		$("#registration_form").submit(function(event){
			event.preventDefault(); //prevent default action 
			var post_url = $(this).attr("action"); //get form action url
			var request_method = $(this).attr("method"); //get form GET/POST method
			var form_data = $(this).serialize(); //Encode form elements for submission
			
			$.ajax({
				url : post_url,
				type: request_method,
				data : form_data
			}).done(function(response){ //
				// $("#server-results").html(response);
				console.log(response);
				$('#email-register').modal('hide');
				Swal.fire({
				  position: 'center',
				  type: 'success',
				  title: 'Bạn đăng ký chỗ thành công',
				  showConfirmButton: false,
				  timer: 1500
				})
			});
		});
	});

</script>

</html>