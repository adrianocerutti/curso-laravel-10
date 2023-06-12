@extends('site.layout')

@section('title','Página Contato')
@section('content')
<div class="row container">
    <div class="col s12">
        <h1 class="flow-text blue-text">Entre em Contato</h1>
    </div>
    <div class="col s12">
        <p>
            Dias de funcionamento:<br>
            Seg a Sex - 08:00 às 22:00
        </p>
        <p>
            Telefone: (16)4444-1111<br>
            E-mail: cursolaravel10@gmail.com
        </p>
        <p>
            Endereço: Rua Antonino Pagano, 201 - Iguatemi - Ribeirão Preto / SP
        </p>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.9240498698905!2d-47.78199722392231!3d-21.195175880496116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bf4be203eb5f%3A0xf27a8b1cb743dc7a!2sR.%20Ant%C3%B4nino%20Pagano%2C%20201%20-%20Iguatemi%2C%20Ribeir%C3%A3o%20Preto%20-%20SP%2C%2014091-500!5e0!3m2!1spt-BR!2sbr!4v1684931976659!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="row container">
    <div class="col s12">
        <form action="{{ route('novocontato') }}" method="post">
            @csrf
            <div class="row">
                {{-- campo nome --}}
                <div class="col s12 m6 input-field">
                    <i class="fa-solid fa-user prefix"></i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Seu Nome</label>
                </div>
                {{-- campo e-mail --}}
                <div class="col s12 m6 input-field">
                    <i class="fa-regular fa-envelope prefix"></i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Seu e-mail</label>
                </div>
                {{-- campo mensagem --}}
                <div class="input-field col s12">
                    <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                    <label for="textarea1">Mensagem</label>
                </div>
                {{-- botões --}}
                <div class="col s12 input-field">
                    <button type="submit" class="waves-effect waves-light btn btn-small blue">
                        <i class="fa-regular fa-paper-plane"></i>
                        Enviar
                    </button>
                    <button type="reset" class="waves-effect waves-light btn btn-small red">
                        <i class="fa-solid fa-eraser"></i>
                        Limpar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection