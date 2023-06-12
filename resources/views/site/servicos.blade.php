@extends('site.layout')

@section('title','Página Serviços')
@section('content')
<div class="row container">
    <div class="col s12 l6 push-l3 center-align">
        <h1 class="flow-text blue-text">Nossos Serviços</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic accusantium qui maxime. Expedita totam iusto autem, fuga corrupti voluptatibus aliquid!</p>
    </div>
</div>

<p>&nbsp;</p>

<div class="row container">
    <div class="col s12 l6">
        <div class="row">
            <div class="col s12 l6 center-align grey lighten-4">
                <i class="fa-solid fa-truck-fast blue-text text-lighten-2 medium icon-padding"></i>
                <p class="flow-text">Lorem, ipsum dolor.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, modi!</p>
            </div>
            <div class="col s12 l6 center-align">
                <i class="fa-solid fa-car blue-text text-lighten-2 medium icon-padding"></i>
                <p class="flow-text">Lorem, ipsum dolor.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, modi!</p>
            </div>
            <div class="col s12 l6 center-align">
                <i class="fa-solid fa-lock blue-text text-lighten-2 medium icon-padding"></i>
                <p class="flow-text">Lorem, ipsum dolor.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, modi!</p>
            </div>
            <div class="col s12 l6 center-align grey lighten-4">
                <i class="fa-solid fa-folder-open blue-text text-lighten-2 medium icon-padding"></i>
                <p class="flow-text">Lorem, ipsum dolor.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, modi!</p>
            </div>
        </div>
    </div>
    <div class="col s12 l6">
        <img src="{{ asset('images/team.jpg') }}" alt="[imagem]" title="Imagem" class="responsive-img materialboxed">
    </div>
</div>

<p>&nbsp;</p>

<div class="row container">
    <div class="col s12 center-align">
        <h1 class="flow-text blue-text">Planos</h1>
    </div>

    <p>&nbsp;</p>

    <div class="col s12 l4 hoverable">
        <div class="card center-align">
            <div class="card-image">
                <i class="fa-solid fa-sack-dollar medium grey-text icon-padding"></i>
            </div>
            <div class="card-content">
                <span class="card-title">Basic R$ 89,90</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, aliquam? Qui voluptatum consectetur delectus numquam.</p>
            </div>
            <div class="card-action">
                <a href="#">saiba mais</a>
            </div>
        </div>
    </div>

    <div class="col s12 l4 hoverable">
        <div class="card center-align">
            <div class="card-image">
                <i class="fa-solid fa-hand-holding-dollar medium grey-text icon-padding"></i>
            </div>
            <div class="card-content">
                <span class="card-title">Light R$ 119,90</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, aliquam? Qui voluptatum consectetur delectus numquam.</p>
            </div>
            <div class="card-action">
                <a href="#">saiba mais</a>
            </div>
        </div>
    </div>

    <div class="col s12 l4 hoverable">
        <div class="card center-align">
            <div class="card-image">
                <i class="fa-brands fa-bitcoin medium green-text text-lighten-2 icon-padding"></i>
            </div>
            <div class="card-content">
                <span class="card-title">Diamond R$ 299,90</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, aliquam? Qui voluptatum consectetur delectus numquam.</p>
            </div>
            <div class="card-action">
                <a href="#">saiba mais</a>
            </div>
        </div>
    </div>

</div>

@endsection