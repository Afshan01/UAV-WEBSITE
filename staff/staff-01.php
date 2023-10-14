<?php 

// staff-01.php

include('header.php');

// path
$current_session = "2022-2023";
$staff_details = "Principal";
$staff_name = "Prof. M. M. Sufyan Beg";
$staff_image = "../assets/img/staff/Principal.jpg";
$staff_qualification = "Ph.D., M.Tech., B.Tech.";
$staff_designation = "Professor";
$staff_profile = "Prof. M. M. Sufyan Beg obtained his B.Tech. (Electronics) degree from the Aligarh Muslim University, India in 1992 with First Rank. 
                      He obtained his M.Tech. (Microelectronics) degree from IIT Kanpur, India in 1994. Thereafter, he joined the Department of Electronics Engineering, Aligarh Muslim University, India as a member of the faculty. 
                      He has been a Lecturer, a Senior Lecturer and then a Reader in the Department of Computer Engineering at the same University. 
                      While on study leave from there, he obtained his Ph.D. degree in the area of Computer Technology from IIT Delhi, India in 2004. 
                      He also visited the University of California at Berkeley as a BT Fellow from November 2005 to October 2006. 
                      He served as Professor at the Department of Computer Engineering at Jamia Millia Islamia (A Central University), New Delhi from March 2007 to January 2014. 
                      Over there, he also served as the Head of the Department of Computer Engineering from February 2008 to February 2011. 
                      Currently, he is a Professor and Chairman at the Department of Computer Engineering at the Aligarh Muslim University. 
                      He is also serving as the Principal of Z. H. College of Engineering and Technology since August 2015."
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