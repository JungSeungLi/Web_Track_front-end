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
        <script type="text/javascript" src="../js/ready.js"></script>
        <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
        <link href="../css/jquery.bxslider.css" rel="stylesheet" />
        <link href="../css/footer.css" rel="stylesheet" />
        <link href="../css/modal.css" rel="stylesheet" />

    </head>

    <body>
        <header>
            <div id="header">


                <div id="logo">
                    <a href="../index.php"><img src="../img/menu_logo_alpensia.png" alt="logo"></a>
                </div>

                <div id="sub_menu">
                    <ul>
                        <?php
                        if(!(isset($_SESSION['email']))){
                    ?>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#open">LOGIN</a></li>
                            <li><a href="../user_imf/sign_imf.php">JOIN US</a></li>
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
                                <a href="./Lesson_ymbol.php" class="topnav">학교소개</a>
                                <ul class="subnav">
                                    <li><a href="./Lesson_ymbol.php">교훈/상징</a></li>
                                    <li><a href="./educational_objectives.php">교육목표</a></li>
                                    <li><a href="./facilities.php">시설현황</a></li>
                                    <li><a href="./directions.php">학교길안내</a></li>
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

                    <div id="jb_sidebar_left">
                        <div class="left_menu">
                            <ul>
                                <li class="click"><a href="./Lesson_ymbol.php">인사말</a></li>
                                <li><a href="./educational_objectives.php">교육목표</a></li>
                                <li><a href="./facilities.php">시설현황</a></li>
                                <li><a href="./directions.php">학교길안내</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="jb_content">
                        <div>
                    서울 디지텍 고등학교는 기독교 정신에 입각하여 이타적인 사랑을 실천하는 사람을 키워 이 세상을 변화 시키는 데 교육의 기본을 두고 있습니다. “Not for Self” 라는 슬로건을 바탕으로 배움을 통한 더 큰 봉사를 할 수 있도록 실력 있고 헌신하는 인재를 키우고 있습니다.<br><br>

21세기는 디지털 기술 (Digitech: Digital Technology)의 시대입니다. 아울러 삶의 질에 대한 관심과 관련 산업의 발전이 급속도로 이루어지고 있는 시대입니다. 즐거움을 주는 기술 (Entertainment Technology ), 시간과 공간을 뛰어 넘는 컴퓨터 기술 (Ubiquitous Computing )의 확산, 스마트폰의 생활화 및 통신기술의 획기적 발달 등 디지털 기술 중심의 창조경제의 주역을 길러내는 것은 우리나라 미래발전 전략의 필수요소입니다. <br><br>

본교의 게임·영상과, 유비쿼터스과, 공간정보학과는 모두 고등학교로는 국내 최초로 개설된 학과이며 이 분야의 발전전망은 매우 밝다고 하겠습니다. 특성화 고등학교로서 학생중심의 선택형 교과과정을 가장 먼저 정착시키고 영어 중점 창의 경영학교로서 글로벌 인재를 육성하고 있습니다. 가르치는 학교에서 학생들이 배우려고 하는 학교환경을 조성하기 위하여 동아리 중심의 프로젝트 학습, 기업과 연계된 창의적 체험활동, 음악중심의 창의 인성교육, 전교생이 참여하는 국제 기부활동 등 선도적인 프로그램으로 우리나라 교육의 혁신을 주도하고 있습니다. 경계가 없는 융합교육을 실천하고 지역사회 및 기업의 인적 물적 자원을 적극 활용하는 교육시스템의 통합 (System Integration in Education)의 모델을 제시하고 있습니다. <br><br>

교육의 목적은 지식(Knowledge)에 그치는 것이 아니라 행동(Action)임을 인식하고 이 세상의 빛과 소금의 역할을 담당하는 진정한 리더를 키우는 학교가 될 것을 약속합니다. <br><br>

곽 일 천<br><br>


Il Chyun Kwak, Ph.D<br><br>
                            <hr>
                    </div>
                    </div>
                    <div id="jb_sidebar-right">
                        <img src="../img/oh_man.png" alt="man">
                    </div>
                </div>

            </div>
        </section>
        <footer>
            <div id="footer">
                <div class="footer_imf">
                    <div class="left_img">
                        <img src="../img/copyright_logo.png" alt="logo">
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
                    <form action="../user_imf/login_data.php" class="loginform" method="post">
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