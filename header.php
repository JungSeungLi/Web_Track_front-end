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
                                <li><a href="../user_imf/logout.php">로그아웃</a></li>
                                <?php 
                        }
                    ?>
                    </ul>
                </div>

                <div id="menusize">
                    <div id="main_menu" class="zeta-menu-bar">
                        <ul class="zeta-menu">
                            <li>
                                <a href="./Lesson_ymbol.html" class="topnav">학교소개</a>
                                <ul class="subnav">
                                    <li><a href="./Lesson_ymbol.php">학교소개</a></li>
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