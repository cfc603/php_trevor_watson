<?php require_once("../private/initialize.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trevor Watson</title>

    <!-- Bootstrap Core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo url_for("/static/css/grayscale.css") ?>" rel="stylesheet">
    <link href="<?php echo url_for("/static/css/custom.css") ?>" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?php echo url_for("/static/img/favicon.ico") ?>"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light">Trevor</span> Watson
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="intro-text">A backend web developer with a love for Django.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Trevor</h2>
                <p>Trevor's love for computers started at a young age when he was first introduced to Windows 3.1 when he was seven and later rebuilding computers for a local repair shop when he was 15.</p>
                <p>In 2014, in search of way to compare online retailer prices, led him to diving into learning about Python and MySQL. Compiling the data wasn't enough and he needed a easy way to display it without building an entire program, meet Django.</p>
                <p>Since late 2014, Trevor has been building Django applications and studying best practices from well known sources like <a href="https://realpython.com/" target="_blank">Real Python</a>, <a href="https://www.twoscoopspress.com/" target="_blank">Two Scoops of Django</a>, and <a href="http://chimera.labs.oreilly.com/books/1234000000754" target="_blank">Test-Drive Development with Python</a>. While Python and Django is his bread and butter so to speak, Trevor has spent some time imersing himself in other languages such as HTML, JavaScript, JQuery, Java, and Ruby. His latest projects include mastering deployment to a VPS on <a href="https://www.digitalocean.com/" target="_blank">DigitalOcean</a>.</p>
                <p>In his downtime, he can be found at a little league game watching his son Jacob play baseball with his wife CoaCoa. With weekends typically spent serving at his local church, <a href="http://www.tomoka.cc/" target="_blank">Tomoka Christian Church</a>, and enjoying swimming at one of the local beaches.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="services" class="containercontent-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Django Web Development Services</h2>
                        <p>Providing website development with the <a href="https://www.djangoproject.com/" target="_blank">Django Web framework</a> in <a href="https://www.python.org/" target="_ blank">Python</a></p>
                <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul style="list-style: none; font-size: 20px">
                            <li>PythonAnywhere Setup</li>
                            <li>Django Security</li>
                            <li>Django Performance Optimization</li>
                            <li>VPS Deployment</li>
                            <li>DigitalOcean Setup</li>
                            <li>eCommerce Web Development</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul style="list-style: none; font-size: 20px">
                            <li>Open Source Contributions</li>
                            <li>django CMS</li>
                            <li>Python Programming</li>
                            <li>Django Programming</li>
                            <li>Ansible</li>
                            <li>Web Hosting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Trevor Watson</h2>
                <p>
                    <a href="http://www.google.com/recaptcha/mailhide/d?k=01_iskiLzJZrQOPpSGOhe98w==&amp;c=AXhMckie_IHu8WVjBw7mTKTDw87P7IMOMhAosuheH2E=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\x3d01_iskiLzJZrQOPpSGOhe98w\x3d\x3d\x26c\x3dAXhMckie_IHu8WVjBw7mTKTDw87P7IMOMhAosuheH2E\x3d', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">w...@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/cfc603" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/cfc603" class="btn btn-default btn-lg target="_blank""><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/watsontrevor" class="btn btn-default btn-lg target="_blank""><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Trevor Watson <?php echo date("Y") ?></p>
        </div>
    </footer>

    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo url_for("/static/js/grayscale.js") ?>"></script>

</body>

</html>
