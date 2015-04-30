  <!-- Site Showcase -->
  <div class="site-showcase">
    <div class="slider-mask overlay-transparent"></div>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
      <?php include('slider.php'); ?>
    </div>
    <!-- End Hero Slider --> 
    <!-- Site Search Module -->
    <div class="site-search-module">
      <div class="container">
        <div class="site-search-module-inside">
          <?php include('searchform.php'); ?>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="featured-blocks">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 featured-block"> <img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt="Search Anywhere" class="img-thumbnail">
              <h3>Search From Anywhere</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
            <div class="col-md-4 col-sm-4 featured-block"> <img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt="Friendly Agents" class="img-thumbnail">
              <h3>Friendly Agents</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
            <div class="col-md-4 col-sm-4 featured-block"> <img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt="Search Anywhere" class="img-thumbnail">
              <h3>Buy or Rent</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-40"></div>
    <div class="container">
      <div class="row">
          <div class="property-columns" id="latest-properties">
              <div class="col-md-12">
                <div class="block-heading">
                  <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Recently Listed</h4>
                  <a href="simple-listing-fw.html" class="btn btn-primary btn-sm pull-right">View more properties <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              <?php include('home_recentlistings.php'); ?>
          </div>
        </div>
      </div>
      <div id="featured-properties">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-heading">
                <h4><span class="heading-icon"><i class="fa fa-star"></i></span>Featured Properties</h4>
              </div>
            </div>
          </div>
          <div class="row">
              <?php include('home_featuredlistings.php'); ?>
          </div>
        </div>
      </div>
      <div class="padding-tb45 bottom-blocks">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-4 features-list column">
                      <h3>Theme features</h3>
                    <ul>
                      <li>
                              <div class="icon"><i class="fa fa-umbrella"></i></div>
                           <div class="text">
                                  <h4>Lots of possibilities</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-list"></i></div>
                           <div class="text">
                                  <h4>Property list view</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-search"></i></div>
                           <div class="text">
                                  <h4>Advance Search Options</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-users"></i></div>
                           <div class="text">
                                  <h4>Agents Profile</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                    </ul> 
                </div>
                  <div class="col-md-4 col-sm-4 popular-agent column">
                      <h3>Popular Agent</h3>
                    <a href="agent-detail.html"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a> 
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <h4><a href="agent-detail.html">Brooklyn Coyle</a></h4>
                              <a href="agent-detail.html" class="btn btn-sm btn-primary">more details</a>
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                              <ul class="contact-info">
                                  <li><i class="fa fa-phone"></i> +87 6543 210</li>
                               <li><i class="fa fa-envelope"></i> brook@gmail.com</li>
                           </ul>
                       </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-4 latest-testimonials column">
                      <h3>Client Testimonials</h3>
                    <ul class="testimonials">
                      <li>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                          <img src="http://placehold.it/80x80&amp;text=IMAGE+PLACEHOLDER" alt="Happy Client" class="testimonial-sender">
                              <cite>Mellisa - <strong>My company</strong>
                              <br><a href="#">www.companyurl.com</a>
                           </cite>
                        </li>
                    </ul> 
                </div>
             </div>
         </div>
      </div>
     	<div class="container">
         <div class="block-heading">
            <h4><span class="heading-icon"><i class="fa fa-users"></i></span>Our Partners</h4>
            <a href="about.html" class="btn btn-primary btn-sm pull-right">All partners <i class="fa fa-long-arrow-right"></i></a>
         </div>
         <div class="row">
            <ul class="owl-carousel" id="clients-slider" data-columns="6" data-autoplay="yes" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="2" data-items-tablet="4">
              <li class="item"> <a href="#"><img src="images/partner-1.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-2.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-3.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-4.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-5.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-1.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-2.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-3.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-4.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-5.png" alt=""></a> </li>
            </ul>
         </div>
      </div>
    </div>
  </div>