<?php
  $valid_index_html = "https://validator.w3.org/nu/?doc=http%3A%2F%2Fprovaironsecurity2.altervista.org%2Findex.php";
  $valid_security_html = "https://validator.w3.org/nu/?doc=http%3A%2F%2Fprovaironsecurity2.altervista.org%2Fsecurity.php";
  $valid_controls_html = "https://validator.w3.org/nu/?doc=http%3A%2F%2Fprovaironsecurity2.altervista.org%2Fcontrols.php";
  $valid_statistic_html = "https://validator.w3.org/nu/?doc=http%3A%2F%2Fprovaironsecurity2.altervista.org%2Fstatistic.php";
  $valid_contact_html = "https://validator.w3.org/nu/?doc=http%3A%2F%2Fprovaironsecurity2.altervista.org%2Fcontact.php";
  $myPage = $_SERVER['PHP_SELF'];
  // $path_index = "http://provaironsecurity2.altervista.org/index.php";
  // $path_security = "http://provaironsecurity2.altervista.org/security.php";
  // $path_controls = "http://provaironsecurity2.altervista.org/controls.php";
  // $path_statistic = "http://provaironsecurity2.altervista.org/statistic.php";
  // $path_contact= "http://provaironsecurity2.altervista.org/contact.php";
  $path_index = "index.php";
  $path_security = "security.php";
  $path_controls = "controls.php";
  $path_statistic = "statistic.php";
  $path_contact= "contact.php";

  $pathArray = [
    "index.php" => $valid_index_html,
    "security.php" => $valid_security_html,
    "controls.php" => $valid_controls_html,
    "statistic.php" => $valid_statistic_html,
    "contact.php" => $valid_contact_html
];
 ?>


<footer class="footer">

  <div class="footer__Logobox">
    <img src="images/logo.png" alt="logo" class="footer__logo">
  </div>

  <div class="boxFooter">

    <ul class="footer__list u-margin-bottom-medium">
      <li class="footer__items"><a href="contact.php#id_section-compagnia" class="footer__link"><p class="paragraph">Compagnia</p></a></li>
      <li class="footer__items"><a href="contact.php#id_section-trovaci" class="footer__link"><p class="paragraph">Trovaci</p></a></li>
      <li class="footer__items"><a href="contact.php#id_section-contatti" class="footer__link"><p class="paragraph">Contattaci</p></a></li>
      <li class="footer__items"><a href="contact.php#id_section-fonti" class="footer__link"><p class="paragraph">Fonti</p></a></li>
    </ul>

    <div class="boxFooter__separator"></div>

    <div class="boxFooter__text u-margin-top-small">
      <p class="paragraph">
        Costruito da Gabriele Lizzos e Alessandro Fatone.
        Tutti i diritti di Copyright per il testo fornito vanno agli autori delle varie fonti (vedi sezioni fonti); mentre per quanto riguarda il sito web tutti i crediti vanno agli autori del sito.
      </p>
    </div>
    <br>
    <div class="flex-grid u-center-text u-margin-bottom-none">
      <div class="col">
        <p>
          <a target="_blank" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&doc=http%3A%2F%2Fironsecurity.altervista.org%2Findex.php#l641c10">
          <img style="border:0;width:88px;height:31px"
              src="http://webster.cs.washington.edu/w3c-html.png"
              alt="CSS Valido!">
        </a>
      </p>
    </div>
      <div class="col u-center-text u-margin-bottom-none">
        <p>
        <a target="_blank" href="http://jigsaw.w3.org/css-validator/check/referer">
          <img style="border:0;width:88px;height:31px"
              src="http://jigsaw.w3.org/css-validator/images/vcss"
              alt="CSS Valido!" />
        </a>
      </p>
    </div>
    </div>




  </div>

</footer>


<?php
/*

<?php
if($myPage == $path_index) {echo $valid_index_html;}
if($myPage == $path_security) {echo $valid_security_html;}
if($myPage == $path_controls) {echo $valid_controls_html;}
if($myPage == $path_statistic) {echo $valid_statistic_html;}
if($myPage == $path_contact) {echo $valid_contact_html;}
?>
 */

 ?>
