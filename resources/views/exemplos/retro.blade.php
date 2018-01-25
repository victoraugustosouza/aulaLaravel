<!DOCTYPE html>
 <html>
    <head>

      <title>retrô.</title>

      <!-- Compiled and minified CSS -->

      <link rel="stylesheet" href="{{asset('css/retro-home.css')}}">
      <link rel="stylesheet" href="{{asset('css/retro.css')}}">
      <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">


      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    </head>
    <body>
      <nav class="transparent z-depth-0">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><img src="img/logo.svg"</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="blog.html">blog</a></li>
            <li><a href="flea-market.html">flea market</a></li>
            <li><a href="eventos.html">eventos</a></li>
            <li><a href="contato.html">contato</a></li>

          </ul>
        </div>
      </nav>
      <section>
        <div class="row white" id="bloco-1">
          <div class="container">
            <div class="col l4 m6 s12">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, diam vel eleifend scelerisque, lectus tellus fringilla tellus,
                nec dapibus leo ex rutrum magna.
                Aliquam sodales odio nulla, vitae convallis sem dictum sed. Suspendisse rhoncus dignissim rhoncus.
                Donec et tortor vitae tortor fringilla malesuada vitae bibendum mi. Suspendisse tincidunt neque at augue facilisis imperdiet. In tempor, nulla et condimentum pulvinar,
                dui mauris egestas lectus, eu dignissim dolor velit quis ante.
              </p>
              <p>
                Quisque egestas tempor justo, quis molestie nisl ullamcorper semper. Mauris in sapien massa.
                Nullam commodo velit vel eros porttitor pulvinar. Sed nec placerat arcu. Sed quis gravida arcu.
              </p>
            </div>
            <div class="col l4 m6 s12">
              <p>
                Morbi nisi erat, aliquet ac purus vel, vulputate elementum sapien. Etiam eget urna quis est lacinia rutrum.
                In erat felis, porttitor dignissim turpis rutrum, accumsan egestas purus. Nunc quam mauris, cursus quis libero
                ut, eleifend malesuada ipsum.
             </p>
             <p><span> "Donec commodo arcu mauris, quis feugiat tellus pulvinar ut."</span></p>
             <p>
                Cras ullamcorper, nisi non placerat lobortis, est dolor auctor quam, vel sodales odio magna vel justo.
                Vestibulum ultricies metus at egestas accumsan.

             </p>
            </div>
            <div class="col l4 m6 s12">
              <p>
                  Donec commodo arcu mauris, quis feugiat tellus pulvinar ut.
                  Aliquam nisl est, euismod in convallis eget, laoreet vitae metus. Nunc ac consequat ligula, ut mattis ligula.
                  Morbi mattis, mauris quis accumsan molestie, nunc
                  risus blandit quam, id convallis elit diam a massa. Curabitur blandit maximus, nec porttitor erat pellentesque ut.
              </p>
              <p>
                Aenean sit amet auctor felis.
                Maecenas dapibus eu dui nec molestie. Vivamus at dolor nulla. Fusce lorem libero, imperdiet a augue id, ultricies scelerisque urna.
                Fusce vel quam id massa tempor malesuada.
              </p>
            </div>
          </div>
        </div>
      </section>
      <footer class="page-footer white">
          <div class="container">
            <div class="row">
              <div class="col l4 m6 s12 black-text" id="texto-footer">
                <img src="img/icones/map-location.svg"> Rio de Janeiro - RJ
              </div>
              <div class="col offset-l4 l4  m6 s12" id="social-network">
                  <a href="!#"><img src="{{asset('img/redes-sociais/instagram.svg')}}"></a>
                  <a href="!#"><img src="{{asset('img/redes-sociais/twitter.svg')}}"></a>
                  <a href="!#"><img src="{{asset('img/redes-sociais/facebook.svg')}}"></a>
                  <a href="!#"><img src="{{asset('img/redes-sociais/pin.svg')}}"></a>
              </div>
            </div>
          </div>
          <div class="footer-copyright white">
            <div class="container black-text">
            © 2018
            </div>
          </div>
      </footer>

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')"></script>
    </body>
</html>
