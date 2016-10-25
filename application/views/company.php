<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Adminise - Clean And Corporate Admin Panel Template</title>
    <!--// Stylesheets //-->
    <link href="http://localhost/test/assets/css/style.css" rel="stylesheet" media="screen"/>
    <link href="http://localhost/test//assets/css/bootstrap.css" rel="stylesheet" media="screen"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!--// Javascript //-->
    <script type="text/javascript" src="http://localhost/test/assets/js/jquery.js"></script>
    <script type="text/javascript" src="http://localhost/test/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/test/assets/js/jquery.accordion.js"></script>
    <script type="text/javascript" src="http://localhost/test/assets/js/jquery.custom-scrollbar.min.js"></script>
    <script type="text/javascript" src="http://localhost/test/assets/js/icheck.min.js"></script>
    <script type="text/javascript" src="http://localhost/test/assets/js/selectnav.min.js"></script>
    <script type="text/javascript" src="http://localhost/test/assets/js/functions.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php
    foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
    <?php endforeach; ?>
    <?php foreach ($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</head>

<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="structure-row">
        <!-- Sidebar Start -->
        <aside class="sidebar">
            <div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="dashboard1.html"><img src="http://localhost/test/assets/images/logo.png"
                                                       alt="Adminise"/></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <nav class="navigation">
                    <ul class="navi-acc" id="nav2">
                        <li>
                            <a href="/test/index.php/company/index/" class="dashboard">Company</a>
                            <ul>
                                <li><a href="add">Add new Company</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navi-acc" id="nav3">
                        <li><a href="#dashboard" class="loginoptions">Staff</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
        <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
                <div class="user">
                    <figure>
                        <a href="#"><img src="http://localhost/test/assets/images/avatar1.jpg" alt="Adminise"/></a>
                    </figure>
                    <div class="welcome">
                        <p>Welcome to</p>
                        <h5>Dashboard</h5>
                    </div>
                </div>
                <!-- User Section End -->
                <!-- Search Section Start -->
                <!-- Search Section End -->
                <!-- Header Top Navigation Start -->
                <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading">Company</h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <div class="table-box">
                                        <script type="text/javascript"
                                                src="/assets/js/jquery.dataTables.min.js"></script>
                                        <?php echo $output; ?>
                                        <!--                                        <table class="display table" id="example">-->
                                        <!--                                            <thead>-->
                                        <!--                                            <tr>-->
                                        <!--                                                <th>Rendering engine</th>-->
                                        <!--                                                <th>Browser</th>-->
                                        <!--                                                <th>Platform(s)</th>-->
                                        <!--                                                <th class="center">Engine version</th>-->
                                        <!--                                                <th class="center">CSS grade</th>-->
                                        <!--                                            </tr>-->
                                        <!--                                            </thead>-->
                                        <!--                                            <tbody>-->
                                        <!--                                            <tr class="gradeX">-->
                                        <!--                                                <td>Trident</td>-->
                                        <!--                                                <td>Internet-->
                                        <!--                                                    Explorer 4.0</td>-->
                                        <!--                                                <td>Win 95+</td>-->
                                        <!--                                                <td class="center">4</td>-->
                                        <!--                                                <td class="center">X</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeC">-->
                                        <!--                                                <td>Trident</td>-->
                                        <!--                                                <td>Internet-->
                                        <!--                                                    Explorer 5.0</td>-->
                                        <!--                                                <td>Win 95+</td>-->
                                        <!--                                                <td class="center">5</td>-->
                                        <!--                                                <td class="center">C</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Trident</td>-->
                                        <!--                                                <td>Internet-->
                                        <!--                                                    Explorer 5.5</td>-->
                                        <!--                                                <td>Win 95+</td>-->
                                        <!--                                                <td class="center">5.5</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Trident</td>-->
                                        <!--                                                <td>Internet-->
                                        <!--                                                    Explorer 6</td>-->
                                        <!--                                                <td>Win 98+</td>-->
                                        <!--                                                <td class="center">6</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Trident</td>-->
                                        <!--                                                <td>Internet Explorer 7</td>-->
                                        <!--                                                <td>Win XP SP2+</td>-->
                                        <!--                                                <td class="center">7</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Trident</td>-->
                                        <!--                                                <td>AOL browser (AOL desktop)</td>-->
                                        <!--                                                <td>Win XP</td>-->
                                        <!--                                                <td class="center">6</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Firefox 1.0</td>-->
                                        <!--                                                <td>Win 98+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">1.7</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Firefox 1.5</td>-->
                                        <!--                                                <td>Win 98+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Firefox 2.0</td>-->
                                        <!--                                                <td>Win 98+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Firefox 3.0</td>-->
                                        <!--                                                <td>Win 2k+ / OSX.3+</td>-->
                                        <!--                                                <td class="center">1.9</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Camino 1.0</td>-->
                                        <!--                                                <td>OSX.2+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Camino 1.5</td>-->
                                        <!--                                                <td>OSX.3+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Netscape 7.2</td>-->
                                        <!--                                                <td>Win 95+ / Mac OS 8.6-9.2</td>-->
                                        <!--                                                <td class="center">1.7</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Netscape Browser 8</td>-->
                                        <!--                                                <td>Win 98SE+</td>-->
                                        <!--                                                <td class="center">1.7</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Netscape Navigator 9</td>-->
                                        <!--                                                <td>Win 98+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.0</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.1</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.1</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.2</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.2</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.3</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.3</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.4</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.4</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.5</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.5</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.6</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.6</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.7</td>-->
                                        <!--                                                <td>Win 98+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.7</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Mozilla 1.8</td>-->
                                        <!--                                                <td>Win 98+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Seamonkey 1.1</td>-->
                                        <!--                                                <td>Win 98+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Gecko</td>-->
                                        <!--                                                <td>Epiphany 2.20</td>-->
                                        <!--                                                <td>Gnome</td>-->
                                        <!--                                                <td class="center">1.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>Safari 1.2</td>-->
                                        <!--                                                <td>OSX.3</td>-->
                                        <!--                                                <td class="center">125.5</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>Safari 1.3</td>-->
                                        <!--                                                <td>OSX.3</td>-->
                                        <!--                                                <td class="center">312.8</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>Safari 2.0</td>-->
                                        <!--                                                <td>OSX.4+</td>-->
                                        <!--                                                <td class="center">419.3</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>Safari 3.0</td>-->
                                        <!--                                                <td>OSX.4+</td>-->
                                        <!--                                                <td class="center">522.1</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>OmniWeb 5.5</td>-->
                                        <!--                                                <td>OSX.4+</td>-->
                                        <!--                                                <td class="center">420</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>iPod Touch / iPhone</td>-->
                                        <!--                                                <td>iPod</td>-->
                                        <!--                                                <td class="center">420.1</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Webkit</td>-->
                                        <!--                                                <td>S60</td>-->
                                        <!--                                                <td>S60</td>-->
                                        <!--                                                <td class="center">413</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Presto</td>-->
                                        <!--                                                <td>Opera 7.0</td>-->
                                        <!--                                                <td>Win 95+ / OSX.1+</td>-->
                                        <!--                                                <td class="center">-</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Presto</td>-->
                                        <!--                                                <td>Opera 7.5</td>-->
                                        <!--                                                <td>Win 95+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">-</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Presto</td>-->
                                        <!--                                                <td>Opera 8.0</td>-->
                                        <!--                                                <td>Win 95+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">-</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Presto</td>-->
                                        <!--                                                <td>Opera 8.5</td>-->
                                        <!--                                                <td>Win 95+ / OSX.2+</td>-->
                                        <!--                                                <td class="center">-</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Presto</td>-->
                                        <!--                                                <td>Opera 9.0</td>-->
                                        <!--                                                <td>Win 95+ / OSX.3+</td>-->
                                        <!--                                                <td class="center">-</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            <tr class="gradeA">-->
                                        <!--                                                <td>Presto</td>-->
                                        <!--                                                <td>Opera 9.2</td>-->
                                        <!--                                                <td>Win 88+ / OSX.3+</td>-->
                                        <!--                                                <td class="center">-</td>-->
                                        <!--                                                <td class="center">A</td>-->
                                        <!--                                            </tr>-->
                                        <!--                                            </tbody>-->
                                        <!--                                            <tfoot>-->
                                        <!--                                            <tr>-->
                                        <!--                                                <th><input type="text" name="search_engine" value="Search engines" class="search_init" /></th>-->
                                        <!--                                                <th><input type="text" name="search_browser" value="Search browsers" class="search_init" /></th>-->
                                        <!--                                                <th><input type="text" name="search_platform" value="Search platforms" class="search_init" /></th>-->
                                        <!--                                                <th><input type="text" name="search_version" value="Search versions" class="search_init" /></th>-->
                                        <!--                                                <th><input type="text" name="search_grade" value="Search grades" class="search_init" /></th>-->
                                        <!--                                            </tr>-->
                                        <!--                                            </tfoot>-->
                                        <!--                                        </table>-->
                                        <script>
                                            var asInitVals = new Array();
                                            $(document).ready(function () {
                                                var oTable = $('#example').dataTable({
                                                    "oLanguage": {
                                                        "sSearch": "Search all columns:"
                                                    }
                                                });

                                                $("tfoot input").keyup(function () {
                                                    /* Filter on the column (the index) of this element */
                                                    oTable.fnFilter(this.value, $("tfoot input").index(this));
                                                });


                                                /*
                                                 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in
                                                 * the footer
                                                 */
                                                $("tfoot input").each(function (i) {
                                                    asInitVals[i] = this.value;
                                                });

                                                $("tfoot input").focus(function () {
                                                    if (this.className == "search_init") {
                                                        this.className = "";
                                                        this.value = "";
                                                    }
                                                });

                                                $("tfoot input").blur(function (i) {
                                                    if (this.value == "") {
                                                        this.className = "search_init";
                                                        this.value = asInitVals[$("tfoot input").index(this)];
                                                    }
                                                });
                                            });

                                        </script>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Content Section End -->
        </div>
        <!-- Right Section End -->
    </div>
</div>
<!-- Wrapper End -->
</body>
</html>
