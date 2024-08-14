<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Livro</h1>

        <form action="{{ route('livros.update', $livro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" value="{{ $livro->titulo }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" value="{{ $livro->autor }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ano_publicacao">Ano de Publicação:</label>
                <input type="text" name="ano_publicacao" id="ano_publicacao" value="{{ $livro->ano_publicacao }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input type="text" name="genero" id="genero" value="{{ $livro->genero }}" class="form-control" required>
            </div>

            <button type="submit" class="btn">Atualizar</button>
        </form>

        <a href="{{ route('livros.index') }}" class="btn">Voltar para a lista</a>
    </div>
</body>
</html>
