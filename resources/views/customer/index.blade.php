@extends('frontend.layout.app2')



@section('content')



  <!--   <div class="flat-quote style1">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-12">
                  <h2>ENGINEERING YOUR DREAMS WITH US.</h2>
                  <p>We construct buildings that define our time!</p>
              </div> /.col-md-8
  
              <div class="col-md-4 col-12 text-right">
                  <div class="btn-quote">
                      <a href="#" class="btn btn-styl">GET A QUOTE</a>
                  </div>
              </div> /.col-md-4
          </div> /.row
      </div> /.container
  </div> /.flat-quote
   -->
  <!--   <section class="flat-row flat-introduce">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="wrap-introduce">
                      <div class="content-introduce">
                          <h3 class="title"> <a href="#">We Are Always Ready To Help You</a></h3>
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
                          <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover</p>
                          <div class="flat-row flat-counter style1">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-3 col-6">
                                          <div class="counter style1">
                                              <div class="content-counter">
                                                  <div class="numb-count" data-from="0" data-to="90" data-speed="2000" data-inviewport="yes">90</div>
                                                  <div class="name-count">Projects Completed</div>
                                              </div>
                                          </div>/.flat-counter
                                      </div>
  
                                      <div class="col-md-3 col-6">
                                          <div class="counter style1">
                                              <div class="content-counter">
                                                  <div class="numb-count"  data-from="0" data-to="20" data-speed="2000" data-inviewport="yes">50</div>
                                                  <div class="name-count">Happy Clients</div>
                                              </div>
                                          </div>/.flat-counter
                                      </div>/.col-md-3
  
                                      <div class="col-md-3 col-6">
                                          <div class="counter style1">
                                              <div class="content-counter">
                                                  <div class="numb-count" data-from="0" data-to="50" data-speed="2000" data-inviewport="yes">15</div>
                                                  <div class="name-count">Won Awards</div>
                                              </div>
                                          </div>/.flat-counter
                                      </div>/.col-md-3
  
                                      <div class="col-md-3 col-6">
                                          <div class="counter style1">
                                              <div class="content-counter ">
                                                  <div class="numb-count percent" data-from="0" data-to="240" data-speed="2000" data-inviewport="yes">240</div>
                                                  <div class="name-count">Engineer Employers</div>
                                              </div>
                                          </div>/.flat-counter
                                      </div> /.col-md-3
                                  </div>/.row
                              </div>/.container
                          </div>
                      </div> /.content-introduce
  
                      <div class="wrap-experienced">
                          <img src="{{asset('frontend/images/style1/bg_introduce.png')}}" alt="image">
                          <div class="experienced text-center">
                              <div class="counter style1">
                                  <div class="content-counter">
                                      <div class="numb-count numb-year font-rubik font-weight-700" data-from="0" data-to="20" data-speed="2000" data-inviewport="yes">20</div>
                                  </div>
                              </div> /.counter
                              <div class="experienced-text mg-top-40">YEARS OF</div>
                              <div class="experienced-text">EXPERIENCE</div>
                              <div class="experienced-text">  IN THE INDUSTRY</div>
                          </div>
                      </div> /.wrap-experienced
                  </div> /.wrap-introduce
              </div> /.col-md-12
          </div> /.row
      </div> /.container
  </section> /.flat-introduce -->

    <section class="flat-row flat-services style1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-title">
                        <h2 class="title center-title"> Our Services </h2>
                    </div> <!-- /.flat-title -->

                    <div class="flat-carousel">
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-dots= "false" data-auto="false">
                            <div class="owl-carousel owl-carousel-services">
                                <div class="flat-imagebox imagebox-services style1">
                                    <div class="imagebox-image">
                                        <div class="overlay"></div>
                                        <img src="{{asset('frontend/images/style1/service1.png')}}" alt="images">
                                    </div>
                                    <div class="imagebox-content">
                                        <span class="ti-package"></span>
                                        <h5>Exterior Design</h5>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>

                                <div class="flat-imagebox imagebox-services style1">
                                    <div class="imagebox-image">
                                        <div class="overlay"></div>
                                        <img src="{{asset('frontend/images/style1/service2.png')}}" alt="images">
                                    </div>
                                    <div class="imagebox-content">
                                        <span class="ti-ruler-pencil"></span>
                                        <h5>Home Building</h5>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>

                                <div class="flat-imagebox imagebox-services style1">
                                    <div class="imagebox-image">
                                        <div class="overlay"></div>
                                        <img src="{{asset('frontend/images/style1/service3.png')}}" alt="images">
                                    </div>
                                    <div class="imagebox-content imagebox-services ">
                                        <span class="ti-brush-alt"></span>
                                        <h5>Building Renovation</h5>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>

                                <div class=" flat-imagebox imagebox-services">
                                    <div class="imagebox-image">
                                        <div class="overlay"></div>
                                        <img src="{{asset('frontend/images/style1/service1.png')}}" alt="images">
                                    </div>
                                    <div class="imagebox-content imagebox-services">
                                        <span class="ti-package"></span>
                                        <h5>Exterior Design</h5>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>

                                <div class="flat-imagebox imagebox-services style1">
                                    <div class="imagebox-image">
                                        <div class="overlay"></div>
                                        <img src="{{asset('frontend/images/style1/service2.png')}}" alt="images">
                                    </div>
                                    <div class="imagebox-content">
                                        <span class="ti-ruler-pencil"></span>
                                        <h5>Home Building</h5>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>

                                <div class="flat-imagebox imagebox-services style1">
                                    <div class="imagebox-image">
                                        <div class="overlay"></div>
                                        <img src="{{asset('frontend/images/style1/service3.png')}}" alt="images">
                                    </div>
                                    <div class="imagebox-content">
                                        <span class="ti-brush-alt"></span>
                                        <h5>Building Renovation</h5>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.flat-carousel -->
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.flat-services -->

    <section class="flat-row flat-benefit style1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-title">
                        <h2 class="title center-title">Why Choose Us</h2>
                    </div> <!-- /.flat-title -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="image-single">
                        <img src="{{asset('frontend/images/style1/benefit.png')}}" alt="standell">
                    </div> <!-- /.image-single -->
                </div> <!-- /.col-md-6 -->

                <div class="col-lg-6 col-md-12">
                    <div class="flat-iconbox iconbox-benefit clearfix">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <span class="ti-ruler-alt"></span>
                            </div>
                            <div class="content-box iconbox-content">
                                <h5 class="heading"><a href="#">Readability</a></h5>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div> <!-- /.iconbox -->

                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <span class="ti-medall-alt"></span>
                            </div>
                            <div class="content-box iconbox-content">
                                <h5 class="heading"><a href="#">Expertise</a></h5>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div><!-- /.iconbox -->

                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <span class="ti-cup"></span>
                            </div>
                            <div class="content-box iconbox-content">
                                <h5 class="heading"><a href="#">Quality</a></h5>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div> <!-- /.iconbox -->

                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <span class="ti-flag-alt-2"></span>
                            </div>
                            <div class="content-box iconbox-content">
                                <h5 class="heading"><a href="#">Experience</a> </h5>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div><!-- /.iconbox -->
                    </div> <!-- /.flat-iconbox -->
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.flat-benefit -->

    <section class="flat-projects style1">
        <div class="themesflat-carousel-box data-effect clearfix" data-column="4" data-column2="2" data-column3="1" data-dots= "false" data-auto="false" data-gap = '0'>
            <div class="owl-carousel carousel-project">
                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project1.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content">
                        <h2 class="heading"><a href="#">The Golden Hall</a></h2>
                        <div class="meta-project">
                            <a href="#">Education</a>
                            <a href="#">Healthcare</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project2.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content content-project">
                        <h2 class="heading"><a href="#">The Golden Hall</a></h2>
                        <div class="meta-project">
                            <a href="#">Education</a>
                            <a href="#">Healthcare</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project3.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content content-project">
                        <h2 class="heading"><a href="#">The Sydney Harbour Bridge</a></h2>
                        <div class="meta-project">
                            <a href="#">Buildings</a>
                            <a href="#">Education</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project4.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content content-project">
                        <h2 class="heading"><a href="#">Phare de la Coubre II</a></h2>
                        <div class="meta-project">
                            <a href="#">Buildings</a>
                            <a href="#">Education</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project1.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content">
                        <h2 class="heading"><a href="#">The Golden Hall</a></h2>
                        <div class="meta-project">
                            <a href="#">Education</a>
                            <a href="#">Healthcare</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project2.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content">
                        <h2 class="heading"><a href="#">The Golden Hall</a></h2>
                        <div class="meta-project">
                            <a href="#">Education</a>
                            <a href="#">Healthcare</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project3.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content">
                        <h2 class="heading"><a href="#">The Sydney Harbour Bridge</a></h2>
                        <div class="meta-project">
                            <a href="#">Buildings</a>
                            <a href="#">Education</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->

                <div class="flat-imagebox imagebox-project style1">
                    <div class="imagebox-image">
                        <img src="{{asset('frontend/images/style1/project4.png')}}" alt="standell">
                        <div class="overlay"></div>
                    </div>
                    <div class="imagebox-content">
                        <h2 class="heading"><a href="#">Phare de la Coubre II</a></h2>
                        <div class="meta-project">
                            <a href="#">Buildings</a>
                            <a href="#">Education</a>
                            <a href="#">VIP Hotel</a>
                        </div>
                        <p class="short-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div> <!-- /.imagebox-project -->
            </div> <!-- /.carousel-project -->
        </div> <!-- /.themesflat-carousel-box -->
    </section> <!-- /.flat-projects -->

    <!-- <section class="flat-row flat-blog ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-title">
                        <h2 class="title center-title">Latest Blogs</h2>
                    </div> /.flat-title
    
                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="27" data-column="3" data-column2="2" data-column3="1" data-dots= "false" data-auto="false">
                        <div class="owl-carousel">
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <a href="#"><img src="{{asset('frontend/images/style1/blog1.png')}}" alt="image"></a>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">July 5, 2017 by Admin</a></li>
                                                <li class="categories"><a href="#">Construction</a></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="#">Instruction Manual Worker Construction</a>
                                        </h5>
                                        <div class="post-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <a href="#"><img src="{{asset('frontend/images/style1/blog2.png')}}" alt="image"></a>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">July 5, 2017 by Admin</a></li>
                                                <li class="categories"><a href="#">Plumber</a></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="#">Stacked Lumber At A Construction</a>
                                        </h5>
                                        <div class="post-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <a href="#"><img src="{{asset('frontend/images/style1/blog3.png')}}" alt="image"></a>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">July 5, 2017 by Admin</a></li>
                                                <li class="categories"><a href="#">  Repair Roof</a></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="#">Crane And Construction Of New Buildings</a>
                                        </h5>
                                        <div class="post-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <a href="#"><img src="{{asset('frontend/images/style1/blog1.png')}}" alt="image"></a>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">July 5, 2017 by Admin</a></li>
                                                <li class="categories"><a href="#">Construction</a></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="#">Instruction Manual Worker Construction</a>
                                        </h5>
                                        <div class="post-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <a href="#"><img src="{{asset('frontend/images/style1/blog2.png')}}" alt="image"></a>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">July 5, 2017 by Admin</a></li>
                                                <li class="categories"><a href="#">Plumber</a></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="#">Stacked Lumber At A Construction</a>
                                        </h5>
                                        <div class="post-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post style1">
                                <div class="post-border">
                                    <div class="featured-post">
                                        <a href="#"><img src="{{asset('frontend/images/style1/blog3.png')}}" alt="image"></a>
                                    </div>
                                    <div class="content-post">
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">July 5, 2017 by Admin</a></li>
                                                <li class="categories"><a href="#">  Repair Roof</a></li>
                                            </ul>
                                        </div>
                                        <h5 class="post-title">
                                            <a href="#">Crane And Construction Of New Buildings</a>
                                        </h5>
                                        <div class="post-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div> /.themesflat-carousel-box
                </div> /.col-md-12
            </div> /.row
        </div> /.container
    </section> /.flat-blog -->

    <section class="flat-testimonials parallax parallax1 style1 pd-top-80">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-title">
                        <h2 class="title center-title text-white">Testimonials</h2>
                    </div>
                    <div class="flat-carousel">
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="2" data-column2="1" data-column3="1" data-auto="false" data-dots = "true">
                            <div class="owl-carousel owl-theme owl-carousel-testimonial">

                                <div class="testimonial clearfix style1">
                                    <blockquote class="testimonial-text">
                                        Throughout the post-construction phase of our move Henning has been a  visible force in getting "punch list" items completed and done right the first time.
                                    </blockquote>
                                    <div class="testimonial-author clearfix">
                                        <div class="author-image">
                                            <img src="{{asset('frontend/images/style1/testimonial.png')}}" alt="images">
                                        </div>

                                        <div class="author-info">
                                            <h5 class="name"><a href="#">Russell Stephens</a></h5>
                                            <p class="info">University in UK</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial clearfix style1">
                                    <blockquote class="testimonial-text">
                                        We would like to commend you for a job well done on our breaking facility. The even-keel tone of your construction company made this project go so easily.
                                    </blockquote>
                                    <div class="testimonial-author clearfix">
                                        <div class="author-image">
                                            <img src="{{asset('frontend/images/style1/testimonial1.png')}}" alt="images">
                                        </div>

                                        <div class="author-info">
                                            <h5 class="name"><a href="#">Russell Stephens</a></h5>
                                            <p class="info">University in US</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial clearfix style1">
                                    <blockquote class="testimonial-text">
                                        Throughout the post-construction phase of our move Henning has been a  visible force in getting "punch list" items completed and done right the first time.
                                    </blockquote>
                                    <div class="testimonial-author clearfix">
                                        <div class="author-image">
                                            <img src="{{asset('frontend/images/style1/testimonial.png')}}" alt="images">
                                        </div>

                                        <div class="author-info">
                                            <h5 class="name"><a href="#">Russell Stephens</a></h5>
                                            <p class="info">University in US</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial clearfix style1">
                                    <blockquote class="testimonial-text">
                                        We would like to commend you for a job well done on our breaking facility. The even-keel tone of your construction company made this project go so easily.
                                    </blockquote>
                                    <div class="testimonial-author clearfix">
                                        <div class="author-image">
                                            <img src="{{asset('frontend/images/style1/testimonial1.png')}}" alt="images">
                                        </div>

                                        <div class="author-info">
                                            <h5 class="name"><a href="#">Russell Stephens</a></h5>
                                            <p class="info">University in UK</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial clearfix style1">
                                    <blockquote class="testimonial-text">
                                        Throughout the post-construction phase of our move Henning has been a  visible force in getting "punch list" items completed and done right the first time.
                                    </blockquote>
                                    <div class="testimonial-author clearfix">
                                        <div class="author-image">
                                            <img src="{{asset('frontend/images/style1/testimonial.png')}}" alt="images">
                                        </div>

                                        <div class="author-info">
                                            <h5 class="name"><a href="#">Russell Stephens</a></h5>
                                            <p class="info">University in US</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial clearfix style1">
                                    <blockquote class="testimonial-text">
                                        We would like to commend you for a job well done on our breaking facility. The even-keel tone of your construction company made this project go so easily.
                                    </blockquote>
                                    <div class="testimonial-author clearfix">
                                        <div class="author-image">
                                            <img src="{{asset('frontend/images/style1/testimonial1.png')}}" alt="images">
                                        </div>

                                        <div class="author-info">
                                            <h5 class="name"><a href="#">Russell Stephens</a></h5>
                                            <p class="info">University in UK</p>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- /.owl-carousel -->
                        </div>
                    </div><!-- /.flat-carousel -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.flat-testimonial -->

    <div class="partner-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-client owl-carousel" data-auto="true" data-item="5" data-nav="false" data-dots="false">
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-1.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-1-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client ">
                            <a href="#" >
                                <img src="{{asset('frontend/images/partner-logo-2.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-2-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-3.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-3-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-4.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-4-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-5.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-5-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-1.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-1-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client ">
                            <a href="#" >
                                <img src="{{asset('frontend/images/partner-logo-2.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-2-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-3.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-3-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-4.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-4-hover.png')}}" alt="standell">
                            </a>
                        </div>
                        <div class="client">
                            <a href="#">
                                <img src="{{asset('frontend/images/partner-logo-5.png')}}" alt="standell">
                                <img src="{{asset('frontend/images/partner-logo-5-hover.png')}}" alt="standell">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.partner-clients -->
@endsection