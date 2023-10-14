<?php 

// staff-03.php

include('header.php');

// path
$current_session = "2022-2023";
$staff_details = "Advisor";
$staff_name = "Prof. Syed Fahad Anwer";
$staff_image = "../assets/img/staff/faculty01.JPG";
$staff_qualification = "PhD";
$staff_designation = "Professor";
$staff_profile = "Dr. Anwer obtained his Bachelors and Masters degree in Mechanical Engineering and Thermal Science with a specialization in CFD from Aligarh Muslim University in 2000 and 2002 respectively. He then proceeded to Department of Applied Mechanics, IIT, New Delhi and completed his Doctorate in 2006. He was awarded the Best Post graduate project at IIT Delhi in 2006 for his doctoral work. He then joined Department of Mechanical Engineering in 2007 as Assistant Professor. After spending some time at this department he proceeded to Laboratoire d'Informatique pour la Mecanique et les Sciences de I'Ingenieur, (LIMSI), Paris, France on CNRS fellowship to complete a Post Doctoral programme in 2009-2010. Since then he is serving in the Department of Mechanical Engineering, ZHCET, AMU Aligarh. He has also served as Visiting Faculty in the Department of Mechanical Engineering, IIT Kanpur in 2015-16. He loves teaching and has taught a number of courses to Bachelors and Masters students in his area of interest particularly Fluid Mechanics and Computational Heat and Fluid Flow. His research interests are Turbulence, High Temerature Gradient Flows, Non Oberbeck-Boussinesq Flows, Heat Transfer in Enclosures and Annuli, Insect Aerodynamics, Fluid Structure Interaction. His Major Research Publications include Journal of Computational Physics, Physics of Fluid, Computers and Structures, Numerical Heat Transfer Part A: Applications, Industrial Engg and Chemistry Research, International Journal of Thermal Sciences, Heat Transfer Engineering"
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