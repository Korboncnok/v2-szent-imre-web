<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>27. sz. Szent Imre cserkészcsapat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <?php include 'assets/template/sponsorStyle.php'; ?>

  <style>
    /* Csillagos ég háttér az egész oldalra */
    body {
      background: #121330; /* Világosabb háttérszín */
      color: white;
      position: relative;
      overflow-x: hidden;
    }
    
    /* Valamennyi szekció háttere átlátszó vagy sötét */
    .section, .card, .container, footer {
      background-color: rgba(0, 0, 0, 0.6) !important; /* Kicsit átlátszóbb */
      color: white;
      border-top: 0 !important;
    }
    
    /* Valamennyi szekció háttere átlátszó vagy elegáns */
    .section, .container, footer {
      background-color: transparent !important;
      color: white;
      border-top: 0 !important;
    }
    
    /* Header és menü stílusok */
    .header {
      background-color: rgba(0, 0, 0, 0.8) !important;
      margin-bottom: 0 !important;
      border-bottom: 0 !important;
    }
    
    .header .logo h1 {
      color: #0a4b8f !important; /* Sági Cserkész felirat sötétkék */
      font-weight: bold;
    }
    
    .header .navmenu ul li a {
      color: #0a4b8f !important; /* Menüpontok sötétkék */
      font-weight: 600;
    }
    
    .header .navmenu ul li a:hover,
    .header .navmenu ul li a.active {
      color: #1a6fc9 !important; /* Aktív/hover menüpont világosabb kék */
    }
    
    /* Támogatás gomb stílusa */
    .btn-getstarted {
      background-color: #0a4b8f !important;
      color: white !important;
      border: 2px solid #0a4b8f !important;
    }
    
    .btn-getstarted:hover {
      background-color: #1a6fc9 !important;
      border-color: #1a6fc9 !important;
    }
    
    /* Eltüntetjük a fekete négyzetet a fejléc és kép között */
    .header + .main .container {
      background-color: transparent !important;
    }
    
    .stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      pointer-events: none;
    }
    
    .star {
      position: absolute;
      background-color: #fff;
      border-radius: 50%;
      animation: twinkle var(--duration) linear infinite;
      opacity: var(--opacity);
      box-shadow: 0 0 4px 1px rgba(255, 255, 255, 0.4); /* Fénylő hatás */
    }
    
    .star.blue {
      background-color: #8ecdff;
      box-shadow: 0 0 4px 1px rgba(142, 205, 255, 0.7);
    }
    
    .star.yellow {
      background-color: #ffe382;
      box-shadow: 0 0 4px 1px rgba(255, 227, 130, 0.7);
    }
    
    @keyframes twinkle {
      0% {
        transform: translateX(0);
        opacity: var(--opacity);
      }
      50% {
        opacity: var(--opacity) * 0.4;
      }
      100% {
        transform: translateX(var(--travel));
        opacity: var(--opacity);
      }
    }
    
    /* Eredeti borítókép megtartása */
    .page-title {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/taborigyulekezo2021.JPG') no-repeat center 30%;
      background-size: cover;
      position: relative;
      padding: 60px 0;
      color: white;
      margin-top: 0;
      margin-bottom: 0;
      border-top: 0 !important;
      border-bottom: 0 !important;
      overflow: hidden;
    }
    
    /* Hogy ne legyen fekete négyzet a fejléc és a kép között */
    .page-title .container {
      background-color: transparent !important;
    }
    
    /* Támogatóink szekció átlátszó háttérrel */
    #counts .container,
    #counts .row,
    .logo-slider {
      background-color: transparent !important;
    }
    
    /* Egyéb szín beállítások */
    h1, h2, h3, h4, h5, h6, .card-body, .card-title, p {
      color: white !important;
    }
    
    hr {
      border-color: rgba(255, 255, 255, 0.2);
    }
    
    a:not(.btn) {
      color: #83c3ff !important;
    }
    
    /* Visszaszámláló stílus */
    #countdown {
      display: flex;
      justify-content: center;
      gap: 20px;
      font-size: 1.5em;
    }
    
    .countdown-item {
      text-align: center;
    }
    
    .countdown-item span {
      display: block;
      color: white;
    }
    
    .countdown-item .label {
      font-size: 0.5em;
      text-transform: uppercase;
    }
    
    /* Információs fülek stílusa */
    .nav-tabs .nav-link {
      color: #83c3ff !important;
      background-color: rgba(10, 75, 143, 0.2);
      border-color: rgba(255, 255, 255, 0.1);
      margin-right: 5px;
      transition: all 0.3s ease;
    }
    
    .nav-tabs .nav-link:hover {
      background-color: rgba(10, 75, 143, 0.4);
      border-color: rgba(255, 255, 255, 0.2);
    }
    
    .nav-tabs .nav-link.active {
      background-color: rgba(10, 75, 143, 0.6);
      color: white !important;
      border-color: rgba(255, 255, 255, 0.3);
      border-bottom-color: transparent;
    }
    
    .card-header {
      background-color: rgba(0, 0, 0, 0.4) !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding: 0.75rem 1rem 0;
      border-top: 0 !important;
    }
    
    .tab-content {
      padding-top: 1rem;
    }
    
    .tab-pane h4 {
      color: #83c3ff !important;
      margin-bottom: 1.5rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding-bottom: 0.5rem;
    }
    
    .tab-pane h5 {
      color: #d9eaff !important;
      margin-top: 1rem;
      margin-bottom: 0.5rem;
    }
    
    .tab-pane ul li {
      margin-bottom: 0.5rem;
    }
    
    /* Kapcsolható konténer sötét téma kiegészítések */
    #tabInfo {
      border-bottom: none;
    }
    
    /* Tab fejlécek újratervezése - világosabb verzió */
    .info-tabs {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin: 0 auto 20px auto;
      width: 90%;
      position: relative;
      z-index: 10;
    }
    
    .info-tab-button {
      background: linear-gradient(rgba(10, 75, 143, 0.2), rgba(10, 75, 143, 0.4));
      color: #d9eaff;
      border: 1px solid rgba(83, 164, 255, 0.4);
      border-radius: 6px;
      padding: 10px 15px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 0 15px rgba(83, 164, 255, 0.2);
      flex: 0 0 auto;
      text-align: center;
      width: 170px;
      position: relative;
      overflow: visible;
      backdrop-filter: blur(5px);
    }
    
    .info-tab-button:hover {
      background: linear-gradient(rgba(10, 75, 143, 0.3), rgba(10, 75, 143, 0.5));
      border-color: rgba(83, 164, 255, 0.6);
      box-shadow: 0 0 20px rgba(83, 164, 255, 0.3);
    }
    
    .info-tab-button.active {
      background: linear-gradient(rgba(10, 75, 143, 0.5), rgba(10, 75, 143, 0.7));
      color: white;
      border-color: rgba(83, 164, 255, 0.8);
      box-shadow: 0 0 20px rgba(83, 164, 255, 0.4);
    }
    
    /* Mobil responsive kiegészítések */
    @media (max-width: 576px) {
      .info-tabs {
        flex-direction: column;
      }
      
      .info-tab-button {
        max-width: 100%;
        width: 100%;
      }
    }
    
    /* Visszaállítás Bootstrap-szerű grid kezelésre a tab-pane-en belül */
    .info-tab-pane {
      display: none; /* Hide non-active tabs by default */
      animation: fadeIn 0.5s; /* Optional: Add a fade-in effect */
      background-color: rgba(10, 75, 143, 0.2) !important; /* Set a dark blue transparent background */
      padding: 20px; /* Add padding inside the tab pane */
      border-radius: 6px; /* Optional: Slightly rounded corners for the pane background */
    }
    
    .info-tab-pane.active {
      display: block; /* Show the active tab */
    }

    /* Optional fade-in animation */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .info-tab-pane .row {
      display: flex;
      flex-wrap: wrap;
    }

    .info-tab-pane .col-md-6 {
      margin-bottom: 45px !important; /* Increased margin between cards */
      display: flex;
      flex-direction: column;
    }

    .card {
      background: linear-gradient(rgba(10, 75, 143, 0.1), rgba(10, 75, 143, 0.15)) !important;
      border: 1px solid rgba(83, 164, 255, 0.2);
      border-radius: 8px;
      height: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      margin: 45px 0 !important; /* Added top and bottom margin */
    }

    .card-body {
      padding: 20px;
      flex-grow: 1;
      overflow-y: auto;
      position: static;
      background-color: transparent !important;
      min-height: 400px;
      margin-top: 45px !important; /* Added top margin */
    }

    .card h5 {
      color: #83c3ff !important;
      margin: 2rem 0 !important;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      gap: 8px;
      padding-top: 0;
    }

    .card h5:first-child {
      margin-top: 0 !important; /* Remove top margin from first heading */
    }

    .card p {
      margin-bottom: 2rem !important; /* Increased to 2rem */
      color: #e0e0ff !important;
    }

    .card ul {
      list-style: none;
      padding-left: 0;
      margin-bottom: 2rem !important; /* Increased to 2rem */
    }
    
    .card ul li {
      position: relative;
      padding-left: 1.5rem;
      margin-bottom: 10px;
      color: #e0e0ff;
    }
    
    .card ul li:before {
      content: "★";
      color: #83c3ff;
      position: absolute;
      left: 0;
      top: 0;
    }
    
    .alert-info {
      background: rgba(10, 75, 143, 0.1) !important;
      border: 1px solid rgba(83, 164, 255, 0.3);
      color: #d9eaff !important;
      padding: 15px;
      border-radius: 8px;
      margin-top: 20px;
    }
    
    .btn-outline-primary {
      color: #83c3ff !important;
      border-color: rgba(83, 164, 255, 0.4);
      background: transparent;
      transition: all 0.3s ease;
    }
    
    .btn-outline-primary:hover {
      background: rgba(83, 164, 255, 0.1);
      border-color: rgba(83, 164, 255, 0.6);
      color: white !important;
    }
    
    /* Mobil nézet finomítása */
    @media (max-width: 768px) {
       .info-tab-pane .col-md-6 {
         margin-bottom: 15px;
      }
      .card-body {
        padding: 15px;
      }
      .card h5 {
         font-size: 1rem;
         margin-bottom: 10px;
      }
       .card p, .card ul li {
         font-size: 0.9rem;
      }
    }
    
    /* Egyenlő magasságú kártyák egy sorban */
    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -10px;
      margin-left: -10px;
    }
    
    .col-md-6 {
      padding-right: 10px;
      padding-left: 10px;
    }
    
    @media (min-width: 768px) {
      .row {
        margin-right: -15px;
        margin-left: -15px;
      }
      
      .col-md-6 {
        padding-right: 15px;
        padding-left: 15px;
      }
    }

    /* Scroll to top button */
    .scroll-top {
      background: rgba(10, 75, 143, 0.8) !important; /* Dark blue background */
      border: 2px solid rgba(83, 164, 255, 0.4) !important;
    }

    .scroll-top:hover {
      background: rgba(10, 75, 143, 1) !important; /* Darker blue on hover */
    }

    /* Subscription/Sign up buttons */
    .btn-getstarted, 
    .read-more, 
    .more-btn {
      background: rgba(10, 75, 143, 0.8) !important;
      border: 2px solid rgba(83, 164, 255, 0.4) !important;
      color: white !important;
    }

    .btn-getstarted:hover, 
    .read-more:hover, 
    .more-btn:hover {
      background: rgba(10, 75, 143, 1) !important;
      border-color: rgba(83, 164, 255, 0.6) !important;
    }
  </style>

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Apr 25 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

