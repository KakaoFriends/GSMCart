<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>코스 만들기</title>

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


	<div id="course_create">
		<div class="left">
			<div class="menu">
				<span>
					<a href="#" class="on">공원/쉼터</a>
				</span>
				<span>
					<a href="#">문화재</a>
				</span>
				<span>
					<a href="#">산/등산로</a>
				</span>
				<span>
					<a href="#">섬</a>
				</span>
				<span>
					<a href="#">전시/공연장</a>
				</span>
				<span>
					<a href="#">종교시설</a>
				</span>
				<span>
					<a href="#">해수욕장/해변</a>
				</span>
				<span>
					<a href="#">경관</a>
				</span>
				<span>
					<a href="#">교통</a>
				</span>
				<span>
					<a href="#">쇼핑</a>
				</span>
				<span>
					<a href="#">체험/체육시설</a>
				</span>
				<span>
					<a href="#">레저</a>
				</span>
			</div>
		</div>
		<div class="center">
			<div class="list js-flexAlign">
				<div class="box">
					<img src="./images/1.jpg" alt="image">
					<h4>거북공원</h4>
					<div class="type">공원/쉼터</div>
				</div>
				<div class="box">
					<img src="./images/2.jpg" alt="image">
					<h4>안산공원</h4>
					<div class="type">공원/쉼터</div>
					<a href="#" class="btn">코스 추가</a>
				</div>
				<div class="box">
					<img src="./images/3.jpg" alt="image">
					<h4>웅천해변공원</h4>
					<div class="type">공원/쉼터</div>
					<a href="#" class="btn">코스 추가</a>
				</div>
				<div class="box">
					<img src="./images/4.jpg" alt="image">
					<h4>자산공원</h4>
					<div class="type">공원/쉼터</div>
					<a href="#" class="btn">코스 추가</a>
				</div>
				<div class="box">
					<img src="./images/5.jpg" alt="image">
					<h4>선사유적공원</h4>
					<div class="type">공원/쉼터</div>
					<a href="#" class="btn">코스 추가</a>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="form">
				<div class="button">
					<input class="btn" type="submit" value="코스 저장">
					<input class="btn" type="reset" value='초기화'>
				</div>
				<div class="title">
					<input type="text" placeholder="제목">
				</div>
				<div class="content">
					<textarea placeholder="설명"></textarea>
				</div>
				<div class="list">
					<div class="top">
						<span>
							<i class="fa fa-map-marker"></i>
							추가한 관광지
						</span>
					</div>
					<div class="box">
						<span class="idx">1</span>
						<span class="title">거북공원</span>
						<a class="remove" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
