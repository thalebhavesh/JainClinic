
  <?php include 'header.php';?>

  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Contact Us -->
    <section class="p-t-b-150"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>GET IN TOUCH</h4>
          <hr>
          
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="*Name">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="*Email">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="*Phone">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Department">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="*I was wondering about availability and rates. I need help with the following:"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- BOXES -->
    <section class="contact-box">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Location -->
          <div class="col-md-8">
            <div class="boxes-in">
              <h6>Jain Care And Cure HOSPITAL INFO</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p>Bamangaon, Gothi, Maharashtra 
                    Alibag</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p>+91 9527459656</p>
                  <p> 02141 226585</p>
                </li>
                <li> <i class="fa fa-envelope"></i>
                  <p>jainsanjeev@gmail.com</p>
                  <p>doctor@medical.com</p>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                  <p>Mon-Fri: 8AM - 4PM</p>
                  <p>Sat-Sun: 8AM - 4PM</p>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- NEWSLETTER -->
          <div class="col-md-4">
            <div class="boxes-in">
              <h6>NETWORKS</h6>
              
              <!--======= FOOTER ICONS =========-->
              <ul class="social_icons">
                <li class="facebook"><a href="#."> <i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#."> <i class="fa fa-twitter"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- MAP 
    <section class="map-block margin-top-100">
      <div class="map-wrapper" id="map-canvas" data-lat="23.740051" data-lng="90.371239" data-zoom="13" data-style="1"></div>
      <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="23.740051" data-lng="90.371239" data-string="Medical Hospital"></a> </div>
    </section>
  </div>
  -->
  <!-- Footer -->

  <?php include 'footer.php';?>