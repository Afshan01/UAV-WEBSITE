<?php 

// projects.php

include('header.php');

// path

$project_path_01  = "./assets/img/projects/project01.jpg";
$project_path_02  = "./assets/img/projects/project02.jpg";
$project_path_03  = "./assets/img/projects/project03.jpg";

?>

  <main id="main">

    <!-- ======= Hotels Section ======= -->
    <!-- This will become the projects Section -->
    <section id="hotels" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Projects</h2>
          <p>Her are some of our projects</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="<?php echo"$project_path_01" ?>" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Project 1</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate consequuntur commodi neque quas dicta quaerat quae eaque amet alias sunt dolorem, repellat voluptatibus aperiam nemo eos optio soluta perspiciatis error!</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="<?php echo"$project_path_02" ?>" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Project 2</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill-half-full"></i>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolores, nesciunt soluta distinctio eum cum veniam ex libero deleniti placeat maiores, quisquam, earum nisi commodi cumque vero veritatis minus corrupti?</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="<?php echo"$project_path_03" ?>" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Project 3</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum explicabo non excepturi distinctio id in itaque odio dolore saepe repellat? Magni ad molestias odit! Inventore laudantium quis recusandae in officiis.</p>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Hotels Section -->


  </main><!-- End #main -->
  
<?php 

include('footer.php');

?>