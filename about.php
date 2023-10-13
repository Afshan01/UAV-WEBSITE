<?php 

// about.php

include('header.php');

?>



  <!-- Experiment starts -->
  
<?php
// Mission statement
$mission_statement = "Our mission is to promote the safe and responsible use of unmanned aerial vehicles (UAVs) for recreational and educational purposes.";

// History
$history = "Our club was founded in 2015 by a group of drone enthusiasts who wanted to share their passion for UAVs with others. Since then, we have grown to become one of the largest and most active UAV clubs in the region. Our members have participated in numerous competitions and events, and we are proud to have won several awards for our achievements.";

// Membership
$membership = "Membership in our club is open to anyone who shares our passion for UAVs. There are no fees or requirements to join, and we welcome members of all skill levels.";

// Leadership
$leadership = array(
    "President" => "John Smith",
    "Vice President" => "Jane Doe",
    "Treasurer" => "Bob Johnson",
    "Secretary" => "Samantha Lee"
  );

// Events
$events = array(
  array(
    "title" => "Fly-In",
        "date" => "October 15, 2023",
        "location" => "Dehradun Airport",
        "description" => "Join us for a day of flying and fun! Bring your UAV and show off your skills, or just come to watch and learn."
    ),
    array(
      "title" => "Competition",
      "date" => "November 12, 2023",
      "location" => "Rajpur Stadium",
      "description" => "Put your skills to the test in our annual UAV competition. Prizes will be awarded for the top performers."
    )
);

// Training
$training = array(
    array(
        "title" => "Flight Instruction",
        "description" => "Learn the basics of UAV flight from our experienced instructors. We offer both classroom and hands-on training."
    ),
    array(
        "title" => "Safety Course",
        "description" => "Stay safe while flying your UAV with our comprehensive safety course. Topics include pre-flight checks, emergency procedures, and more."
    )
);

// Fleet
$fleet = array(
    array(
        "make" => "DJI",
        "model" => "Phantom 4 Pro",
        "description" => "A versatile quadcopter with advanced features such as obstacle avoidance and a 4K camera."
    ),
    array(
        "make" => "Parrot",
        "model" => "Bebop 2",
        "description" => "A lightweight drone with a high-quality camera and long battery life."
    )
);

// Community outreach
$outreach = array(
    array(
        "title" => "STEM Education Program",
        "description" => "We partner with local schools to provide STEM education programs that teach students about UAV technology and its applications."
    ),
    array(
        "title" => "Search and Rescue Support",
        "description" => "We work with local emergency services to provide UAV support for search and rescue operations."
    )
  );

  // Sponsors
$sponsors = array(
    array(
        "name" => "ABC Corporation",
        "logo_url" => "/images/abc_logo.png"
      ),
      array(
        "name" => "XYZ Corporation",
        "logo_url" => "/images/xyz_logo.png"
        )
      );

      // Contact information
      $contact_info = array(
        array(
          'type' => 'Email',
          'value' => 'info@uavclub.com'
        ),
        array(
          'type' => 'Phone',
          'value' => '+91-1234567890'
        ),
        array(
          'type' => 'Address',
          'value' => '123 Main Street, Dehradun, Uttarakhand'
        ),
);

?>

<!-- <h1>About Us</h1>

