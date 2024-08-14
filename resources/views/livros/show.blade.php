<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Livro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Detalhes do Livro</h1>

        <table>
            <tr>
                <th>ID:</th>
                <td>{{ $livro->id }}</td>
            </tr>
            <tr>
                <th>Título:</th>
                <td>{{ $livro->titulo }}</td>
            </tr>
            <tr>
                <th>Autor:</th>
                <td>{{ $livro->autor }}</td>
            </tr>
            <tr>
                <th>Ano de Publicação:</th>
                <td>{{ $livro->ano_publicacao }}</td>
            </tr>
            <tr>
                <th>Gênero:</th>
                <td>{{ $livro->genero }}</td>
            </tr>
        </table>

        <a href="{{ route('livros.index') }}" class="btn">Voltar para a lista</a>
        <a href="{{ route('livros.edit', $livro->id) }}" class="btn">Editar</a>
        
        <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </div>
</body>
</html>
