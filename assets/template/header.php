<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="">Sági cserkész</h1>
      </a>

      <?php
// Lekéri az aktuális oldal nevét
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index" class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">Főoldal</a></li>
        <li><a href="csapattabor2025" class="<?php echo ($current_page == 'csapattabor2025') ? 'active' : ''; ?>">Csapattábor 2025</a></li>
        <!-- <li><a href="vezetok" class="<?php echo ($current_page == 'vezetok') ? 'active' : ''; ?>">Vezetőink</a></li> -->
        <li><a href="galeria" class="<?php echo ($current_page == 'galeria') ? 'active' : ''; ?>">Galéria</a></li>
        <li><a href="https://vp2.sagicserkesz.sk/" class="<?php echo ($current_page == 'vp2') ? 'active' : ''; ?>" target="_blank">VP2</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

      <a class="btn-getstarted" href="mailto:27szentimrecscs@gmail.com">Támogatás</a>

    </div>
  </header>

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8WFT58QNN7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8WFT58QNN7');
</script>