<footer id="footer" class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <!-- <img src="assets/img/Comma.png" alt=""> -->
            <img
              class="ml-2 ps-4"
              src="/assets/gambar/icon/iconwanindokonsultan.png"
              alt=""
              style="transform: scale(2.5)"
            />
          </a> <br>
          <p style="color: black;">PT. Wan Indo Konsultan</p>
          <div class="social-links mt-3" style="color: black;">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        </div>
        
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4 style="color: #ffA500" >Layanan Kami</h4>
          <ul>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Beranda</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Tentang Kami</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Jasa Kami</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Produk Layanan</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Portfolio</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Mitra Kami</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Alur Permohonan SLF</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Alur Permohonan PBG</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Permohonan SLF</a>
            </li>
            
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Permohonan PBG</a>
            </li>
            
          </ul>
        </div>

        <div
          class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
        >
          <h4 style="color: #ffA500;">Kontak Kami</h4>
          <p>
            Jln. Raya Purwakarta, KP. Gembol Sari No 35 Kelurahan Kertamulya Kecamatan Padalarang, Kabupaten Bandung Barat Provinsi Jawa Barat
            <br><br><strong><i class="fas fa-phone mr-2"></i> Phone :</strong> <br> 082129208716<br /> <br>
            <strong><i class="fas fa-envelope"></i> Email :</strong> <br> ptwanindokonsultan.bdg@gmail.com<br />
          </p>
        </div>
      </div>
    </div>
  </div>


</footer>
<!-- End Footer -->

<div style="background: #ffA500;" id="preloader"></div>
{{-- <a style="color: #ffA500;"
  href="#"
  class="back-to-top d-flex align-items-center justify-content-center"
  ><i style="color: white;" class="bi bi-arrow-up-short"></i
></a> --}}
<div class="loader_bg">
  <div class="loader"><img src="/assets/frontend/images/loading.gif" alt="#" /></div>
</div>

<div class="" style="background: #ffA500; text-align: center; color: white; padding: 10px 0; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; background: #ffA500;"></div>
  <a href="https://wa.me/6281321455855" style="color: white; text-decoration: none; font-weight: bold; position: relative; z-index: 1; font-size:12px;">
      Developed By sarigit.com
  </a>
</div>

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
