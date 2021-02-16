<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dharmawan</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/'); ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="<?= base_url('assets/'); ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
            <i class="large material-icons tooltipped" data-position="top" data-tooltip="demo">apps</i>
        </a>
        <ul>
            <li><a href="<?= base_url('silk/auth'); ?>" class="btn-floating green tooltipped" data-position="top" data-tooltip="laporan keuangan"><i class="material-icons">monetization_on</i></a></li>
            <li><a href="<?= base_url('sp/auth'); ?>" class="btn-floating blue tooltipped" data-position="top" data-tooltip="pembukuan"><i class="material-icons">book</i></a></li>
        </ul>
    </div>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">Hi, I'm Risqi</h1>
                <div class="row center">
                    <h5 class="header col s12 light">This page uses materialize css framework</h5>
                </div>
                <div class="row center">
                    <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1" target="_blank">Clik here to visit their site</a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets/img/'); ?>background1.jpg" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">User Experience Focused</h5>

                        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets/img/'); ?>background2.jpg" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets/img/'); ?>background3.jpg" alt="Unsplashed background img 3"></div>
    </div>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">About Me</h5>
                    <p class="grey-text text-lighten-4">I'm a computer science student</p>


                </div>
                <!-- <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="<?= base_url('assets/'); ?>#!">Link 1</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Template by <a class="brown-text text-lighten-3" target="_blank" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url('assets/'); ?>js/materialize.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        (function($) {
            $(function() {

                // $('.sidenav').sidenav();
                $('.parallax').parallax();
                $('.fixed-action-btn').floatingActionButton({
                    direction: 'left',
                    hoverEnabled: true
                });
                $('.tooltipped').tooltip();
            }); // end of document ready
        })(jQuery); // end of jQuery name space
    </script>

</body>

</html>