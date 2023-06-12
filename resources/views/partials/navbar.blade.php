<nav class="blue">
    <div class="nav-wrapper container">
        {{-- menu hamburger --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <a href="{{ route('home') }}" class="brand-logo light">Curso Laravel 10</a>

        {{-- menu desktop --}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>

        {{-- menu mobile --}}
        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="{{ asset('images/sidenav-image.jpg') }}" alt="[imagem]" title="Curso Laravel 10">
              </div>
              {{-- <ahref="#user"><imgclass="circle"src="images/yuna.jpg"></a> --}}
              <a href="#name"><span class="white-text name">Curso Laravel 10</span></a>
              <a href="#email"><span class="white-text email">contato@curso.com.br</span></a>
            </div></li>
            {{-- <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li> --}}
            <li><a href="#!">Menu</a></li>
            <li><div class="divider"></div></li>
            <li><a href="{{ route('home') }}"><i class="material-icons">home</i>Home</a></li>
            <li><a href="{{ route('servicos') }}"><i class="material-icons">engineering</i>Serviços</a></li>
            <li><a href="{{ route('galeria') }}"><i class="material-icons">photo_camera</i>Galeria</a></li>
            <li><a href="{{ route('contato') }}"><i class="material-icons">contact_phone</i>Contato</a></li>
          </ul>
    </div>
</nav>