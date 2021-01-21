<?php
use TCG\Voyager\Models\Post;
$posts = TCG\Voyager\Models\Post::all();
?>
<link rel="stylesheet" href="/icofont/icofont.min.css">
<body>
<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

        <h1><a href="/">Casey van Schaarenburg</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <h2>I'm a passionate <span>Back-end Developer</span> from the Netherlands</h2>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class="social-links">
            <a href="https://github.com/caseyvanschaarenburg?tab=repositories" class="github"><i class="icofont-github"></i></a>
            <a href="https://www.linkedin.com/in/casey-van-schaarenburg-289556185/" class="linkedin"><i class="icofont-linkedin"></i></a>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="/img/me.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Back-end Developer</h3>
                <p class="font-italic">
                </p>
                <p>
                    Hi! My name is Casey, I am a passionate Back-end developer from the Netherlands.
                </p>
                <br><br>
                <h4>My qualities</h4>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i>PHP</li>
                            <li><i class="icofont-rounded-right"></i>Laravel</li>
                            <li><i class="icofont-rounded-right"></i>GIT</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i>MySQL</li>
                            <li><i class="icofont-rounded-right"></i>Bug fixing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End About Me -->
</section><!-- End About Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Check My Resume</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                    <h4>Casey van schaarenburg</h4>
                    <p><em>My passion and hobby are programming, the moment when I can, I really love to program
                            and learn new things!</em></p>
                    <p>
                    <ul>
                        <li>Amersfoort 3815 JN, Fuutstraat 13 </li>
                        <li>0635319601</li>
                        <li>caseyschaarenburg@gmail.com </li>
                    </ul>
                    </p>
                </div>
                <br><br>

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4><strong style="color: darkgrey">MBO niveau 4 / </strong>Grafisch Lyceum Utrecht</h4>
                    <h5>Present</h5>
                    <p>At Grafisch Lyceum Utrecht I am currently following the web development course. At this
                        training we learn how to work with various programming languages as : PHP, Python &
                        JavaScript.</p>
                </div>
                <div class="resume-item">
                    <h4><strong style="color: darkgrey">VMBO T / </strong>X11 Media en Vormgeving</h4>
                    <h5>2016 - 2019</h5>
                    <p>X11 is a creative school, where I have learned basic ICT knowledge like how to setup a NAS
                        and learning how to recognize computer components. I have also learned how to work with
                        various abode programs.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Work Experience</h3>
                <div class="resume-item">
                    <h4>Cashier at Action</h4>
                    <h5>Present</h5>
                    <p>
                        My main task at the Action is to fill the shelves, sometimes I also run the cash register.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>My Services</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Sed ut perspiciatis</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                    <h4><a href="">Dele cardo</a></h4>
                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-arch"></i></div>
                    <h4><a href="">Divera don</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>
        <div class="row">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                    <div class="col-md-4">
                        <figure class="card card-product">
                            <div class="img-wrap"><img src="{{$post->image}}"></div>
                            <div class="info-wrap">
                                <div class="rating-wrap">
                                    <div class="label-rating"><p style="color: #fff">{{$post->title}}</p></div>
                                </div> <!-- rating-wrap.// -->
                            </div>
                            <div class="bottom-wrap">
                                <a href="{{$post->excerpt}}" class="btn btn-md" style="background-color: #18d26e; margin-left: 29%">Go to project</a><!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    @endforeach
        @endif
        </div>
    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>My Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p>contact@example.com</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Me</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                           data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                           data-rule="email" data-msg="Please enter a valid email"/>
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                       data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                          data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center">
                <button type="submit">Send Message</button>
            </div>
        </form>

    </div>
</section><!-- End Contact Section -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="{{ asset("/js/main.js")}}"></script>


</body>