<h2>Mission Statement</h2>
	<p><?php echo $mission_statement; ?></p>
  
	<h2>History</h2>
	<p><?php echo $history; ?></p>
  
	<h2>Membership</h2>
	<p><?php echo $membership; ?></p> -->

	<!-- <h2>Leadership</h2>
	<ul>
    <//?php foreach ($leadership as $role => $name) { ?>
			<li><?//php echo $role . ': ' . $name; ?></li>
		<?//php } ?>
	</ul> -->
  
	<!-- <h2>Events</h2> -->
	<ul>
		<?//php foreach ($events as $event) { ?>
			<!-- <li>
				<h3><?php echo $event['title']; ?></h3>
				<p><strong>Date:</strong> <?php echo $event['date']; ?></p>
				<p><strong>Location:</strong> <?php echo $event['location']; ?></p>
				<p><?php echo $event['description']; ?></p>
			</li> -->
      <?//php } ?>
    </ul>

    <!-- <h2>Training</h2> -->
    <ul>
      <?//php foreach ($training as $program) { ?>
        <!-- <li>
				<h3><?php echo $program['title']; ?></h3>
				<p><?php echo $program['description']; ?></p>
			</li> -->
      <?//php } ?>
	</ul>

	<!-- <h2>Fleet</h2> -->
  <ul>
    <?//php foreach ($fleet as $uav) { ?>
            <!-- <li><strong><?//php echo $uav['make'] . ' ' . $uav['model']; ?>:</strong> <?php echo $uav['description']; ?></li> -->
        <?//php } ?>
      </ul>

      <!-- <h2>Community Outreach</h2> -->
      <ul>
        <?//php foreach ($outreach as $project) { ?>
            <!-- <li><strong><?//php echo $project['title']; ?>:</strong> <?php //echo $project['description']; ?></li> -->
            <?//php } ?>
    </ul>

    <!-- <h2>Sponsors</h2> -->
    <ul>
        <?//php foreach ($sponsors as $sponsor) { ?>
          <li><img src="<?//php echo $sponsor['logo_url']; ?>" alt="<?php //echo $sponsor['name']; ?> Logo"></li>
          <?//php } ?>
        </ul>
        
        <!-- <h2>Contact Information</h2> -->
        <ul>
        <?//php foreach ($contact_info as $info) { ?>
            <li><strong><?//php echo $info['type']; ?>:</strong> <?//php echo $info['value']; ?></li>
            <?//php } ?>
    </ul>

    <!-- Experiment ends -->

    <main id="main">


    <!-- ======= Mission statement ======= -->
    <section id="mission">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
        <h2>Mission Statement</h2>
        <p><?php echo $mission_statement; ?></p>
        </div>
      </div>
    </section>

    <!-- ======= History ======= -->
    <section id="history">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>History</h2>
          <p><?php echo $history; ?></p>
        </div>
      </div>
    </section>

    <!-- ======= Membership ======= -->
    <section id="membership">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Membership</h2>
          <p><?php echo $membership; ?></p>
        </div>
      </div>
    </section>
    

    <!-- ======= Leadership ======= -->
    <section id="leadership">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Leadership</h2>
          <ul>
            <?php foreach ($leadership as $role => $name) { ?>
            <li><?php echo $role . ': ' . $name; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </section>

    <!-- ======= Events ======= -->
    <section id="events">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
        <h2>Events</h2>
        <ul>
          <?php foreach ($events as $event) { ?>
            <li>
              <h3><?php echo $event['title']; ?></h3>
              <p><strong>Date:</strong> <?php echo $event['date']; ?></p>
              <p><strong>Location:</strong> <?php echo $event['location']; ?></p>
              <p><?php echo $event['description']; ?></p>
            </li>
            <?php } ?>
          </ul>

          <h2>Training</h2>
          <ul>
            <?php foreach ($training as $program) { ?>
              <li>
              <h3><?php echo $program['title']; ?></h3>
              <p><?php echo $program['description']; ?></p>
            </li>
            <?php } ?>
        </ul>

        </div>
      </div>
    </section>
    
    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>
      
      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section> -->
    <!-- End Gallery Section -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about">
      <div class="container position-relative" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
              accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
              est ut optio sequi unde.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Downtown Conference Center, New York</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>10-12 December</p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Supporters Section ======= -->
    <!-- <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- End Sponsors Section -->

    <!-- ======= Subscribe Section ======= -->
    <!-- <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
        </div>

        <form method="POST" action="#">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input type="text" class="form-control" placeholder="Enter your Email">
              <button type="submit" class="ms-2">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section> -->
    <!-- End Subscribe Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <!-- <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                  <select id="ticket-type" name="ticket-type" class="form-select">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section> -->
    <!-- End Buy Ticket Section -->

  </main><!-- End #main -->

<?php 

include('footer.php');

?>