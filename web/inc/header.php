<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center justify-content-between">
            <div class="logo">
                <!--<h1 class="text-light"><a href="index.php"><span><?php /*echo APP_NAME; */?></span></a></h1>-->
                <!-- ou en utlisant le logo -->
                 <a href="index.php"><img src="assets/img/study_up_logo2.png" height="80px" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero"><?php echo toolsLang::tool_get_text("studyup_header1"); ?></a></li>
                    <li><a class="nav-link scrollto" href="#about"><?php echo toolsLang::tool_get_text("studyup_header2"); ?></a></li>
                    <li><a class="nav-link scrollto" href="#services"><?php echo toolsLang::tool_get_text("studyup_header3"); ?></a></li>
                    <li><a class="nav-link scrollto" href="#team"><?php echo toolsLang::tool_get_text("studyup_header4"); ?></a></li>
                    <li class="dropdown"><a href="#"><span><?php echo toolsLang::tool_get_text("studyup_header5"); ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.php?lg=fr"><img src="assets/img/fr.png"> <?php echo toolsLang::tool_get_text("studyup_french"); ?></a></li>
                            <li><a href="index.php?lg=us"><img src="assets/img/us.png"> <?php echo toolsLang::tool_get_text("studyup_english"); ?></a></li>
                            <li><a href="index.php?lg=ru"><img src="assets/img/ru.png"> <?php echo toolsLang::tool_get_text("studyup_russe"); ?></a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact"> <?php echo toolsLang::tool_get_text("studyup_header6"); ?></a></li>
                    <li><a class="getstarted scrollto" href="#" data-toggle="modal" data-target="#demarrer_modal"> <?php echo toolsLang::tool_get_text("studyup_hero3"); ?></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div><!-- End Header Container -->
    </div>
</header>
