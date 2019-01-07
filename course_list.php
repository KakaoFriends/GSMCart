<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>코스 목록</title>

	<!-- font awesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.css">

	<!-- style -->
	<link rel="stylesheet" href="./css/style.css">

	<!-- jquery -->
	<script src="./js/jquery-3.2.1.min.js"></script>

	<!-- script -->
	<script src="./js/script.js"></script>
</head>
<body>
	<?php
	  include_once("./include/header.php");
	?>

	
	<div id="course_list">
		<div class="wrap">
			<h2>코스 목록</h2>
			<div class="btn-box">
				<a href="#" class="btn">최신순</a>
				<a href="#" class="btn on">인기순</a>
			</div>
			<div class="list">
				<div class="box">
					<span class="img">
						<a href="#">
							<img src="./images/61.jpg" alt="image">
						</a>
					</span>
					<span class="con">
						<div class="container">
							<h4><a href="#">여수 관광 코스 1</a></h4>
							<div class="course">
								<span>오동도</span>
								<i class="fa fa-angle-right"></i>
								<span>고소대</span>
								<i class="fa fa-angle-right"></i>
								<span>하멜 전시관</span>
								<i class="fa fa-angle-right"></i>
								<span>거북선대교</span>
								<i class="fa fa-angle-right"></i>
								<span>해상케이블카</span>
							</div>
							<p>여수에 있는 볼거리와 체험을 즐길수 있는 코스</p>
							<div class="like">
								<i class="fa fa-heart"></i>
								146
							</div>
							<span class="date">2018-06-01</span>
						</div>
					</span>
					<div class="btn">
						<a href="#" class="modi">수정</a>
						<a href="#" class="del">삭제</a>
					</div>
				</div>
				<div class="box">
					<span class="img">
						<a href="#">
							<img src="./images/61.jpg" alt="image">
						</a>
					</span>
					<span class="con">
						<div class="container">
							<h4><a href="#">여수 관광 코스 2</a></h4>
							<div class="course">
								<span>오동도</span>
								<i class="fa fa-angle-right"></i>
								<span>고소대</span>
								<i class="fa fa-angle-right"></i>
								<span>하멜 전시관</span>
								<i class="fa fa-angle-right"></i>
								<span>거북선대교</span>
								<i class="fa fa-angle-right"></i>
								<span>해상케이블카</span>
							</div>
							<p>여수에 있는 볼거리와 체험을 즐길수 있는 코스</p>
							<div class="like">
								<i class="fa fa-heart"></i>
								94
							</div>
							<span class="date">2018-06-02</span>
						</div>
					</span>
				</div>
				<div class="box">
					<span class="img">
						<a href="#">
							<img src="./images/61.jpg" alt="image">
						</a>
					</span>
					<span class="con">
						<div class="container">
							<h4><a href="#">여수 관광 코스 3</a></h4>
							<div class="course">
								<span>오동도</span>
								<i class="fa fa-angle-right"></i>
								<span>고소대</span>
								<i class="fa fa-angle-right"></i>
								<span>하멜 전시관</span>
								<i class="fa fa-angle-right"></i>
								<span>거북선대교</span>
								<i class="fa fa-angle-right"></i>
								<span>해상케이블카</span>
							</div>
							<p>여수에 있는 볼거리와 체험을 즐길수 있는 코스</p>
							<div class="like">
								<i class="fa fa-heart"></i>
								51
							</div>
							<span class="date">2018-05-31</span>
						</div>
					</span>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
