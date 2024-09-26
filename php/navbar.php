<!-- Pulsante di navigazione che attiva la navbar -->
<div class="navigation u-padding-right-small">

  <!-- checkbox invisible per on/off della navbar -->
  <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

  <!-- pulsante che attiva la checkbox per on/off navbar -->
  <label for="navi-toggle" class="navigation__button">

    <!-- icona barrette del pulsante -->
    <span class="navigation__icon">&nbsp;</span>

  </label>

  <!-- cotenitore navbar che si espande -->
  <div class="navigation__background">&nbsp;</div>

  <!-- menu di navigazione del sito -->
  <nav class="navigation__nav">
    <ul class="navigation__list">

      <!-- Pagina: home -->
      <li class="navigation__item">
        <a href="index.php" class="navigation__link ">
          <i class="fas fa-home u-margin-right-medium"></i>
          <span class="u-padding-right-huge">Home</span>
        </a>
      </li>

      <!-- Pagina: Sicurezza -->
      <li class="navigation__item">
        <a href="security.php" class="navigation__link">
          <i class="far fa-file u-margin-right-medium"></i>
          <span>Sicurezza</span>
        </a>
      </li>

      <!-- Pagina: Controlli -->
      <li class="navigation__item">
        <a href="controls.php" class="navigation__link">
          <i class="fas fa-check-double u-margin-right-medium"></i>
          <span>Controlli</span>
        </a>
      </li>

      <!-- Pagina: Statistiche -->
      <li class="navigation__item">
        <a href="statistic.php" class="navigation__link">
          <i class="fas fa-signal u-margin-right-medium"></i>
          <span>Statistiche</span>
        </a>
      </li>

      <!-- Pagina: Contatti -->
      <li class="navigation__item">
        <a href="contact.php" class="navigation__link">
          <i class="fas fa-address-book u-margin-right-medium"></i>
          <span class="u-margin-right-small">Contatti</span>
        </a>
      </li>

    </ul>
  </nav>

</div>
