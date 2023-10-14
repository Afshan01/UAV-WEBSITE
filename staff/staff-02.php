<?php 

// staff-02.php

include('header.php');

// path
$current_session = "2022-2023";
$staff_details = "Chairman";
$staff_name = "Prof. Mohammad Muzammil";
$staff_image = "../assets/img/staff/chairman.jpg";
$staff_qualification = "M.Sc.Engineering, Ph.D , PhD";
$staff_designation = "Professor";
$staff_profile = "Dr. M. Muzammil is Professor in the department and also In charge of the Ergonomics Research Division. He is teaching Industrial Engineering, Operations Management, Economics & Management, Ergonomics. His research interest is Human response to vibration and noise, Noise control engineering, Human Computer Interaction and Human Cognitive performance. He has published more than sixty five papers in various International and National journals and conferences. Some of the journals in which his articles have been published are Quality Engineering, Theoretical issues in Ergonomics Science, Occupational Ergonomics, Journal of Occupational Safety and Ergonomics, Work: A journal of Prevention, Assessment and Rehabilitation and Journal of Low Frequency Noise, Vibration & Active Control etc. He has B.Sc. Engineering (Mechanical) and M.Sc. Engineering (Industrial and Production Engineering) from AMU, Aligarh. He has self supplicated his PhD in Ergonomics. He has around twenty five years of teaching and research experience to his credit."
?>

  <main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
      <div class="container">
        <div class="section-header">
          <h2><?php echo"$staff_details"?> Details</h2>
          <p><?php echo"$current_session"?></p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo"$staff_image"?>" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2><?php echo"$staff_name"?></h2>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <p><b>Qualification:</b> <?php echo"$staff_qualification"?></p>
              <P><b>Designation:</b> <?php echo"$staff_designation"?></p>

              <p><b>Profile: </b> <?php echo"$staff_profile"?></div>
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

<?php 

include('footer.php');

?>