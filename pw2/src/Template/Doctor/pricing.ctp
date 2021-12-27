<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor[]|\Cake\Collection\CollectionInterface $doctor
 */
?>
<!-- Navigation
  ==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#"><img src="../../../pw2/webroot/img/logo-top.png" class="img-responsive"><span>Grit</span></a> 
    </div>
        
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
       
      <!--nav icon--> 
      <a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
      <!--nav icon end-->
          
      <ul id="nav-top" class="nav navbar-nav navbar-right">
        <li><a href="#" class="page-scroll">Home</a></li>
        <li><a href="#" class="page-scroll">Page</a></li>
        <li><a href="https://book.cakephp.org/3/" class="page-scroll">Documentation</a></li>
        <li><a href="https://api.cakephp.org/3.0/" class="page-scroll">API</a></li>
      </ul>        
      <!--search form-->         
        <form method="get" action="/search" id="search">
          <input name="q" type="text" size="40" placeholder="Search..." />
        </form>
      <!--/search form--> 
              
      <nav class="bottom-nav">
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
              
      <ul class="social-link">
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- banner Page
    ==========================================-->
<section id="home-banner" style="background-image: url(../../../pw2/webroot/img/b-1.jpg);">
  <div class="content">
    <div class="container"  data-wow-duration="1s"> <span class="wow fadeIn">Dcrazed says</span>
      <h1 class="wow fadeInUp">We put true <span>focus</span> on our design <span>process</span>, the concept, prototypes and <span>design</span>. </h1>
    </div>
  </div>
  <div class="arrow bounce"> <i class="fa fa-arrow-down fa-2x"></i> </div>
</section>

<!-- about us Page
    ==========================================-->
<section id="about-us-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>Pricing</h2>
        <p>Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
      </div>
      <!--/section-title-->
      
      <div class="clearfix"></div>
      <!--about features list-->

      <ul class="about-features wow fadeInUp">
        <?php foreach ($doctor as $doctor): ?>
          <li><i class="fa fa-inbox"></i>
            <h5><?= h($doctor->nombre) ?></h5>
            <p>
              Age: <?= $this->Number->format($doctor->edad) ?><br>
              Appointment: <?= $this->Number->format($doctor->sueldo) ?>
            </p>
            <button>Reserve</button>
          </li>
        <?php endforeach; ?>
      </ul>
      <!--/about features list--> 
      
    </div>
  </div>
</section>

<!-- Compare Pricing Table
    ==========================================-->
<section id="home-contact-block">
  <div class="container">
    <div class="row wow fadeInUp">
      <h2 style="color: white;"><center>Compare Appointments</center></h2>
      <table style="border: hidden; color:white;">
        <thead style="border-right: hidden; border-left: hidden;">
          <tr style="background-color: #464543;" >
            <th style="width: 34%; border-right: hidden; border-bottom-width: 3px;"></th>
            <th style="width: 22%; border-right: hidden; border-bottom-width: 3px;">+$500</th>
            <th style="width: 22%; border-right: hidden; border-bottom-width: 3px;">+$1000</th>
            <th style="width: 22%; border-right: hidden; border-bottom-width: 3px;">+$2000</th>
          </tr>
        </thead>

        <tbody style="border-right: hidden; border-left: hidden;">
            <tr style="background-color: #464543;">
              <th style="border-right: hidden;">Quality</th>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
            </tr>
        </tbody>

        <tbody style="border-right: hidden; border-left: hidden;">
            <tr style="background-color: #464543;">
              <th style="border-right: hidden;">Flexibility</th>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
            </tr>
        </tbody>

        <tbody style="border-right: hidden; border-left: hidden;">
            <tr style="background-color: #464543;">
              <th style="border-right: hidden;">Efficacy</th>
              <td style="border-right: hidden;"></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
            </tr>
        </tbody>

        <tbody style="border-right: hidden; border-left: hidden;">
            <tr style="background-color: #464543;">
              <th style="border-right: hidden;">Experienced</th>
              <td style="border-right: hidden;"></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
            </tr>
        </tbody>

        <tbody style="border-right: hidden; border-left: hidden;">
            <tr style="background-color: #464543;">
              <th style="border-right: hidden;">Recomended</th>
              <td style="border-right: hidden;"></td>
              <td style="border-right: hidden;"></td>
              <td style="border-right: hidden;"><svg width="24" height="24"><use xlink:href="#check"/></svg></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>Our work</h2>
        <a href="#">go to portfolio</a></div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
            <figure><img src="../../../pw2/webroot/img/01-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Codetowp branding</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="../../../pw2/webroot/img/01-screenshot.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="../../../pw2/webroot/img/02-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="../../../pw2/webroot/img/03-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="../../../pw2/webroot/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="../../../pw2/webroot/img/05-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="../../../pw2/webroot/img/06-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- the process block
    ==========================================-->

