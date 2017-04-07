<?php
    session_start();
?>

<!DOCTYPE html>

    <html>

    <head>
        <title>서울디지텍고등학교</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link type="text/css" rel="stylesheet" href="css/topmenu_layout.css">
        <link type="text/css" rel="stylesheet" href="css/dropdown.css">
        <link type="text/css" rel="stylesheet" href="css/section.css">
        <link type="text/css" rel="stylesheet" href="css/slider.css">
        <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/dropdwon.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle2.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js">
        </script>
        <script type="text/javascript" src="./js/ready.js"></script>
        <script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="./js/jquery.bxslider.js"></script>
        <link href="./css/jquery.bxslider.css" rel="stylesheet" />
        <link href="./css/footer.css" rel="stylesheet" />
        <link href="./css/modal.css" rel="stylesheet" />

    </head>

    <body>
        <header>
            <div id="header">


                <div id="logo">
                    <a href="index.php"><img src="img/menu_logo_alpensia.png" alt="Logo"></a>
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
                                <li>
                                    <?php echo $_SESSION['name']; ?> 님 환영합니다.</li>
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
                                    <li><a href="./school_imf/Lesson_ymbol.php">학교소개</a></li>
                                    <li><a href="./school_imf/educational_objectives.php">교육목표</a></li>
                                    <li><a href="./school_imf/facilities.php">시설현황</a></li>
                                    <li><a href="./school_imf/directions.php">학교길안내</a></li>
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
            <div id="section">
                <div>
                    <div id="title_color">
                    </div>

                    <div class="cycle-slideshow" data-cycle-fx=scrollHorz data-cycle-timeout=6000>
                        <div class="cycle-pager"></div>
                        <img src="img/1.png" alt="img1">
                        <img src="img/2.png" alt="img2">
                        <img src="img/3.png" alt="img3">
                        <img src="img/4.png" alt="img4">
                        <img src="img/5.png" alt="img5">
                        <img src="img/6.png" alt="img6">
                    </div>
                </div>
                <div id="middle">
                    <div class="post">
                        <div class="notice"><span><strong>공지사항</strong> [공지]윈도우 10일때 로그인 페이지 오류 해결 방법</span></div>
                        <div class="subnoteic"><span>1:20 +MORE</span></div>
                        <img src="img/button.png" alt="button">
                    </div>

                    <div class="slide_img">
                        <div class="main_text"><span><span style="color:#73EDFF; margin-right:10px;">|</span>교내사진<span style="color:#73EDFF; margin-left:10px;">|</span></span>
                        </div>
                        <div id="s_banner_wrap">
                            <ul class="bxslider_03">
                                <li class="banner_a1">
                                    <img src="img/package_img01.jpg" class="botm" alt="banner1">
                                    <span class="sub_top">불우이웃돕기성금 전달</span><br>
                                    <span class="sub_top1">2016년 05월 12일</span>
                                </li>
                                <li class="banner_a2">
                                    <img src="img/package_img02.png" class="botm" alt="banner2">
                                    <span class="sub_top">IP Meister 컨설팅</span><br>
                                    <span class="sub_top1">2016년 08월 30일</span>
                                </li>
                                <li class="banner_a3">
                                    <img src="img/package_img03.jpg" class="botm" alt="banner3">
                                    <span class="sub_top">VR 컨텐츠 부스 운영</span><br>
                                    <span class="sub_top1">2016년 09월 27일</span>
                                </li>
                                <li class="banner_a4">
                                    <img src="img/package_img04.png" class="botm" alt="banner4">
                                    <span class="sub_top">학생 자치법정 본선전</span><br>
                                    <span class="sub_top1">2016년 11월 29일</span>
                                </li>
                                <li class="banner_a5">
                                    <img src="img/package_img05.png" class="botm" alt="banner5">
                                    <span class="sub_top">정기음악회</span><br>
                                    <span class="sub_top1">2016년 12월 09일</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="sub_imfor">
                        <div class="menu_pix">
                            <ul class=sub_imfor_center>
                                <li class="femd_otd">
                                    <p>교내일정</p>
                                    <a href="#" class="btn">
                                        <img src="img/link_img01.png" onmouseover='this.src="img/link_img01_over.png"' onmouseout='this.src="img/link_img01.png"' alt="school">
                                    </a>
                                    <br><br>
                                    <span>SCHOOL SCHEDULE</span>
                                </li>

                                <li class="femd_otd">
                                    <p>학교연혁</p>
                                    <a href="#" class="btn">
                                        <img src="img/link_img02.png" onmouseover='this.src="img/link_img02_over.png"' onmouseout='this.src="img/link_img02.png"' alt="school2">
                                    </a>
                                    <br><br>
                                    <span>SCHOOL HISTORY</span>
                                </li>

                                <li class="femd_otd">
                                    <p>행정정보</p>
                                    <a href="#" class="btn">
                                        <img src="img/link_img03.png" onmouseover='this.src="img/link_img03_over.png"' onmouseout='this.src="img/link_img03.png"' alt="school3">
                                    </a>
                                    <br><br>
                                    <span>ADMINISTRATION</span>
                                </li>

                                <li class="femd_otd">
                                    <p>대중교통</p>
                                    <a href="#" class="btn">
                                        <img src="img/link_img04.png" onmouseover='this.src="img/link_img04_over.png"' onmouseout='this.src="img/link_img04.png"' alt="school4">
                                    </a>
                                    <br><br>
                                    <span>TRANSFORMATION</span>
                                </li>

                                <li class="femd_otd">
                                    <p>교내시설</p>
                                    <a href="#" class="btn">
                                        <img src="img/link_img05.png" onmouseover='this.src="img/link_img05_over.png"' onmouseout='this.src="img/link_img05.png"' alt="school5">
                                    </a>
                                    <br><br>
                                    <span>SCHOOL FACILITIES</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div id="sub_imfor2">
                        <div class="menu_pix2">
                            <ul class=sub_imfor_center2>
                                <li class="femd_otd">
                                    <span><span style="color:#73EDFF">|</span>기술발표</span><br><br>
                                    <a href="#" class="btn">
                                        <img src="img/con_01_img01.jpg" onmouseover='this.src="img/con_01_img01_over.png"' onmouseout='this.src="img/con_01_img01.jpg"' alt="tecol">
                                    </a>
                                    <br><br>
                                </li>

                                <li class="femd_otd">
                                    <span><span style="color:#73EDFF">|</span>교내대회</span><br><br>
                                    <a href="#" class="btn">
                                        <img src="img/con_01_img02.jpg" onmouseover='this.src="img/con_01_img02_over.png"' onmouseout='this.src="img/con_01_img02.jpg"' alt="good">
                                    </a>
                                    <br><br>
                                </li>

                                <li class="femd_otd">
                                    <span><span style="color:#73EDFF">|</span>디지텍매거진</span><br><br>
                                    <a href="#" class="btn">
                                        <img src="img/con_01_img03.jpg" onmouseover='this.src="img/con_01_img03_over.png"' onmouseout='this.src="img/con_01_img03.jpg"' alt="mag">
                                    </a>
                                    <br><br>
                                </li>

                                <li class="femd_otd">
                                    <span><span style="color:#73EDFF">|</span>TODAY'S WEATHER</span><br><br>
                                    <a href="#" class="btn">
                                        <img src="img/con_01_img04.png" alt="Day">
                                    </a>
                                    <br><br>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="advertisement">
                        <div class="asdv_cent">
                            <span><span style="color:#73EDFF; margin-right:10px;">|</span>학생 자치 동아리<span style="color:#73EDFF; margin-left:10px;">|</span></span><br><br>
                            <a href="#"><img src="img/main_travel01.png" alt="cuy"></a>
                        </div>
                    </div>

                    <div id="last_imfor">
                        <div class="first_layout">
                            <div class="left_imfo">
                                <div class="left_imf">
                                    <div class="left_big_imf">
                                        <div class="textal">
                                            <span class="font-t">고객센터</span>
                                            <span style="color:#A6A6A6;  font-weight: bold;">| 주중:8:30 ~20:00 주말/공휴일:9:00~18:00</span>
                                            <br>
                                            <span class="font-t">입학 정보 및 문의 전화</span>
                                            <span style="font-size:25px;">02)798-3641</span>
                                        </div>
                                        <div class="textal">
                                            <img src="img/custom_img01.png" alt="img1">
                                            <br/>
                                            <img src="img/custom_img02.png" style="margin-left:440px;" alt="img2">
                                        </div>
                                    </div>

                                    <div class="sub_menu2">
                                        <div class="left_sub_menu2">
                                            <span class="font-t">신입생 진로 상담</span><br>
                                            <span class="font-t2">02)794-0822</span>
                                        </div>
                                        <div class="left_sub2_menu2">
                                            <span class="font-t">회원서비스 상담</span><br>
                                            <span class="font-t2">033)339-0010</span>
                                        </div>
                                    </div>

                                    <div class="sub_menu3">
                                        <div class="left_sub_menu2">
                                            <span class="font-t">동아리 활동 문의</span><br>
                                            <span class="font-t2">033)339-0010</span>
                                        </div>
                                        <div class="left_sub2_menu2">
                                            <span class="font-t">창체 활동 문의</span><br>
                                            <span class="font-t2">033)339-0010</span><br>
                                            <div class="left_suB2_img">
                                                <img src="img/custom_img02.png" alt="question">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="right_menu">
                                    <div class="imgleft">
                                        <a href="http://sen.go.kr" class="btn">
                                            <img src="img/main_contact_01_img04.jpg" onmouseover='this.src="img/main_contact_01_img04_over.png"' onmouseout='this.src="img/main_contact_01_img04.jpg"' alt="wod">
                                        </a>
                                    </div>

                                    <div class="imgleft2">
                                        <a href="http://blog.naver.com/seouledu2012"><img src="img/main_contact_01_sns01.png" style="margin-bottom:67px;"   alt="oloda"></a>
                                        <a href="https://www.facebook.com/seouleducation"><img src="img/main_contact_01_sns02.png" alt="oloda"></a>
                                        <a href="#"><img src="img/main_contact_01_sns03.png" style="margin-top:65px;" alt="wod2"></a>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <footer>
            <div id="footer">
                <div class="footer_imf">
                    <div class="left_img">
                        <img src="img/copyright_logo.png" alt="logo">
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

        <div class="white_content" id="open">
            <div>
                <center>
                    <p>LOGIN</p>
                    <form action="./user_imf/login_data.php" class="loginform" method="post">
                        <input type="text" name="user_id" placeholder="Email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}">
                        <input type="password" name="password" placeholder="Passowrd" required>
                        <input type="submit" value="Login" class="submit">
                    </form>
                    <a href="#close">닫기</a>
                </center>
            </div>
        </div>

    </body>

    </html>