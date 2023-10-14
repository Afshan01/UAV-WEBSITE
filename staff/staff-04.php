<?php 

// staff-04.php

include('header.php');

// path
$current_session = "2022-2023";
$staff_details = "Advisor";
$staff_name = "Dr. Rashid Ali";
$staff_image = "../assets/img/staff/faculty02.JPG";
$staff_qualification = "Ph.D. (Computational Fluid Dynamics), M.Tech. (Thermal Engineering)";
$staff_designation = "Associate Professor";
$staff_profile = "Dr. Rashid Ali is presently working as an Associate Professor in the Department of Mechanical Engineering, Zakir Husain College of Engineering and Technology, Aligarh Muslim University Aligarh. He obtained his Doctor of Philosophy (Ph.D) in 2016, Master of Technology (M. Tech.) in 2002 and Bachelor of Engineering (B.E.) in 2000 from Department of Mechanical Engineering, ZHCET, AMU Aligarh. Dr. Rashid Ali is the In-charge of High Performance Computing (HPC) Lab. He has more than seventeen years of teaching experience. He served the department of mechanical engineering, Integral University, Lucknow for more than six years as Lecturer, Senior Lecturer and Assistant Professor. He taught various UG and PG courses like Applied Mechanics, Fluid Machinery, Automotive Engineering, Internal Combustion Engines, Power Plant Engineering and Combustion Engineering etc. Area of Specialization of Dr. Rashid Ali is Computational Fluid Dynamics, Flow Past Bluff Bodies, Laminar Flows, Mixed Convective Flows, and Heat Transfer. Dr. Rashid Ali published his research in many International/National Journals and Conferences. Dr. Rashid Ali also completed a CST UP funded research project in 2011 entitled \"Interaction of Non-Isothermal Counter Flowing Impinging Jets in Confined Geometries: A Numerical Study\", as a Research Associate."
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