<section id="process-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>The process</h2>
      </div>
      <!--/section-title--> 
      <!--process tab-->
      <div> 
        <!--tab nav-->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#concept" data-toggle="tab"><i class="fa fa-star-o"></i>
                <h5>01. Concept</h5>
                </a>
            </li>
            <li><a href="#prototype" data-toggle="tab"><i class="fa fa-copy"></i>
                <h5>02. Prototyping</h5>
                </a>
            </li>
            <li><a href="#design" data-toggle="tab"><i class="fa fa-laptop"></i>
                <h5>03. Design</h5>
                </a>
            </li>
            <li><a href="#development" data-toggle="tab"><i class="fa fa-code"></i>
                <h5>04. Development</h5>
                </a>
            </li>
        </ul>
        <!--/tab nav--> 
        <!--tab container-->
        <div class="tab-content"> 
          
          <!--tab nav item 1-->
          <div id="concept" class="tab-pane active"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="../../../pw2/webroot/img/tab-1.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Professional website design</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 1--> 
          
          <!--tab nav item 2-->
          <div id="prototype" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="../../../pw2/webroot/img/03-screenshot.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Sketch like a PRO</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 2--> 
      
           <!--tab nav item 3-->
          <div id="design" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="../../../pw2/webroot/img/02-screenshot.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Make the design</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 3-->     
      
          <!--tab nav item 4-->
          <div id="development" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="../../../pw2/webroot/img/01-screenshot.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Code like a star</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 4-->      
        </div>
        <!--/tab container--> 
        
      </div>
      <!--\process tab--> 
      
    </div>
  </div>
</section>

<!-- Company counter section
    ==========================================-->
<section id="company-counter" style="background-image:url(../../../pw2/webroot/img/count-bg.jpg);">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 wow fadeInDown">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-heart-o"></i><span class="counter">17</span>
            <p>Clients</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-envelope-o"></i><span class="counter">456</span>
            <p>Leads</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-folder-o"></i><span class="counter">8596</span>
            <p>Websites</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-coffee"></i><span class="counter">456</span>
            <p>Coffee</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Company counter section --> 

<!-- Testimonials Section
    ==========================================-->
<section id="testimonials-block" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item"> <img src="../../../pw2/webroot/img/team/01.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>
          <div class="item"> <img src="../../../pw2/webroot/img/team/02.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Rima Martin</strong> CEO Food Inc.</p>
          </div>
          <div class="item"> <img src="../../../pw2/webroot/img/team/03.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Joe Martin</strong> CEO Chat Inc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- latest news block
    ==========================================-->

<section id="latest-news-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>Latest news</h2>
        <a href="#">See the blog</a></div>
      <!--/section-title--> 
      
      <!--home article-->
      <article class="col-md-3 col-sm-6 col-xs-12">
        <header class="entry-header"> <a href="#"><img src="../../../pw2/webroot/img/04-screenshot.jpg" alt="image 1"></a>
          <a href="blog-post.html"><h6>10 Incredible Quotes To Guide Your Life</h6></a>
           <a href="#">Web-design</a> , <a href="#">Front-end</a> </header></a>
      </article>
      <!--/home article --> 
      
      <!--home article-->
      <article class="col-md-3 col-sm-6 col-xs-12">
        <header class="entry-header"> <img src="../../../pw2/webroot/img/02-screenshot.jpg" alt="image 1"> <a href="#">
          <h6>Responsive Website in 2017 – 
            Step by Step Guide</h6>
          </a> <a href="#">Web-design</a> </header>
      </article>
      <!--/home article --> 
      
      <!--home article-->
      <article class="col-md-3 col-sm-6 col-xs-12">
        <header class="entry-header"> <img src="../../../pw2/webroot/img/03-screenshot.jpg" alt="image 1"> <a href="#">
          <h6>10 Incredible Quotes To Guide Your Life</h6>
          </a> <a href="#">Web-design</a> , <a href="#">Front-end</a> </header>
      </article>
      <!--/home article --> 
      
      <!--home article-->
      <article class="col-md-3 col-sm-6 col-xs-12">
        <header class="entry-header"> <img src="../../../pw2/webroot/img/01-screenshot.jpg" alt="image 1"> <a href="#">
          <h6>HEADING 6 in use here</h6>
          </a> <a href="#">Web-design</a> </header>
      </article>
      <!--/home article --> 
      
    </div>
  </div>
</section>
<footer id="bottom-footer">
  <div class="container">
    <div class="row wow fadeInUp">
      <div class="col-md-4 col-sm-4 col-xs-12"> 
        <!--copyright-->
        <p class="copyright">© 2018 <a href="https://dcrazed.com/">Grit</a>. All rights reserved</p>
        <!--/copyright--> 
      </div>
      <!--bottom nav-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <nav class="bottom-nav">
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </nav>
      </div>
      <!--/bottom nav--> 
      
      <!--Social Links-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
      <!--/Social Links--> 
      
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="../../../pw2/webroot/js/bootstrap.js"></script> 
<script type="text/javascript" src="../../../pw2/webroot/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="../../../pw2/webroot/js/jquery.isotope.js"></script> 
<script src="../../../pw2/webroot/js/owl.carousel.js"></script> 
<script src="../../../pw2/webroot/js/jquery.waypoints.min.js"></script> 
<!-- Custom Javascripts
    ================================================== --> 
<script type="text/javascript" src="../../../pw2/webroot/js/main.js"></script> 
<script src="../../../pw2/webroot/js/wow.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script> 
<script>
    new WOW().init();
</script>