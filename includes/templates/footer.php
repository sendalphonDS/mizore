<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre<span> gdlwebcamp</span></h3>
      <p>Mauris rhoncus, neque in semper luctus, tellus nisi efficitur purus, sit amet tincidunt dolor sapien at turpis. Nullam auctor tellus id tempor mollis. Suspendisse sit amet finibus nibh. Nulla sagittis malesuada sapien, vel mollis erat
        lobortis vel.</p>
    </div>
    <div class="ultimos-tweets">
      <h3>Ultimos<span> tweets</span></h3>
      <ul>
        <li>Sed vel metus est. Aliquam erat volutpat. Aliquam ullamcorper, tortor malesuada placerat posuere, leo sapien auctor turpis, in laoreet erat purus id odio.</li>
        <li>Sed vel metus est. Aliquam erat volutpat. Aliquam ullamcorper, tortor malesuada placerat posuere, leo sapien auctor turpis, in laoreet erat purus id odio.</li>
        <li>Sed vel metus est. Aliquam erat volutpat. Aliquam ullamcorper, tortor malesuada placerat posuere, leo sapien auctor turpis, in laoreet erat purus id odio.</li>
      </ul>

    </div>
    <div class="menu">
      <h3>redes<span> sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>

      </nav>
    </div>
  </div>
  <p class="copyrigth">
    Todos los derechos Reservados GDLWEBCAMP 2020.
  </p>
</footer>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
  window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
</script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.lettering.js"></script>


<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if ($pagina ==  'invitados' || $pagina == 'index') {
  echo '<script src="js/jquery.colorbox-min.js"></script>';
} elseif ($pagina == 'conferencia') {
  echo '<script src="js/lightbox.js"></script>';
}

?>

<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/b10cf72e2fe34f78a52297b6a/b190c71e790549871693e5518.js");</script>
</body>

</html>