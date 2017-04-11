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
        <?php include "../header.php"; ?> <!--Header -->
        <section>
            <div id="section">
                <div id="title_color">
                </div>

                <div id="lesson_center">

                    <div id="jb_sidebar_left">
                        <div class="left_menu">
                            <ul>
                                <li><a href="./Lesson_ymbol.php">인사말</a></li>
                                <li class="click"><a href="./educational_objectives.php">교육목표</a></li>
                                <li><a href="./facilities.php">시설현황</a></li>
                                <li><a href="./directions.php">학교길안내</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="jb_content">
                        <p>교육목표</p>
                        <img src="../img/school_fu.jpg" alt="school_fu">
                    </div>
                    <div id="jb_sidebar-right">
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