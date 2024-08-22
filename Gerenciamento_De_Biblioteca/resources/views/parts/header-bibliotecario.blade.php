<div class="container-header-bibliotecario">
    <header>
        <nav class="links">
            <ul class="nav-bibliotecario">

                <li>
                    <label for="livros">Livros</label>
                    <select name="livros" id="livros" aria-placeholder="Usuários">
                        <option value=""></option>
                        <option value="{{route('livro.listar')}}">Listar livros</option>
                        <option value="{{route('livro.editar')}}">Editar livros</option>
                        <option value="{{route('livro.remover')}}">Remover livros</option>
                        <option value="{{route('livro.adicionar')}}">Adicionar livros</option>

                    </select></li>

                    <li>
                        <label for="bibliotecarios">Bibliotecários</label>
                        <select name="bibliotecarios" id="bibliotecarios">
                            <option value=""></option>
                            <option value="">Listar bibliotecários</option>
                            <option value="">Criar bibliotecários</option>
                            <option value="">Remover bibliotecários</option>
                        </select>
                    </li>

                    <li>
                        <label for="usuarios">Usuários</label>
                        <select name="usuarios" id="usuarios">
                            <option value=""></option>
                            <option value="">Punir Usuário</option>
                        </select>
                    </li>
            </ul>
<div class="sub-container">
            <div class="saudacoes-bibliotecario">
                <h1>Olá, Bibliotecário</h1>
            </div>

            <div class="sair">
                <form action="{{route('logout')}}" method="post">
                @csrf
                <input class="btn-sair" type="submit" value="Sair">
                </form>
            </div>
        </div>
        </nav>
    </header>
</div>

<script>
    // Função para redirecionar baseado na opção selecionada
    function handleSelectChange(event) {
        const selectedValue = event.target.value;
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Adiciona ouvintes de eventos para todos os selects
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', handleSelectChange);
        });
    });
</script>
