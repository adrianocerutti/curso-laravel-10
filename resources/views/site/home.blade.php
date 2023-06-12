@extends('site.layout')

@section('title', 'Página Home')
@section('content')
    <div class="row container">
        <div class="col s12 center-align">
            <p class="flow text">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col s12 divider"></div>
        <p>&nbsp;</p>
        {{-- card 1 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-1.jpg') }}" alt="[image]" title="Card 1"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nam earum esse et obcaecati!
                        Consectetur ex, modi nostrum numquam culpa accusantium, cumque earum sunt vero mollitia aspernatur
                        vel, excepturi illo.</p>
                </div>
                <div class="card-action">
                    <a href="#">saiba mais</a>
                </div>
            </div>
        </div>
        {{-- card 2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-2.jpg') }}" alt="[image]" title="Card 2"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nam earum esse et obcaecati!
                        Consectetur ex, modi nostrum numquam culpa accusantium, cumque earum sunt vero mollitia aspernatur
                        vel, excepturi illo.</p>
                </div>
                <div class="card-action">
                    <a href="#">saiba mais</a>
                </div>
            </div>
        </div>
        {{-- card 3 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-3.jpg') }}" alt="[image]" title="Card 3"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nam earum esse et obcaecati!
                        Consectetur ex, modi nostrum numquam culpa accusantium, cumque earum sunt vero mollitia aspernatur
                        vel, excepturi illo.</p>
                </div>
                <div class="card-action">
                    <a href="#">saiba mais</a>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>
    <p>&nbsp;</p>

    <div class="row container">
        <section class="col s12">
            <h1 class="flow-text light">Lorem ipsum dolor sit.</h1>

            <p class="flow-text light justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, quam vel
                temporibus aliquid quasi incidunt accusamus ratione ab earum similique dolorem doloremque asperiores quos
                fuga perspiciatis voluptatem quibusdam nam saepe praesentium officia quia voluptas suscipit illo. Esse
                cupiditate magni ab totam debitis nisi iusto, enim voluptatem illo, rem similique minus?</p>
            <p class="flow-text justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quos ducimus
                architecto laboriosam quaerat in, vel eius. Dolorem voluptatum accusantium sed vel maiores. Neque est, nihil
                in temporibus atque mollitia!</p>
            <p>
                <a href="#" class="waves-effect waves-light btn btn-small blue">saiba mais</a>
                <a href="#" class="waves-effect waves-light btn btn-small purple">cadastre-se</a>
            </p>
        </section>

    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/parallax.jpg') }}" alt="[image]" title="parallax" class="responsive-img">
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/team/team-1.jpg') }}" alt="[image]" title="imagem 1" class="responsive-img circle">
            <p class="flow-text">Bia</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, pariatur!</p>
            <p>
                <a href="#"><i class="small fa-brands fa-facebook"></i></a>
                <a href="#"><i class="small fa-brands fa-instagram"></i></a>
            </p>
        </div>
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/team/team-2.jpg') }}" alt="[image]" title="imagem 2" class="responsive-img circle">
            <p class="flow-text">Julia</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, pariatur!</p>
            <p>
                <a href="#"><i class="small fa-brands fa-facebook"></i></a>
                <a href="#"><i class="small fa-brands fa-instagram"></i></a>
            </p>
        </div>
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/team/team-3.jpg') }}" alt="[image]" title="imagem 3" class="responsive-img circle">
            <p class="flow-text">Mary</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, pariatur!</p>
            <p>
                <a href="#"><i class="small fa-brands fa-facebook"></i></a>
                <a href="#"><i class="small fa-brands fa-instagram"></i></a>
            </p>
        </div>
    </div>

@endsection
