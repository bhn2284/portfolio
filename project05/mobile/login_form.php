<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='Title' content='oryany mypage login'>
	<meta name='Subject' content='oryany mypage login'>
	<meta name='Keywords' content='oryany, 오야니, 모바일, 리디자인, 적응형'>
	<meta name='Author' content='hanna'>
	<meta name='Publisher' content='hanna'>
	<meta name='Description' content='오야니 모바일 리디자인, 적응형'>
	<meta name='Author-Date' content='2021-07-02'>
	<title>로그인</title>
	<script type="text/javascript" src="./js/login.js"></script>
</head>
<body>
	<section>
		<div id="main_content">
			<div id="login_box">
				<div id="login_title">
					<span>로그인</span>
				</div>
				<div id="login_form">
					<form action="login.php" method="post" name="login_form">
						<ul>
							<li><input type="text" name="id" placeholder="아이디" /></li>
							<li><input type="password" name="pass" placeholder="비밀번호" id="pass" /></li>
						</ul>
						<div id="login_btn">
							<a href="#"><img src="img/login.png" alt="login" onclick="check_input()"/></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>