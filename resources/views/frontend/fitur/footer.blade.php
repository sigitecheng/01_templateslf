<footer id="footer" class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <!-- <img src="assets/img/Comma.png" alt=""> -->
            <img
              class="ml-2 ps-4"
              src="./assets/img/logo.png"
              alt=""
              style="transform: scale(2.5)"
            />
          </a>
          <p>System Information Competency Students</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"
              ><i class="bi bi-instagram bx bxl-instagram"></i
            ></a>
            <a href="#" class="linkedin"
              ><i class="bi bi-linkedin bx bxl-linkedin"></i
            ></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Internships</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">Jobs</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">Competency</a>
            </li>
          </ul>
        </div>

        <div
          class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
        >
          <h4>Contact Us</h4>
          <p>
            Politeknik Negeri Batam <br />
            Batam, Kepulauan Riau<br />
            Indonesia <br /><br />
            <strong>Phone:</strong> +628 8888 888<br />
            <strong>Email:</strong> email@email<br />
          </p>
        </div>
      </div>
    </div>
  </div>


</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a
  href="#"
  class="back-to-top d-flex align-items-center justify-content-center"
  ><i class="bi bi-arrow-up-short"></i
></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> -->
<script>
  $(function () {
    var tallest = 0;
    $(".samakanintern").each(function () {
      var currentHeight = $(this).height();
      //console.log(currentHeight);
      if (currentHeight > tallest) {
        tallest = $(this).height();
      }
    });
    $(".samakanintern").height(tallest);
  });
</script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
</body>
</html>
