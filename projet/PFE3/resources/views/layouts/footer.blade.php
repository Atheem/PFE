<!-- Footer -->
<div class="container contact_us_rectangle  ">
    <span class="rectangle_title ">Contact</span>
    <form class="contact_form" method="post" action="{{ route('contact') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
                <div class="input-field col s12">
                  <input id="name" type="text" name="mainName"  class="validate" placeholder="Nom">

                </div>
              </div>
              <div class="form-group">
                <div class="input-field col s12">
                  <input id="clientSubject" type="text" name="clientSubject"  class="validate" placeholder="Sujet">

                </div>
              </div>
              <div class="form-group">
                <div class="input-field col s12">
                  <input id="clientMail" type="email" name="clientMail"  class="validate" placeholder="Email">

                </div>
              </div>
              <div class="form-group">
                <div class="input-field col s12">
                  <textarea id="clientMessage" name="clientMessage" style="" class="materialize-textarea"
                    class="validate" placeholder="Message"></textarea>

                </div>
              </div>
      <button type="submit" name="sendBtn" class="sendbtn">
        <div> Envoyer </div>
      </button>
    </form>
  </div>
<section id="footer">
    <div class="container footer_content">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Liens</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="">Accueil</a></li>
            <li><a href="">Top Cars</a></li>
            <li><a href="">Espace agence</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Mentions Légales</a></li>

          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Restez en Contact</h5>
          <ul class="list-unstyled quick-links">
          <li><a href="mailto:contact@mango.com">contact@mango.com</a></li>
           <li><a href="">000000000</a></li>
           <li><a href="">000000000</a></li>


          </ul>

        </div>




        <div class="col-xs-12 col-sm-4 col-md-4 contact_mobile_center ">
          <a href="contact_us" class=" btn contact_btn_mobile ">Contact us</a></div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 socials">
          <h5>Suivez-nous</h5>
          <!-- <ul class="list-unstyled list-inline social">
            <li class="list-inline-item"><a id="face" href="/"><img src="Assets/Facebook.svg" alt="" style="height:30px" class="face"></a></li>
            <li class="list-inline-item"><a href=""><img src="Assets/Instagram.svg" alt="" style="height:30px"></a></li>
            <li class="list-inline-item"><a href="/"> <img src="Assets/Linkedin.svg" alt="" style="height:30px"></a></li>
            <li class="list-inline-item"><a href=""><img src="Assets/Dribble.svg" alt="" style="height:30px"></a></li>
          </ul> -->
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social2" id="social2"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social3" id="social3"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social4" id="social4"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social5" id="social5"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social1" id="social1"></span></a>
          </li>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6 right-reserved">&copy All right Reversed. Mango</p>
        </div>
      </div>
    </div>

  </section>
  <!--end footer-->





    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'flip',
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</body>

</html>
