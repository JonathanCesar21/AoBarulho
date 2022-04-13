@extends('layouts.main')

@section('title', 'Ao Barulho')


@section('content')
@section('subfooter')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Crediario</h2>
        </div>
        <div class="col-md-12">
            <form action="{{ url('Crediario') }}" method="POST">
                {{csrf_field() }}

                @if(count($errors) > 0 )
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Preencha os dados corretamente!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Obrigado!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>OPS!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Seu Nome">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Seu Email">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input name="cpf" id="" class="form-control" placeholder="Seu Cpf"></input>
                </div>
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input name="rg" id="" class="form-control" placeholder="Seu RG"></input>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input name="telefone" id="" class="form-control" placeholder="Seu Telefone"></input>
                </div>
                <div class="form-group">
                    <label for="profissao">Profissão</label>
                    <input name="profissao" id="" class="form-control" placeholder="Sua mensagem"></input>
                </div>
                <div class="form-group">
                    <label for="renda">Renda</label>
                    <input name="renda" id="" class="form-control" placeholder="Sua mensagem"></input>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection