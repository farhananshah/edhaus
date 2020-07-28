<!DOCTYPE html>
<html>
<head>
  <?php $PREFIX="./";?>
  <?php include("./components/headers.php");?>
  <title>Edhaus</title>
</head>
<body>

  <!-- Navigation -->
  <?php include("./components/navigation.php");?>

  <div class="content">

    <!-- Splash -->
    <div class="splash">
      <img src="res/business-card.png"/>
    </div>

    <!-- About Us -->
    <div class="section about">
      <h2>About Us</h2>
      <p>
        Edhaus strives to empower and educate leaders in educational institutions and schools by
        offering training and professional development for their staff. Educational institutions are being
        charged with demands at all levels, in-person and online. In addition, they are expected to keep
        up with new research and effective practices. Edhaus can be a support because we know
        professional development is a key in meeting needs of today’s increasing demands for teaching
        and learning. We also provide customized trainings and workshops to clients outside of
        educational institutes on topics related to building effective teams, management, and Diversity.
      </p>
      <p>
        Farhana N. Shah holds a master’s degree and several certifications in Education. Her career
        spans over 20 years of teaching in the classroom, leading teams, evaluating teachers, and
        providing staff development in the U.S. and abroad. She possesses a proven history of
        successfully implementing key development and growth strategies.
      </p>
    </div>

    <!-- Services and Products -->
    <div class="section products">
      <h2>Services and Products</h2>
      <div class="products-wrapper">
        <div>
          <p>Online Teacher Performance and Evaluation System</p>
        </div>
        <div>
          <p>English Language Curriculum (coming soon)</p>
          <p>Trainings and Workshops for Educational Organizations</p>
        </div>
        <div>
          <p>Online Tutoring Platform (coming soon)</p>
        </div>
      </div>
      <a class="more" href="services">See more</a>
    </div>

    <!-- Testimonials -->
    <div class="section testimonials">
      <div class="testimonials-wrapper">
        <div class="testimonial">
          "<i>The Public Affairs Section of the U.S. Embassy in Nepal programmed Ms. Farhana Shah, a Staff Development Teacher of Montgomery Country Public Schools with the State Department's U.S. Speaker program from February 13 — 22, 2011. Over the course of ten days Ms. Shah gave teacher training workshops on enhancing instruction techniques, curriculum development, leadership skills, classroom management, and effective implementation of extracurricular activities to teachers in Kathmandu and Nepalgunj. Ms. Shah also gave two sessions at the international Nepal English Language Teachers' Association's annual conference in Kathmandu and Pokhara. In addition, Ms. Shah gave public presentations to youth, students, teachers, and community leaders on a variety of topics related to U.S. society, culture, and education. Her command of the Urdu language was extremely useful in the programs outside of Kathmandu, enabling her to intimately connect with her audiences. Her programs impacted more than 300 individuals in total.</i>"
          <p>Amanda Jacobsen, U.S. Embassy in Nepal</p>
        </div>
      </div>
      <a class="more" href="testimonials">See more</a>
    </div>

    <!-- Contact us -->
    <div class="section contact">
      <h2>Contact Us</h2>
      <div class=contacts-wrapper>
        <a class="contact-icon" href="https://twitter.com/farhananshah">
          <img src="res/twitter.svg"/>
          <p>Twitter</p>
        </a>
        <a class="contact-icon" href="https://www.instagram.com/farhananshah/">
          <img src="res/instagram.svg"/>
          <p>Instagram</p>
        </a>
        <a class="contact-icon" href="mailto:farhana@shah.org">
          <img src="res/mail.svg"/>
          <p>Email</p>
        </a>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <?php include("./components/footer.php");?>

</body>
</html>
