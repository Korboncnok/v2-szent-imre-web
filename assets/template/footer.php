
<footer id="footer" class="footer position-relative">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index" class="logo d-flex align-items-center">
        <span class="">Sági cserkész</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Ipolyság</p>
        <p class="mt-3"><strong>Telefonszám:</strong> <span>+421 907 261 022</span></p>
        <p><strong>E-mail:</strong> <span>kapcsolat@sagicserkesz.sk</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href="https://www.facebook.com/saagscout"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/szentimrecscs/"><i class="bi bi-instagram"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Hasznos linkek</h4>
      <ul>
        <li><a href="index">Főoldal</a></li>
        <li><a href="#">Jelentkezés</a></li>
        <li><a href="#">Támogatás</a></li>
        <li><a href="#">Támogatóink</a></li>
        <li><a href="#">Beszámolók</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Támogatóink</h4>
      <ul>
        <li><a href="https://bgazrt.hu/" target="_blank">Bethlen Gábor Alapítvány</a></li>
        <li><a href="https://nivam.sk/" target="_blank">NIVAM</a></li>
        <li><a href="https://www.sahy.sk/" target="_blank">Ipolyság Város Önkormányzata</a></li>
        <li><a href="https://www.szmcs.sk/" target="_blank">Szlovákiai Magyar Cserkészszövetség</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
    <h4>Hírlevelünk</h4>
<p>Iratkozzon fel hírlevelünkre, hogy mindig értesüljön a friss élménybeszámolóinkról!</p>
<form action="../../forms/newsletter.php" method="post" class="php-email-form">
  <div class="newsletter-form">
    <input type="email" name="email">
    <input type="submit" value="Feliratkozás">
  </div>
  <div class="loading">Betöltés...</div>
  <div class="error-message">Sikertelen feliratkozás!</div>
  <div class="sent-message">Sikeres feliratkozás!</div>
</form>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1">27. számú Szent Imre cserkészcsapat</strong> <span>Minden jog fenntartva</span></p>
  <div class="credits">
    Összeállította <a href="https://g-tech.hu/">Gery Technologies</a>
  </div>
</div>
<script>
document.querySelector('.php-email-form').addEventListener('submit', function (e) {
    e.preventDefault(); // Megakadályozza az űrlap alapértelmezett elküldését

    const form = e.target;
    const formData = new FormData(form);
    const loading = form.querySelector('.loading');
    const errorMessage = form.querySelector('.error-message');
    const sentMessage = form.querySelector('.sent-message');

    // Betöltés állapot bekapcsolása
    loading.style.display = 'block';
    errorMessage.style.display = 'none';
    sentMessage.style.display = 'none';

    // Adatok küldése a szerverre
    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        loading.style.display = 'none';
        if (data.message === 'Sikeres feliratkozás!') {
            sentMessage.style.display = 'block';
        } else {
            errorMessage.textContent = data.message;
            errorMessage.style.display = 'block';
        }
    })
    .catch(() => {
        loading.style.display = 'none';
        errorMessage.textContent = 'Hiba történt a kérés során.';
        errorMessage.style.display = 'block';
    });
});
</script>
</footer>

