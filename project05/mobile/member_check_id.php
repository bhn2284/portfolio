<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='Title' content='oryany mypage id check'>
	<meta name='Subject' content='oryany mypage id check'>
	<meta name='Keywords' content='oryany, 오야니, 모바일, 리디자인, 적응형'>
	<meta name='Author' content='hanna'>
	<meta name='Publisher' content='hanna'>
	<meta name='Description' content='오야니 모바일 리디자인, 적응형'>
	<meta name='Author-Date' content='2021-07-02'>
	<title>php입문</title>
	<link rel="stylesheet" href="css/member_check.css"/>
</head>
<body>
	<h3>아이디 중복체크</h3>
	<p>
		<?php
			$id=$_GET["id"];
			if(!$id){//아이디가 없으면
				echo("<li>아이디를 입력해 주세요</li>");
			}else{
				$con=mysqli_connect('localhost','unbirthday','baekgkssk0106!','unbirthday');
				
				$sql="select * from members where id='$id'";
				//members 테이블에 동일한 아이디가 있는지 검사
				
				$result=mysqli_query($con, $sql);
				
				$num_record= mysqli_num_rows($result);
				
				if($num_record){//만약에 $num_record가 값을 가지며 DB에 동일한 아이디가 존재한다면
					echo "<li>".$id."아이디는 중복됩니다.</li>";
					echo "<li>다른 아이디를 사용해 주세요</li>";
					
				}else{
					echo "<li>".$id."사용가능한 아이디입니다.</li>";
				}
				mysqli_close($con);
			}
		?>
	</p>
</body>
</html>