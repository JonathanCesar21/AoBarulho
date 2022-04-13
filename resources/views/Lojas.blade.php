@extends('layouts.main')

@section('title', 'Ao Barulho')
@section('content')
@section('subfooter')

<div class="container-flex">
  <div class="row">
    <div class="col-md-12 text-center h1-lojas">
      <h1>Conheça todas as nossas unidades ou <br> encontre a mais próxima de você</h1>
    </div>
    <div class="col-md-12 btn-lojas">
      <form>
        <div class="form-inline justify-content-center btn-pesquisar lojas-form">
          <input type="cidade" class="form-control" id="cidade" aria-describedby="emailHelp" placeholder="Digite a cidade">
          <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container-flex bg-lojas">
  <div class="row justify-content-center">
    <!-- Barretos - Confecções -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/guairaconf.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Barretos/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">Av. Vinte e Um, 592 - Centro, Barretos - SP, 14780-000
          </a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
            (17) 3324-3060</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5517981039545&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
            (17) 98103-9545</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5517981039545&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Batatais/SP - confecções -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/batatais.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Batatais/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Cel. Joaquim Rosa, 52 - Centro, Batatais - SP, 14300-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
            (16) 3761-0887</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516992422963&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
            (16) 99242-2963</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516992422963&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Bebedouro - confecções -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/diaadia.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Bebedouro/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Cel. João Manoel, 625 - Centro, Bebedouro - SP, 14700-320</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
            (17) 3345-4479</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5517992371472&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (17) 99237-1472</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5517992371472&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Guaira conf -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/guairaconf.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Guaíra/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Dez, 565 - Centro, Guaíra - SP, 14790-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
            (17) 3332-2287</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5517991445502&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
            (17) 99144-5502</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5517991445502&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Guaira calçados -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/guairacalc.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Guaíra/SP - Calçados</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Dez, 509 - Centro, Guaíra - SP, 14790-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
            (17) 3332-2287</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5517991445502&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
            (17) 99144-5502</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5517991445502&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Guaira Dia a Dia -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/diaadia.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Guaíra/SP - Dia a Dia</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Dez, 565 - Centro, Guaíra - SP, 14790-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
            (17) 3332-2287</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5517991445502&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
            (17) 99144-5502</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5517991445502&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
<!-- Guará -->
<div class="col-md-4 card-lojas">
      <img class="card-img" src="img/guara.webp" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Guará/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Praça 9 de Julho, 130 - Centro, Guará - SP, 14580-000 </a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3831-3333</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516992248759&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99224-8759</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516992248759&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Igarapava Calçados -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Igarapava/SP - Calçados</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Dr. Gabriel Viléla, 350 - Jardim Santa Maria, Igarapava - SP, 14540-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3172-6055</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516991366119&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99136-6119</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516991366119&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Igarapava Confecções -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Igarapava/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Cerqueira César, 411 - Jardim Santa Maria, Igarapava - SP, 14540-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3172-6899</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516991366119&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99136-6119</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516991366119&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
  <!-- Ituverava Confecções -->
  <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Ituverava/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">Av. Dr. José Aníbal Soares de Oliveira, 187 - Vila Sao Francisco, Ituverava - SP, 14500-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3729-5302</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516991366015&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99136-6015</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516991366015&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Miguelópolis -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Miguelópolis/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">Av. Leopoldo Carlos de Oliveira, 1420, Miguelópolis - SP, 14530-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3835-1856</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516994057799&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99405-7799</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516994057799&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Morro Agudo -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Morro Agudo/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. José Jorge Junqueira, 963 - Centro, Morro Agudo - SP, 14640-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3851-2698</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516992619415&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99261-9415</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516992619415&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Olímpia -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Olímpia/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. São João, 606 - Santa Casa, Olímpia - SP, 15400-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (17) 3280-5355</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=551732805355&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (17) 3280-5355</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=551732805355&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Pitangueiras -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Pitangueiras/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt=""></a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3952-6069</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516991238790&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99123-8790</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516991238790&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Pontal -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">Pontal/SP - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. Macir Ramazini, 1192 - Centro, Pontal - SP, 14180-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3953-6683</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516992614573&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16)99261-4573</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516992614573&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Sjbr calçados -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">São Joaquim da Barra - Calçados</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. São Paulo, 1634, São Joaquim da Barra - SP, 14600-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16)3831-1933</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516991340521&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99134-0521</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516991340521&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
    <!-- Sjbr Conf -->
    <div class="col-md-4 card-lojas">
      <img class="card-img" src="img/" alt="Sample Image">
      <div class="card-body card-icons">
        <h2 class="card-title">São Joaquim da Barra - Confecções</h2>
        <li>
          <a href=""><img src="img/icons/location.webp" alt="">R. São Paulo, 1625, São Joaquim da Barra - SP, 14600-000</a>
        </li>
        <li>
          <a href=""><img src="img/icons/phone.webp" alt="">
          (16) 3728-5447</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5516991340521&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt="">
          (16) 99134-0521</a>
        </li>
      </div>
      <div class="card-body card-icons">
        <a href=""><img src="img/icons/location.webp" alt=""></a>
        <a href="https://api.whatsapp.com/send?phone=5516991340521&text=Quero%20receber%20novidades."><img src="img/icons/whatsapp.webp" alt=""></a>
        <a href=""><img src="img/icons/facebook.webp" alt=""></a>
        <a href=""><img src="img/icons/instagram.webp" alt=""></a>
      </div>
    </div>
</div>
</div>
</div>
</div>


@endsection