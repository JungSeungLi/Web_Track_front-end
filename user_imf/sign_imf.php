<?php
    session_start();
?>

<html>

<head>
    <title>서울디지텍고등학교</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../css/topmenu_layout.css">
    <link type="text/css" rel="stylesheet" href="../css/dropdown.css">
    <link type="text/css" rel="stylesheet" href="../css/section.css">
    <link type="text/css" rel="stylesheet" href="../css/slider.css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="../js/dropdwon.js">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js">
    </script>
    <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
    <script src="../js/sign_up_check.js"></script>
    <link href="../css/jquery.bxslider.css" rel="stylesheet" />
    <link href="../css/footer.css" rel="stylesheet" />

</head>

<body>
    <header>
        <div id="header">


            <div id="logo">
                <a href="../index.php"><img src="../img/menu_logo_alpensia.png"></a>
            </div>

            <div id="sub_menu">
                <ul>
                    <?php
                        if(!(isset($_SESSION['email']))){
                    ?>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#open">LOGIN</a></li>
                        <li><a href="./user_imf/sign_imf.php">JOIN US</a></li>
                    <?php
                        }
                        else{
                    ?>
                        <li><?php echo $_SESSION['name']; ?> 님 환영합니다.</li>
                        <li><a href="./user_imf/logout.php">로그아웃</a></li>
                    <?php 
                        }
                    ?>
                </ul>
            </div>

            <div id="menusize">
                <div id="main_menu" class="zeta-menu-bar">
                    <ul class="zeta-menu">
                        <li>
                            <a href="./school_imf/Lesson_ymbol.html" class="topnav">학교소개</a>
                            <ul class="subnav">
                                <li><a href="../school_imf/Lesson_ymbol.php">학교소개</a></li>
                                <li><a href="../school_imf/educational_objectives.php">교육목표</a></li>
                                <li><a href="../school_imf/facilities.php">시설현황</a></li>
                                <li><a href="../school_imf/directions.php">학교길안내</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="topnav">알림마당</a>
                            <ul class="subnav">
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">일정 달력</a></li>
                                <li><a href="#">교내행사영싱</a></li>
                                <li><a href="#">교내행사사진</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="topnav">입학안내</a>
                            <ul class="subnav">
                                <li><a href="#">입학안내</a></li>
                                <li><a href="#">VR 컨텐츠</a></li>
                                <li><a href="#">IOT 컨텐츠</a></li>
                                <li><a href="#">공간정보 컨텐츠</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="topnav">학생마당</a>
                            <ul class="subnav">
                                <li><a href="#">동아리</a></li>
                                <li><a href="#">학생회 소개</a></li>
                                <li><a href="#">학생회게시판</a></li>
                                <li><a href="#">학생사진작품</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="topnav">열린마당</a>
                            <ul class="subnav">
                                <li><a href="#">취업게시판</a></li>
                                <li><a href="#">진학게시판</a></li>
                                <li><a href="#">자유게시판</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="topnav">행정공개</a>
                            <ul class="subnav">
                                <li><a href="#">교사게시판</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div id="section">
            <div id="title_color">
            </div>

            <div id="lesson_center">

                <div class="self_imf">
                    제 1 장 총 칙 <br> 제 2 장 서비스 이용계약<br> 제 3 장 계약당사자의 의무<br> 제 4 장 서비스 이용<br> 제 5 장 계약해지 및 이용제한<br> 제 6 장 손해배상 등<br> 서울디지텍고등학교 이용약관<br> [ 제 1 장 총 칙 ]<br> 제 1 조 (목적)<br> 이 약관은 상관행 전기통신사업법 및 동법 시행령에 의하여 서울디지텍고등학교(이하 "학교"라 한다)가 제공하는 모든 서비스(이하 "서비스"라 한다)의 이용조건 및 절차에 관한 사항을 규정함을 목적으로 합니다.<br><br> 제 2 조 (약관의 공지 및 준용)<br> 1) 이 약관의 내용은 서비스 화면에 게시하거나 기타의 방법으로 회원에게 공지함으로써 효력을 발생합니다.<br> 2) 학교는 이 약관을 임의로 변경할 수 있으며, 변경된 약관은 제1항과 같은 방법으로 공지함으로써 효력을 발생합니다.<br><br> 제 3 조 (약관 외 준칙)<br><br> 이 약관에 명시되지 않은 사항은 상관행 전기통신기본법,전기통신사업법,정보통신망이용촉진등에 관한 법률 및 기타 관련법령의 규정에 의합니다.<br><br>
                </div>

                <div class="sign_up_form">
                    <center>
                        <form action="sing_up_data.php" class="signup_page_one" onsubmit="return sign_data_check()" name="sign_user" method="post">
                            <input type="text" placeholder="Email" name="user_id" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <input type="password" placeholder="Password_Check" name="password_check" required>
                            <input type="text" placeholder="Name" name="stu_name" required>
                            <select name="class1" class="noimfo">
                                <option value="">학년</option>
                                <?php
                                for($cl1=1; $cl1<=3 ; $cl1++)
                                echo "<option value='$cl1'>$cl1</option>";
                                ?>
                            </select>
                            
                            <select name="class2" class="noimfo">
                                <option value="">반</option>
                                <?php
                                for($cl2=1; $cl2<=6 ; $cl2++)
                                echo "<option value='$cl2'>$cl2</option>";
                                ?>
                            </select>
                            
                            <select name="class3" class="noimfo">
                                <option value="">번호</option>
                                <?php
                                for($cl3=1; $cl3<=30 ; $cl3++)
                                echo "<option value='$cl3'>$cl3</option>";
                                ?>
                            </select>
                            <select name="major">
                                <option value="">전공</option>
                                <option value="IOT">IOT 컨텐츠</option>
                                <option value="VR">VR 컨턴츠</option>
                                <option value="IMFO">공간정보 컨텐츠</option>
                            </select>
                            <input type="submit" value="가입하기">
                        </form>
                    </center>
                </div>

            </div>

        </div>
    </section>
    <footer>
        <div id="footer">
            <div class="footer_imf">
                <div class="left_img">
                    <img src="../img/copyright_logo.png">
                </div>
                <div class="right_content">
                    <div class="sub_content">
                        <ul>
                            <li style="font-size: 15px;">HOME</li>
                            <li style="font-size: 15px;">개인정보처리방침</li>
                            <li style="font-size: 15px;">저작권보호정책</li>
                            <li style="font-size: 15px;">이용약관</li>
                            <li style="font-size: 15px;">이메일주소무단수집거부</li>
                        </ul>
                    </div>

                    <div class="sub_content_center">
                        <ul>
                            <li>서울특별시 용산구 회나무로 12길 27 서울디지텍고등학교 (우) 140-857</li>
                            <li>TEL : 02 - 798 - 3641 ~ 3 FAX : 02 - 794 - 0822</li>
                        </ul>

                        <div class="copy_right_imf">
                            <span>copyright (c) 2007 서울디지텍고등학교. All rights reserved.</span>
                        </div>
                        <hr>

                    </div>



                </div>
            </div>

        </div>
    </footer>

</body>

</html>