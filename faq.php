<?php 

// faq.php

include('header.php');

?>

  <main id="main">

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is a UAV? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  A UAV, or an unmanned aerial vehicle, is an aircraft that is operated without a human pilot on board. It can be controlled remotely or fly autonomously using pre-programmed flight plans.                  
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What are the different types of UAVs? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  There are several types of UAVs, including fixed-wing, rotary-wing, and hybrid UAVs. Fixed-wing UAVs are similar to airplanes and have wings that provide lift and control. Rotary-wing UAVs, such as quadcopters, use rotors to generate lift and control. Hybrid UAVs combine features of both fixed-wing and rotary-wing UAVs.                  
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">What are the benefits of using UAVs? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  UAVs have several benefits, including their ability to access hard-to-reach areas, collect data from remote locations, and perform tasks that are too dangerous for humans. They can also be used for surveillance, search and rescue operations, and environmental monitoring.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Do I need a license to fly a UAV? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Yes, in most countries, you need a license to fly a UAV. The requirements for obtaining a license vary depending on the country and the type of UAV you want to fly.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What are the safety guidelines for flying a UAV?  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p> To ensure safe operation of your UAV, follow these guidelines:</p>
                    <p>- Fly your UAV below 400 feet above ground level.</p>
                    <p>- Keep your UAV in sight at all times.</p>
                    <p>- Do not fly your UAV near airports or other restricted airspace.</p>
                    <p>- Do not fly your UAV over people or moving vehicles.</p>
                    <p>- Respect others’ privacy when flying your UAV.<p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">How do I get involved in a local UAV club?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  To get involved in a local UAV club, search online for clubs in your area or ask other drone enthusiasts for recommendations. You can also check with your local hobby shop or community center to see if they know of any clubs in the area.
                  </p>
                </div>
              </li>

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

  </main><!-- End #main -->

<?php 

include('footer.php');

?>