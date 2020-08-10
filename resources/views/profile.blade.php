<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ishal - Web Portfolio</title>

    <!-- favicon -->
    <link href="{{asset('favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('css/profile/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style CSS -->
    <link href="{{asset('css/profile/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<nav class="navbar navbar-default">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Home</span></a></li>
            <li><a href="{{url('/profile')}}">Profile</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
        </ul>
    </div>
</nav>
<div class="columns-block container">
<div class="left-col-block blocks">
    <header class="header theiaStickySidebar">
        <div class="profile-img">
            <img src="{{url('images/profile/profile.png')}}" class="img-responsive" alt=""/>
        </div>
        <div class="content">
            <h1>Faishal Azhiman Suryadi S.T.</h1>
            <span class="lead">Fullstack Developer</span>

            <div class="about-text">
                <p style="text-align: justify;">
                    Hanya seorang biasa yang hobi menulis, membuat aplikasi, dan bermain game online. Memiliki kecintaan terhadap hal-hal mengenai siber.
                </p>

                <p style="text-align: center;"><img src="{{url('images/profile/Signature.png')}}" alt="" class="img"/>
                </p>
            </div>
        </div>

    </header>
    <!-- .header-->
</div>
<!-- .left-col-block -->


<div class="right-col-block blocks">
<div class="theiaStickySidebar">
<section class="section-wrapper skills-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress-wrapper">

                    <div class="progress-item">
                        <span class="progress-title">Laravel Framework</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 95%"><span class="progress-percent"> 95%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">PHP Native</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%"><span class="progress-percent"> 90%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">MVC Concept</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 88%;"><span class="progress-percent"> 88%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">MySQL</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 93%;"><span class="progress-percent"> 93%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->
                    <div class="progress-item">
                        <span class="progress-title">RESFul API</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 91%;"><span class="progress-percent"> 91%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                </div>
                <!-- /.progress-wrapper -->
            </div>
        </div>
        <!--.row -->
    </div>
    <!-- .container-fluid -->
</section>
<!-- .skills-wrapper -->

<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Work Experience</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2020 - Present</small>
                    <h3>Military Officer</h3>
                    <h4>Indonesian Army</h4>

                    <p>Cimahi, Indonesia</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2015 - Present</small>
                    <h3>Website Freelancer</h3>
                    <h4>self employed</h4>

                    <p>Bandung, Indonesia</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2018 - 2019</small>
                    <h3>Fullstack Developer</h3>
                    <h4>Dorenmi (PT. Aldina Angkasa Adinegara)</h4>

                    <p>Bandung, Indonesia</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2018</small>
                    <h3>Internship</h3>
                    <h4>PT. Indosat M2</h4>

                    <p>Jakarta, Indonesia</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2017</small>
                    <h3>Internship</h3>
                    <h4>PT. Pos Indonesia</h4>

                    <p>Bandung, Indonesia</p>
                </div>
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-experience -->

<section class="section-wrapper section-education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Education</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2019-2020</small>
                    <h3>Military Education</h3>
                    <h4>PAPK TNI 2020</h4>

                    <p>Magelang, Indonesia</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2015 - 2019</small>
                    <h3>Telecommunication Engineering</h3>
                    <h4>Telkom University</h4>

                    <p>Bnadung, Indonesia</p>
                </div>
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-education -->

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <address>
                    <strong>Address</strong><br>
                    Bandung, Jawa Barat 40135
                </address>
                <address>
                    <strong>Phone Number</strong><br>
                    0813-1340-8537
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:faishalazhiman@gmail.com">faishalazhiman@gmail.com</a>
                </address>
            </div>
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; All rights reserved
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- Sticky -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="{{asset('js/profile/jquery-2.1.4.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('js/profile/bootstrap.min.js')}}"></script>
<script src="{{asset('js/profile/theia-sticky-sidebar.js')}}"></script>
<script src="{{asset('js/profile/scripts.js')}}"></script>
</body>
</html>