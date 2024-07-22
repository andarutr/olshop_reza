</main>
  <footer id="footer" class="footer dark-background">
     <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <P>Gd.Graha Krama Yudha Lt 4 Unit B</P>
					<P>Jalan warung Jati Barat No.04</P>
            <p></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>021-7945301-0821-2730-3931</span><br>
              <strong>Email:</strong> <span>cvbms@gmail.com</span><br>
            </p>
          </div>
        </div>


        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <?php if ($this->session->userdata('email') == "") { ?>
        <?php } else { ?>
				<div class="col-lg-3 col-md-6">
          <h4>Komentar</h4>
          <div class="social-links d-flex">
					<table>
					<tr>
						<td><h4>email</h4></td>
						<td> :</td>
						<td><input type="email" id="email" class="form-control" placeholder="masukan email"></td>
					</tr>
					<tr>
						<td><h4>suject</h4></td>
						<td> :</td>
						<td><input type="text" id="subject" class="form-control" placeholder="masukan email"></td>
					</tr>
					<tr>
						<td><h4>pesan</h4></td>
						<td> :</td>
						<td>	<textarea id="pesan" cols="45" class="form-control" rows="4"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
              <button class="btn btn-success" onClick="sendEmail()">submit</button>
            </td>
					</tr>


					</table>

						<?=form_close() ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div> 
    <div class="copyright text-center">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Toko CV.BMS</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="<?= base_url() ?>assets/toko_online/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/toko_online/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/toko_online/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/toko_online/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/toko_online/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>assets/toko_online/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/toko_online/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function sendEmail(){
      let email = $("#email").val();
      let subject = $("#subject").val();
      let pesan = $("#pesan").val();

      let url = "<?= site_url('home/sendTo') ?>"
      $.post(url, {
        email: email,
        subject: subject,
        pesan: pesan,
      }).done(function(){
        Swal.fire("success","Email sedang dikirim!", "success");
      })
    }
  </script>
</body>
</html>
