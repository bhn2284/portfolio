<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='Title' content='oryany mypage'>
	<meta name='Subject' content='oryany mypage'>
	<meta name='Keywords' content='oryany, 오야니, 모바일, 리디자인, 적응형'>
	<meta name='Author' content='hanna'>
	<meta name='Publisher' content='hanna'>
	<meta name='Description' content='오야니 모바일 리디자인, 적응형'>
	<meta name='Author-Date' content='2021-07-02'>
    <title>mypage</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php
        session_start();//보안떄문에 시작할때 사용
        if(isset($_SESSION["userid"])){
            $userid=$_SESSION["userid"];
        }else{
            $userid="";
        }
        if(isset($_SESSION["username"])){
            $username=$_SESSION["username"];
        }else{
            $username="";
        }
    ?>
    <header>
        <div id="topMenu">
            <div class="container">
                <div class="back-btn">
                    <a href="javascript:history.back()">
                        <span class="ir_pm">뒤로가기</span>
                        <img src="img/back.png" alt="뒤로가기">
                    </a>
                </div>
                <h1>마이페이지</h1>
                <div class="right">
                    <a href="#" class="search-btn">
                        <span class="ir_pm">검색</span>
                        <img src="img/search.png" alt="search">
                    </a>
                    <a href="#" class="basket-btn">
                        <span class="ir_pm">장바구니</span>
                        <img src="img/shopping-bag.png" alt="shopping-bag">
                    </a>
                </div>
            </div>
        </div>
        <div id="bottomMenu">
            <ul class="menu">
                <li><a href="index.html" class="home"><img src="img/home.png" alt="홈"><span>홈</span></a></li>
                <li><a href="#" class="cate"><img src="img/cate.png" alt="카테고리"><span>카테고리</span></a></li>
                <li><a href="#" class="basket"><img src="img/basket.png" alt="장바구니"><span>장바구니</span></a></li>
                <li><a href="#" class="favorite"><img src="img/favorite.png" alt="관심상품"><span>관심상품</span></a></li>
                <li><a href="http://unbirthday.dothome.co.kr/oryany/" class="mypage on"><img src="img/mypage.png" alt="마이페이지"><span>마이페이지</span></a></li>
            </ul>
        </div>
    </header>
    <main id="main" class="main">
        <div class="container">
            <section id="join-wrap">
                <h2><span>로그인</span>하고 즐거운 쇼핑하세요 :)</h2>
                <ul>
                <?php
                    if(!$userid){
                ?>
                    <li><a href="member_form.php">회원가입</a></li>
                    <li><a href="login_form.php">로그인</a></li>
                <?php
                    }else{
                        $logged=$username."님 환영합니다";
                    
                ?>
                    <li><?=$logged?></li>
                    <li> | </li>
                    <li><a href="logout.php">로그아웃</a></li>
                <?php
                    }
                ?>
                </ul>
            </section>
        </div>
    </main>
</body>
</html>