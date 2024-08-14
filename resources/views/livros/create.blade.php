<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Adicionar Novo Livro</h1>

        <!-- Certifique-se de que a URL e o método estão corretos -->
        <form action="{{ route('livros.store') }}" method="POST">
            @csrf
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required>
            <br><br>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" value="{{ old('autor') }}" required>
            <br><br>
            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="text" name="ano_publicacao" id="ano_publicacao" value="{{ old('ano_publicacao') }}" required>
            <br><br>
            <label for="genero">Gênero:</label>
            <input type="text" name="genero" id="genero" value="{{ old('genero') }}" required>
            <br><br>
            <button type="submit" class="btn">Salvar</button>
        </form>

        <a href="{{ route('livros.index') }}" class="btn">Voltar para a lista</a>
    </div>
</body>
</html>
