<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.webp">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.webp">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.webp">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!--Fonte-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/scripts.js"></script>

  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/b71c79af73.js" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

  <header class="logo-color-bg">
    <h1 class="site-heading text-center text-faded d-none d-lg-block logo-img">
      <a href="/Home"><span><img src="img/logoaob.webp" alt=""></span></a>
    </h1>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Ao Barulho</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/Home">Página Inicial</a></li>
            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/Sobre">Quem Somos</a></li>
            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/Lojas">Nossas Lojas</a></li>
            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/Crediario">Crediario</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  @yield('subfooter')
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner bg-faded text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">NOSSA PROMESSA</span>
              <span class="section-heading-lower">PRA VOCÊ</span>
            </h2>
            <p class="mb-0">

              Quando entramos na nossa loja para começar o dia, estamos empenhados em lhe oferecer um serviço simpático, um ambiente acolhedor e, acima de tudo, produtos de excelência!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @yield('content')

  <footer class="footer text-faded text-center py-5">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Conecte-se conosco nas redes sociais:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/aobarulho" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/grupoaobarulho/" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Grupo Ao Barulho
            </h6>
            <p>
            No mercado desde 1992, o Grupo Ao Barulho é uma loja completa em que você encontra moda feminina, masculina, infantil, artigos para casa e calçados para toda a família. O carinho e um abraço caloroso você sempre receberá em nossas lojas físicas.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Links1
            </h6>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Links2
            </h6>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Guaíra-Sp, Nº 488, Centro</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              grupoaobarulho@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> (17)0000-0000</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="">Grupo ao Barulho</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>