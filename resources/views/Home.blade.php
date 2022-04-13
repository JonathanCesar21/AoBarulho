@extends('layouts.main')

@section('title', 'Ao Barulho')


@section('content')
@section('subfooter')
<div class="container-fluid no-padding">
  <!--Slider-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner img-estab">
      <!--Slider 1-->
      <div class="carousel-item active">
        <div class="row">

          <div class="col-md-12 img-card-pc">
            <a href="">
              <img class="d-block w 100" src="/img/saltonela-gif-3-1-2.gif" alt="First slide">
            </a>
          </div>
        </div>
        <!--Slider 1 end-->
      </div>
      <!--Slider 2-->
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-12 img-card-pc no-padding">
            <a href="">
              <img class="d-block w 100" src="/img/saltonela-gif-3-1-2.gif" alt="First slide">
            </a>
          </div>
        </div>
        <!--Slider 2 end-->
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/leandro.webp" alt="..." />
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
          <span class="section-heading-upper">Quem somos</span>
          <span class="section-heading-lower">Grupo Ao Barulho</span>
        </h2>
        <p class="mb-3">No mercado desde 1992, o Grupo Ao Barulho é uma loja completa em que você encontra moda feminina, masculina, infantil, artigos para casa e calçados para toda a família.

          O carinho e um abraço caloroso você sempre receberá em nossas lojas físicas. E na loja virtual não seria diferente, aqui você recebe todo esse nosso amor pelos nossos clientes na sua casa!

          É bom estar aqui!
        </p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="/Sobre">Conheça Nossas Lojas</a></div>
      </div>
    </div>
  </div>
</section>
<section class="page-section about-heading">
  <div class="container-flex">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/sapatos.jpg" alt="..." />
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Calçados</span>
              <span class="section-heading-lower">Sobre nossos calçados</span>
            </h2>
            <p>No Grupo Ao Barulho você encontra os mais diversos Calçados com os melhores preços, condições e marcas para toda sua família.
              Seja o primeiro a conferir nossa Nova Coleção e renove agora seu armário. Veja no Site.
            </p>
            <div class="intro-button mx-auto btn-center"><a class="btn btn-primary btn-xl " href="/calcados">Conheça Nossos Calçados</a></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection