<?php header("Content-type:text/html; charset=utf-8");?>
<?php
	$id=$_POST["id"];
	$pass=$_POST["pass"];
	
	$con=mysqli_connect('localhost','unbirthday','baekgkssk0106!','unbirthday');
				
	$sql="select * from members where id='$id'";
	//members 테이블에 동일한 아이디가 있는지 검사
				
	$result=mysqli_query($con, $sql);
	//아이디 검색- 사용자가 입력한 아이디를members테이블에서 검색하고 그 결과를 $result에 저장
	
	$num_match=mysqli_num_rows($result);
	
	if(!$num_match){//아이디가 존재하지 않고 값을 가지면 입력한 아이디가 members테이블에 존재하지 않는다면
		echo("<script>window.alert('등록되지 않은 아이디입니다'); history.go(-1);</script>");
	}else{
		$row=mysqli_fetch_array($result);//해당 레코드를 가지고 와서
		$db_pass=$row["pass"];//db에서 비밀번호 가져오기
		
		mysqli_close($con);
		if($pass != $db_pass){
			echo("<script>window.alert('비밀번호가 틀렸습니다.'); history.go(-1);</script>");
		}else{
			session_start();
			//웹페이지에서 로그인 상태인지 아닌지를 판단하는 기준이 되므로 접속한 웹페이지에서 사용자가 로그인 상태인지를 알려면 $_SESSION["userid"]값을 조사
			$_SESSION["userid"]=$row['id'];
			$_SESSION["username"]=$row['name'];
			
			echo("<script>location.href='mypage.php'</script>");
		}
		
	}
?>