<?php include 'assets/template/header.php'; ?>

  <!-- Csillagos ég konténer az egész oldalra -->
  <div class="stars" id="starsContainer"></div>

  <main class="main">

   <!-- Page Title -->
   <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Csapattábor 2025</h1>
              <p class="fs-5 mt-3">A tábor sikeresen lezajlott!</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Events Section -->
    <section id="events" class="events section" style="background: none !important;">

      <div class="container" data-aos="fade-up" style="background: none !important; border: none !important; box-shadow: none !important;">

        <!-- Információs konténerek -->
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="text-center mb-4" style="color: #83c3ff !important;">Tábori információk - Visszatekintő</h3>
            <!-- Kapcsolható információs konténer - egyszerűsített struktúra -->
            <div class="info-container" style="background: linear-gradient(rgba(10, 75, 143, 0.08), rgba(10, 75, 143, 0.12)); backdrop-filter: blur(10px); border: 1px solid rgba(83, 164, 255, 0.2); border-radius: 8px; padding: 25px; box-shadow: 0 0 25px rgba(10, 75, 143, 0.15), inset 0 0 30px rgba(83, 164, 255, 0.05); margin-bottom: 20px;">
              <!-- Saját egyedi tab fejlécek -->
              <div class="info-tabs mb-4">
                
                <button id="tabori-info-btn" class="info-tab-button active" onclick="switchInfoTab('tabori-info')">Tábori&nbsp;infók</button>
                <button id="jelentkezes-btn" class="info-tab-button" onclick="switchInfoTab('jelentkezes')">Dokumentumok</button>
              </div>
              
              <div id="info-tab-content">
                
                
                <!-- Camp information section - Dark theme -->
                <div id="tabori-info-content" class="info-tab-pane active">
                  <h4 style="margin-bottom: 1.5rem;">Tábori információk</h4>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="card" style="background: linear-gradient(rgba(10, 75, 143, 0.1), rgba(10, 75, 143, 0.15)) !important; border: 1px solid rgba(83, 164, 255, 0.2);">
                        <div class="card-body">
                           <h5 style="display: block !important; margin: 1rem 0;"><i class="bi bi-geo-alt me-2" style="color: #83c3ff;"></i>Helyszín</h5>
                          <p>Ipolyvisk</p>

                          <h5><i class="bi bi-calendar-check me-2" style="color: #83c3ff;"></i>Időpontok</h5>
                          <p><strong>Tábor kezdete:</strong> 2025. július 4. (péntek)<br>
                          <strong>Tábor vége:</strong> 2025. július 13. (vasárnap)</p>

                          <h5><i class="bi bi-signpost-2 me-2" style="color: #83c3ff;"></i>Gyülekezés</h5>
                          <p>A gyülekezés az ipolysági vasútállomás előtti buszmegállóban volt</p>

                          <h5><i class="bi bi-box-arrow-in-right me-2" style="color: #83c3ff;"></i>Hazaérkezés</h5>
                          <p>Az ipolysági vasútállomás előtti buszmegállóba történt</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="card" style="background: linear-gradient(rgba(10, 75, 143, 0.1), rgba(10, 75, 143, 0.15)) !important; border: 1px solid rgba(83, 164, 255, 0.2);">
                        <div class="card-body">
                          <h5><i class="bi bi-cash-coin me-2" style="color: #83c3ff;"></i>Részvételi díj</h5>
                          <p>100€ / fő</p>

                          <h5><i class="bi bi-people-fill me-2" style="color: #83c3ff;"></i>Résztvevő csapatok</h5>
                          <ul>
                            <li>72. sz. Szent Lőrinc (Felsőszeli)</li>
                            <li>76. sz. Szenczi Molnár Albert (Szenc)</li>
                            <li>3. sz. Kiskárpátok Hunyadi Mátyás (Pozsony)</li>
                            <li>27. sz. Szent Imre (Ipolyság)</li>
                          </ul>
                          
                          <h5><i class="bi bi-person me-2" style="color: #83c3ff;"></i>Kapcsolattartó</h5>
                          <p>Klukon Vajk Gergely<br>
                          Telefon: +421 918 033 232</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="alert alert-info mt-3" style="background: rgba(10, 75, 143, 0.1) !important; border: 1px solid rgba(83, 164, 255, 0.3); color: #d9eaff !important;">
                    <i class="bi bi-info-circle me-2"></i>
                    A csapattábor 2025 sikeresen lezajlott Ipolyvisken. Köszönjük minden résztvevőnek a részvételt!
                  </div>
                </div>
                
                <!-- Jelentkezés fül -->
                <div id="jelentkezes-content" class="info-tab-pane">
                  <h4>Dokumentumok</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card mb-3" style="background: linear-gradient(rgba(10, 75, 143, 0.1), rgba(10, 75, 143, 0.15)) !important; border: 1px solid rgba(83, 164, 255, 0.2);">
                        <div class="card-body">
                          <h5><i class="bi bi-file-earmark-arrow-down me-2" style="color: #83c3ff;"></i>Tábori dokumentumok</h5>
                          <p>A táborhoz használt dokumentumok letölthetők:</p>
                          <ul class="list-unstyled">
                            <li class="mb-2">
                              <a href="assets/docs/camp2025/felszerelési_lista.pdf" class="btn btn-outline-primary btn-sm w-100 text-start" download>
                                <i class="bi bi-file-earmark-pdf me-2"></i>Felszerelési lista
                              </a>
                            </li>
                            <li class="mb-2">
                              <a href="assets/docs/camp2025/jelentkezési_lap.pdf" class="btn btn-outline-primary btn-sm w-100 text-start" download>
                                <i class="bi bi-file-earmark-pdf me-2"></i>Jelentkezési lap
                              </a>
                            </li>
                            <li class="mb-2">
                              <a href="assets/docs/camp2025/18 ÉV ALATT - törvényes képviselő nyilatkozata a gyermek egészségügyi alkalmasságáról.pdf" class="btn btn-outline-primary btn-sm w-100 text-start" download>
                                <i class="bi bi-file-earmark-pdf me-2"></i>Nyilatkozat (18 év alatt)
                              </a>
                            </li>
                            <li>
                              <a href="assets/docs/camp2025/18 ÉV FELETT- Nagykorú nyilatkozata fertőzésmentességről.pdf" class="btn btn-outline-primary btn-sm w-100 text-start" download>
                                <i class="bi bi-file-earmark-pdf me-2"></i>Nyilatkozat (18 év felett)
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="alert alert-info mt-3" style="background: rgba(10, 75, 143, 0.1) !important; border: 1px solid rgba(83, 164, 255, 0.3); color: #d9eaff !important;">
                    <i class="bi bi-info-circle me-2"></i>
                    Kérdéseid vannak a táborral kapcsolatban? Írj a <a href="mailto:gery@sagicserkesz.sk">gery@sagicserkesz.sk</a> címre!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Events Section -->
    

    <!-- Counts Section -->
    <section id="counts" class="section">
      <div class="container" data-aos="fade-up" data-aos-delay="100" style="background: none !important; border: none !important; box-shadow: none !important;">
        <div style="background: linear-gradient(rgba(10, 75, 143, 0.15), rgba(10, 75, 143, 0.2)); backdrop-filter: blur(10px); border: 1px solid rgba(83, 164, 255, 0.2); border-radius: 8px; padding: 25px; box-shadow: 0 0 25px rgba(10, 75, 143, 0.15), inset 0 0 30px rgba(83, 164, 255, 0.05); margin-bottom: 20px;">

            <div style="margin-top: 10px; padding: 0 15px;">
                <img src="./assets/img/sponsors/Erb-text_horizontalne_invert_modry.png" data-v-4ef8651c="" style="display:block;margin:auto;max-width:100%;max-height:150px">
                <h3 class="text-center mb-4" style="color: #83c3ff !important;padding:25px">
                    <b>Realizované s finančnou podporou Nitrianskeho Samosprávneho Kraja</b>
                </h3>
            </div>
            
        </div>
      </div>
    </section><!-- /Counts Section -->

    </section><!-- /Events Section -->
    


  </main>

  <?php include 'assets/template/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    window.onload = function() {
      // Szponzor logók másolása
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logo-slider").appendChild(copy);
      
      // Csillagos ég létrehozása
      const starsContainer = document.getElementById('starsContainer');
      
      // Csillagok számának és tulajdonságainak beállítása
      const starCount = 400; // Több csillag
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      
      // Csillagok generálása
      for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';
        
        // Véletlenszerű színek hozzáadása
        const colorRandom = Math.random();
        if (colorRandom > 0.85) {
          star.classList.add('blue');
        } else if (colorRandom > 0.7) {
          star.classList.add('yellow');
        }
        
        // Véletlenszerű méret - nagyobb csillagok is lehetnek
        const size = Math.random() * 4 + (Math.random() > 0.95 ? 2 : 0);
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        
        // Véletlenszerű pozíció
        const posX = Math.random() * windowWidth;
        const posY = Math.random() * windowHeight * 2; // Nagyobb terület a scrollozáshoz
        star.style.left = `${posX}px`;
        star.style.top = `${posY}px`;
        
        // Véletlenszerű animáció idő - gyorsabb mozgás
        const duration = 15 + Math.random() * 25; // Gyorsabb animáció (volt: 20-60s)
        star.style.setProperty('--duration', `${duration}s`);
        
        // Véletlenszerű átlátszóság - fényesebb csillagok
        const opacity = 0.3 + Math.random() * 0.7;
        star.style.setProperty('--opacity', opacity);
        
        // Véletlenszerű mozgási távolság - nagyobb mozgási távolság
        const travel = -50 - Math.random() * 100; // Nagyobb elmozdulás (volt: -30 - -100)
        star.style.setProperty('--travel', `${travel}px`);
        
        // Hozzáadás a konténerhez
        starsContainer.appendChild(star);
      }
    };
    
    // Információs fülek kapcsoló script
    function switchInfoTab(tabId) {
      // Összes fül elrejtése
      document.querySelectorAll('.info-tab-pane').forEach(tab => {
        tab.classList.remove('active');
      });
      
      // Összes gomb inaktívvá tétele
      document.querySelectorAll('.info-tab-button').forEach(btn => {
        btn.classList.remove('active');
      });
      
      // Kiválasztott fül megjelenítése
      document.getElementById(tabId + '-content').classList.add('active');
      
      // Kiválasztott gomb aktívvá tétele
      document.getElementById(tabId + '-btn').classList.add('active');
    }
  </script>

</body>

</html>
