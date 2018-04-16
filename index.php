<?php require "_wampindexer/theme/script/wamp.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wamp | localhost</title>
    <!-- Vendor CSS -->
    <link href="_wampindexer/theme/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="_wampindexer/theme/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="_wampindexer/theme/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <!-- theme CSS -->
    <link href="_wampindexer/theme/css/app.min.1.css" rel="stylesheet">
    <link href="_wampindexer/theme/css/app.min.2.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="_wampindexer/theme/css/style.css" rel="stylesheet">
    <!-- FAVICON -->
    <link href="_wampindexer/theme/img/favicon.ico" rel="icon"/>
</head>
    <body data-ma-header="teal">
        <!-- Page Loader -->
        <div class="page-loader palette-Blue-300 bg">
            <div class="preloader pl-xl pls-white">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20"/>
                </svg>
            </div>
        </div>
        <header id="header" class="media">
            <div class="pull-left h-logo">
                <a href="/">
                    Localhost
                    <small><span class="nbProjet"></span> Repositories</small>
                </a>
            </div>
            <ul class="pull-right h-menu">
                <li class="hm-search-trigger">
                    <a href="" data-ma-action="search-open">
                        <i class="hm-icon zmdi zmdi-search"></i>
                    </a>
                </li>
                <li class="dropdown h-apps">
                    <a data-toggle="dropdown" href="">
                        <i class="hm-icon zmdi zmdi-apps"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="https://www.messenger.com" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Messenger</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://mail.google.com/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Gmail</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://outlook.live.com/mail/#/inbox/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Outlook</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://calendar.google.com/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Agenda</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://freedcamp.com/dashboard/home" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>FreedCamp</small>
                            </a>
                        </li>
                        <li>
                            <a href="http://devdocs.io/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>DevDocs</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-github zmdi-hc-fw"></i>
                                <small>Github</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.ovh.com/auth/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>OVH</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Drive</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://analytics.google.com/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Analytics</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/adsense" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Adsense</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Linkedin</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/RemyManescau/" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Facebook</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/remymanescau" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Twitter</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+R%C3%A9myManescau" target="_blank">
                                <i class="palette-Light-Blue bg zmdi zmdi-router zmdi-hc-fw"></i>
                                <small>Google +</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href=""><i class="hm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li>
                            <a href="_wampindexer/search-replace-db" target="_blank"><i class="zmdi zmdi-swap"></i> Search & Replace DB</a>
                        </li>
                        <li>
                            <a href="phpmyadmin/" target="_blank"><i class="zmdi zmdi-dns"></i> phpMyAdmin</a>
                        </li>
                        <li>
                            <a href="phpsysinfo/index.php?disp=dynamic" target="_blank"><i class="zmdi zmdi-comment-list"></i> phpsysinfo</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hm-profile">
                    <a data-toggle="dropdown" href="">
                        <img src="_wampindexer/theme/img/goomie.jpg" alt="">
                    </a>
                </li>
            </ul>
            <div class="media-body h-search">
                <form class="p-relative">
                    <input type="text" class="hs-input" id="myInput" placeholder="Find some gucci ...">
                    <i class="zmdi zmdi-search hs-reset" data-ma-action="search-clear"></i>
                </form>
            </div>
        </header>

        <section id="main">
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2><?php echo $wampConfig; ?></h2>
                    </div>
                    <div class="row myGrid">
                          <?php echo $repositories; ?>
                    </div>
                </div>
            </section>
        </section>

        <!-- Javascript Libraries -->
        <script src="_wampindexer/theme/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="_wampindexer/theme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="_wampindexer/theme/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="_wampindexer/theme/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="_wampindexer/theme/js/functions.js"></script>
        <script src="_wampindexer/theme/js/actions.js"></script>
        <script src="_wampindexer/theme/js/app.js"></script>
    </body>
  </html>
