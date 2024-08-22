<div class="container-usuario">
    @include('parts.header-usuario')
    <link rel="stylesheet" href="{{asset('css/usuario.css')}}">

    <div class="livros">
        <img src="image/livro-da-verdade.png" alt="Livro">
        <div class="acoes-livro">
            <form action="{{route('logout')}}" method="post">

                <input class="btn-ler-livro" type="submit" value="Ver" >

            </form>
        </div>
    </div>
</div>
