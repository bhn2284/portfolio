<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='Title' content='oryany mypage join'>
	<meta name='Subject' content='oryany mypage join'>
	<meta name='Keywords' content='oryany, 오야니, 모바일, 리디자인, 적응형'>
	<meta name='Author' content='hanna'>
	<meta name='Publisher' content='hanna'>
	<meta name='Description' content='오야니 모바일 리디자인, 적응형'>
	<meta name='Author-Date' content='2021-07-02'>
	<title>회원가입</title>
	<script type="text/javascript">
		function check_input(){
			
			if(!document.member_form.id.value){
				alert('아이디를 입력해주세요');
				document.member_form.id.focus();
				return;
			}
			if(!document.member_form.pass.value){
				alert('비밀번호를 입력해주세요');
				document.member_form.pass.focus();
				return;
			}
			if(!document.member_form.pass_confirm.value){
				alert('비밀번호확인을 해주세요');
				document.member_form.pass_confirm.focus();
				return;
			}
			if(!document.member_form.name.value){
				alert('이름를 입력해주세요');
				document.member_form.name.focus();
				return;
			}
			if(!document.member_form.email1.value){
				alert('이메일을 입력해주세요');
				document.member_form.email1.focus();
				return;
			}
			if(!document.member_form.email2.value){
				alert('이메일을 입력해주세요');
				document.member_form.email2.focus();
				return;
			}
			if(document.member_form.pass.value != document.member_form.pass_confirm.value){
				alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요");
				document.member_form.pass.focus();
				document.member_form.pass.select();
				return;
			}
			
			document.member_form.submit();
		}
		function check_id(){
			window.open("member_check_id.php?id=" + document.member_form.id.value, "IDcheck", "left=700, top=300, width=350, height=120, scrollbars=no, resizable=yes");
		}
		function reset_form(){
			document.member_form.id.value='';
			document.member_form.pass.value='';
			document.member_form.pass_confirm.value='';
			document.member_form.name.value='';
			document.member_form.email1.value='';
			document.member_form.email2.value='';
			document.member_form.id.focus();
		}
	</script>
</head>
<body>
	<section>
		<div id="main_content">
			<div id="join_box">
				<form action="member_insert.php" method="post" name="member_form">
					<h2>회원가입</h2>
					<div class="form id">
						<div class="col1">아이디</div>
						<div class="col2"><input type="text" name="id" /></div>
						<div class="col3"><a href="#"><img src="img/check_id.gif" onclick="check_id()" alt="중복확인"/></a></div>
					</div>
					<div class="clear"></div>
					<div class="form pass">
						<div class="col1">비밀번호</div>
						<div class="col2"><input type="password" name="pass"/></div>
					</div>
					<div class="clear"></div>
					<div class="form pass1">
						<div class="col1">비밀번호확인</div>
						<div class="col2"><input type="password" name="pass_confirm"/></div>
					</div>
					<div class="clear"></div>
					<div class="form name">
						<div class="col1">이름</div>
						<div class="col2"><input type="text" name="name"/></div>
					</div>
					<div class="clear"></div>
					<div class="form email">
						<div class="col1">이메일</div>
						<div class="col2"><input type="text" name="email1"/>@ <input type="text" name="email2"/></div>
					</div>
					<div class="clear"></div>
					<div class="bottom_line"></div>
					<div class="buttons">
						<img src="./img/button_save.gif" alt="저장하기" onclick="check_input()"/>
						<img src="./img/button_reset.gif" alt="취소하기" onclick="reset_form()"/>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
</html>