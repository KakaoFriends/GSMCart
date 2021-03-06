<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>관광지 보기</title>

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

	
	<div id="view">
		<div class="wrap">
			<h2>관광지 보기</h2>
			<div class="btn-box">
				<a href="#" class="btn">목록으로</a>
			</div>
			<div class="intro">
				<div class="img">
					<img src="./images/3.jpg" alt="image">
				</div>
				<div class="content">
					<h3>웅천해변공원</h3>
					<span class="type">공원/쉼터</span>
					<div class="score">
						<span class="header">관광지 평점</span>
						<span class="star">
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star half"></i>
						</span>
						<span class="num">3.8 ( 4 )</span>
					</div>
					<p>웅천 친수공원이라고 불리며 야영장도 있어 캠핑하는 사람들에게 엄청난 인기를 끌고 있는 곳이다.</p>
				</div>
			</div>
		</div>
		<div class="comment">
			<div class="wrap">
				<div class="form">
					<table>
						<tr>
							<td>
								<label for="">제목</label>
							</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>
								<label for="">평점</label>
							</td>
							<td class="js-score">
								<input type="hidden" class="js-getScore">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</td>
						</tr>
						<tr>
							<td>
								<label for="">내용</label>
							</td>
							<td>
								<textarea></textarea>
							</td>
						</tr>
					</table>
					<input type="submit" value="전 송">
				</div>
				<div class="list">
					<div class="box">
						<h4>정말 좋아요</h4>
						<div class="star">
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>가족과 함께 나들이로 가기 좋은곳 이에요</p>
						<dl>
							<dt>작성자 : </dt>
							<dd>홍길동</dd>
							<dt>작성일 : </dt>
							<dd>2018-06-01</dd>
						</dl>
						<div class="btn">
							<a href="#" class="modi">수정</a>
							<a href="#" class="del">삭제</a>
						</div>
					</div>
					<div class="box">
						<h4>즐거웠어요</h4>
						<div class="star">
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
						</div>
						<p>바다덕에 시원하고 풍경도 좋았어요</p>
						<dl>
							<dt>작성자 : </dt>
							<dd>김철수</dd>
							<dt>작성일 : </dt>
							<dd>2018-05-31</dd>
						</dl>
					</div>
					<div class="box">
						<h4>그저 그랬어요</h4>
						<div class="star">
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>놀만한 곳은 없었어요</p>
						<dl>
							<dt>작성자 : </dt>
							<dd>박철수</dd>
							<dt>작성일 : </dt>
							<dd>2018-05-28</dd>
						</dl>
					</div>
					<div class="box">
						<h4>안녕하세요</h4>
						<div class="star">
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star on"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>안녕하세요</p>
						<dl>
							<dt>작성자 : </dt>
							<dd>유저</dd>
							<dt>작성일 : </dt>
							<dd>2018-05-26</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
