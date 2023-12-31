<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{ asset('images/banner-slide-1.jpg') }}" alt="[imagem]" title="Banner 1">
            <div class="caption left-align">
                <h3 class="flow-text">Lorem ipsum dolor sit amet.</h3>
                <h5 class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex labore corporis, nesciunt corrupti illum sint, a nisi minima quod omnis tempore nemo cupiditate repellendus adipisci. Ullam debitis necessitatibus consectetur modi!</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">quero me cadastrar</a>
            </div>
        </li>
        <li>
            <img src="{{ asset('images/banner-slide-2.jpg') }}" alt="[imagem]" title="Banner 2">
            <div class="caption right-align">
                <h3 class="flow-text">Lorem ipsum dolor sit amet.</h3>
                <h5 class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex labore corporis, nesciunt corrupti illum sint, a nisi minima quod omnis tempore nemo cupiditate repellendus adipisci. Ullam debitis necessitatibus consectetur modi!</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">quero me cadastrar</a>
            </div>
        </li>
    </ul>
</div>

<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text">Preencha todos os campos</h3>
        <form action="{{ route('lead') }}" method="post">
            @csrf
            <div class="row">
                {{-- campo nome --}}
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Digite seu nome:</label>
                </div>
                {{-- campo telefone --}}
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" name="tel" id="tel" required>
                    <label for="tel">Digite seu telefone:</label>
                </div>
                {{-- campo e-mail --}}
                <div class="col s12 input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Digite seu e-mail:</label>
                </div>
                {{-- botões de ação --}}
                <div class="col s12 input-field">
                    <input type="submit" value="enviar" class="btn btn-small blue">
                    <input type="reset" value="limpar" class="btn btn-small red">
                </div>
            </div>
        </form>
    </div>
</div>