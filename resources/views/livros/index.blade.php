<!DOCTYPE html>
<html>
<head>
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Livros</h1>

        @if(session('success'))
            <div class="message">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('livros.create') }}" class="btn">Adicionar Novo Livro</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano de Publicação</th>
                    <th>Gênero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor }}</td>
                        <td>{{ $livro->ano_publicacao }}</td>
                        <td>{{ $livro->genero }}</td>
                        <td>
                            <a href="{{ route('livros.show', $livro) }}" class="btn">Ver</a>
                            <a href="{{ route('livros.edit', $livro) }}" class="btn">Editar</a>
                            <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
