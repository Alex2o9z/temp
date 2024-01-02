<section id="contact">
      <h1 class="section-header">Liên hệ với chúng tôi</h1>

      <div class="contact-wrapper">

        <!-- Left contact page -->

        <form id="contact-form" method="post" action="upcontact.php" hre class="form-horizontal" role="form">

          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="name" placeholder="HỌ TÊN" name="name" value="" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <input type="url" class="form-control" id="url" placeholder=" Link bài viết " name="url" value="" required>
            </div>
          </div>

          <textarea class="form-control1" rows="10" placeholder="ĐÓNG GÓP Ý KIẾN" name="message" required></textarea>

          <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
            <div class="alt-send-button">
              <i class="fa fa-paper-plane lol"></i><span class="send-text">GỬI</span>
            </div>

          </button>

        </form>

        <!-- Left contact page -->

        <div class="direct-contact-container">

          <ul class="contact-list">
            <li class="list-item"><i id="icon" class="fa fa-map-marker fa-2x"><span class="contact-text place">Ý kiến đi đừng ngại</span></i></li>

            <li class="list-item"><i id="icon" class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                    href="tel:1-212-555-5555" title="Gọi ngay">088889999</a></span></i></li>

            <li class="list-item"><i id="icon" class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a
                    href="mailto:#" title="Gửi mail">huynhkanh24@gamil.com</a></span></i></li>

          </ul>

          <hr>
          <ul class="social-media-list">
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-github fa-xl" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-facebook fa-xl" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-instagram fa-xl" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa-brands fa-twitter fa-xl" aria-hidden="true"></i></a>
            </li>
          </ul>
          <hr>

          <div class="copyright">THANKS</div>

        </div>

      </div>


      <div class="slideshow-container">
        <div class="mySlider fade">
          <img class="anh_slider" src="./Assets/img_silder/mon1.jpg" style="width:100%" />

        </div>
        <div class="mySlider fade">
          <img class="anh_slider" src="./Assets/img_silder/mon2.jpg" style="width:100%" />

        </div>
        <div class="mySlider fade">
          <img class="anh_slider" src="./Assets/img_silder/mon3.jpg" style="width:100%" />

        </div>
        <div class="mySlider fade">
          <img class="anh_slider" src="./Assets/img_silder/mon4.jpg" style="width:100%" />

        </div>
        <div class="mySlider fade">
          <img class="anh_slider" src="./Assets/img_silder/mon5.jpg" style="width:100%" />

        </div>
        <a class="prev" onclick="plusSlider(-1)">&#10094;</a>
        <a class="next" onclick="plusSlider(1)">&#10095;</a>
      </div>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlider(1)" hidden></span>
        <span class="dot" onclick="currentSlider(2)" hidden></span>
        <span class="dot" onclick="currentSlider(3)" hidden></span>
        <span class="dot" onclick="currentSlider(4)" hidden></span>
        <span class="dot" onclick="currentSlider(5)" hidden></span>
      </div>

    </section>