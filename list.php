<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>관광지 목록</title>

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
	<div id="list">
		<div class="wrap">
			<h2>관광지 목록</h2>
			<div class="left fl">
				<div class="type">
					<span class="on"><a href="#">공원/쉼터</a></span>
					<span><a href="#">문화재</a></span>
					<span><a href="#">산/등산로</a></span>
					<span><a href="#">섬</a></span>
					<span><a href="#">전시/공연장</a></span>
					<span><a href="#">종교시설</a></span>
					<span><a href="#">해수욕장/해변</a></span>
					<span><a href="#">경관</a></span>
					<span><a href="#">교통</a></span>
					<span><a href="#">쇼핑</a></span>
					<span><a href="#">체험/체육시설</a></span>
					<span><a href="#">레저</a></span>
				</div>
			</div>
			<div class="right fr">
				<div class="list">
					<span>
						<a href="#">
							<img src="./images/1.jpg" alt="image">
							<h4>거북공원</h4>
							<span class="star">
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star half"></i>
								<i class="text">4.5 ( 2 )</i>
							</span>
							<p class="js-overFlow">여수의 파고다공원이라고도 불린다. 아기자기한 빛노리야 축제가 열린 곳이다.</p>
						</a>
					</span>
					<span>
						<a href="#">
							<img src="./images/2.jpg" alt="image">
							<h4>안산공원</h4>
							<span class="star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="text">0 ( 0 )</i>
							</span>
							<p class="js-overFlow">최근 재개발을 시도하고있어 시민들에게 안산공원이 조속히 조성되도록 기대를 안기고있다.</p>
						</a>
					</span>
					<span>
						<a href="#">
							<img src="./images/3.jpg" alt="image">
							<h4>웅천해변공원</h4>
							<span class="star">
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star half"></i>
								<i class="fa fa-star"></i>
								<i class="text">3.8 ( 4 )</i>
							</span>
							<p class="js-overFlow">웅천 친수공원이라고 불리며 야영장도 있어 캠핑하는 사람들에게 엄청난 인기를 끌고 있는 곳이다.</p>
						</a>
					</span>
					<span>
						<a href="#">
							<img src="./images/4.jpg" alt="image">
							<h4>자산공원</h4>
							<span class="star">
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="text">5 ( 1 )</i>
							</span>
							<p class="js-overFlow">자산공원의 자산은 일출시간 산이 자색으로 변한다는 뜻이며 이순신 동상이 세워져있고 우리나라에서 제일 마지막에 단풍을 볼 수 있는 곳이다.</p>
						</a>
					</span>
					<span>
						<a href="#">
							<img src="./images/5.jpg" alt="image">
							<h4>선사유적공원</h4>
							<span class="star">
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star"></i>
								<i class="text">4.3 ( 4 )</i>
							</span class="star">
							<p class="js-overFlow">공원 전체를 경유하는 산책로를 중심으로 청동기 시대와 철기 시대의 주거지를 재현해 놓았으며, 선사마을, 야외 학습장, 민묘, 지석묘, 삼국시대 와요지, 주거생활 전시 등으로 구성 되어 있다.</p>
						</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
