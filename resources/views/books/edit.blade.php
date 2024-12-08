<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Llibre</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50">

<!-- Secció per a l'edició del llibre -->
<section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
    <h1 class="text-3xl font-bold text-pink-600 mb-6">Editar Llibre: <?= $book->name ?></h1>

    <form action="/books/update/<?= $book->id ?>" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Títol</label>
            <input type="text" name="name" id="name" value="<?= $book->name ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" required>
        </div>

        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Autor</label>
            <input type="text" name="author" id="author" value="<?= $book->author ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" required>
        </div>

        <div class="mb-4">
            <label for="releaseYear" class="block text-sm font-medium text-gray-700">Any de Llançament</label>
            <input type="number" name="releaseYear" id="releaseYear" value="<?= $book->releaseYear ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
        </div>

        <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500">Actualizar Llibre</button>
    </form>
</section>

</body>
</html>
