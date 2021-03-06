<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>코스 보기</title>

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
	
	<div id="course_view">
		<div class="wrap">
			<h2>코스 보기</h2>
			<div class="btn-box">
				<a href="#" class="btn">목록으로</a>
				<a href="#" class="btn"><i class="fa fa-heart"></i>좋아요</a>
				<!-- <a href="#" class="btn"><i class="fa fa-heart on"></i>좋아요</a> -->
			</div>
			<div class="header">
				<div class="title">
					<h3>여수 관광 코스 1</h3>
					<dl>
						<i class="fa fa-calendar"></i>
						<dt>작성일</dt>
						<dd>2018-06-01</dd>
						<i class="fa fa-user"></i>
						<dt>작성자</dt>
						<dd>홍길동</dd>
						<i class="fa fa-heart"></i>
						<dt>좋아요</dt>
						<dd>146</dd>
					</dl>
				</div>
				<div class="course">
					<i class="fa fa-map"></i>
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
			</div>
			<div class="list">
				<div class="box">
					<div class="img">
						<img src="./images/61.jpg" alt="image">
					</div>
					<div class="con">
						<h4>오동도</h4>
						<span class="type">경관</span>
						<dl>
							<i class="fa fa-map-marker"></i>
							<dt>주소</dt>
							<dd>전라남도 여수시 수정동 산1-11</dd>
							<i class="fa fa-info"></i>
							<dt>설명</dt>
							<dd class="js-overFlow" data-length="20">이 길은 한국의 아름다운 길 100선에 선정된 바 있을 만큼 운치가 있으며, 한려해상국립공원에 속해 있습니다.</dd>
						</dl>
					</div>
					<span class="idx">1</span>
					<span class="distance">2.6 km</span>
				</div>
				<div class="box">
					<div class="img">
						<img src="./images/6.jpg" alt="image">
					</div>
					<div class="con">
						<h4>고소대</h4>
						<span class="type">문화재</span>
						<dl>
							<i class="fa fa-map-marker"></i>
							<dt>주소</dt>
							<dd>전라남도 여수시 고소3길 13 사당</dd>
							<i class="fa fa-info"></i>
							<dt>설명</dt>
							<dd class="js-overFlow" data-length="20">이순신 장군이 수군훈련을 독려하고, 임진왜란 발발 후 작전 계획을 세우는 한편 군령을 내린 곳입니다.</dd>
						</dl>
					</div>
					<span class="idx">2</span>
					<span class="distance">1 km</span>
				</div>
				<div class="box">
					<div class="img">
						<img src="./images/33.jpg" alt="image">
					</div>
					<div class="con">
						<h4>하멜 전시관</h4>
						<span class="type">전시/공연장</span>
						<dl>
							<i class="fa fa-map-marker"></i>
							<dt>주소</dt>
							<dd>전라남도 여수시 동문동</dd>
							<i class="fa fa-info"></i>
							<dt>설명</dt>
							<dd class="js-overFlow" data-length="20">'하멜 표류기'로 잘 알려진 네덜란드 하멜 일행의 제주도 표착을 시작으로 여수에서 3년 6개월 간의 삶과 흔적을 모아 그들이 떠난 역사적인 장소에 하멜 전시관을 건립하였습니다.</dd>
						</dl>
					</div>
					<span class="idx">3</span>
					<span class="distance">0.3 km</span>
				</div>
				<div class="box">
					<div class="img">
						<img src="./images/54.jpg" alt="image">
					</div>
					<div class="con">
						<h4>거북선대교</h4>
						<span class="type">경관</span>
						<dl>
							<i class="fa fa-map-marker"></i>
							<dt>주소</dt>
							<dd>전라남도 여수시 종화동</dd>
							<i class="fa fa-info"></i>
							<dt>설명</dt>
							<dd class="js-overFlow" data-length="20">2012 여수세계박람회 이전에 완공된 거북선대교는 화려한 경관 조명을 갖춘 명품 연륙교로, 여수 최고의 야경을 선사하는 곳 중 하나입니다.</dd>
						</dl>
					</div>
					<span class="idx">4</span>
					<span class="distance">0.8 km</span>
				</div>
				<div class="box">
					<div class="img">
						<img src="./images/78.jpg" alt="image">
					</div>
					<div class="con">
						<h4>해상케이블카</h4>
						<span class="type">레저</span>
						<dl>
							<i class="fa fa-map-marker"></i>
							<dt>주소</dt>
							<dd>전라남도 여수시 돌산읍 돌산로 3600-1</dd>
							<i class="fa fa-info"></i>
							<dt>설명</dt>
							<dd class="js-overFlow" data-length="20">해상케이블카는 바다위를 지나 섬과 육지를 연결하는,국내 최초의 해상케이블카 입니다.</dd>
						</dl>
					</div>
					<span class="idx">5</span>
				</div>

				<div class="bar"></div>
			</div>
		</div>
	</div>

</body>
</html>
