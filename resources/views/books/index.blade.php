<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Llibres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

<!-- Header de navegació -->
<header class="bg-pink-600 text-white p-4 shadow-md fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-bold">Llibres</h1>
        <nav>
            <a href="/" class="text-lg px-4 py-2 hover:bg-pink-700 rounded">Inici</a>
            <a href="/books" class="text-lg px-4 py-2 hover:bg-pink-700 rounded">Llibres</a>
        </nav>
    </div>
</header>

<!-- Contingut de la pàgina -->
<section class="pt-24">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-pink-600 mb-4">Llista de Llibres</h2>

        <!-- Botó per crear un nou llibre -->
        <a href="/books/create" class="bg-pink-600 text-white px-6 py-2 rounded-full mb-4 inline-block hover:bg-pink-700">Crear Nou Llibre</a>

        <!-- Taula de Llibres -->
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead class="bg-pink-600 text-white">
            <tr>
                <th class="px-6 py-3 text-left">ID</th>
                <th class="px-6 py-3 text-left">Títol</th>
                <th class="px-6 py-3 text-left">Autor</th>
                <th class="px-6 py-3 text-left">Any</th>
                <th class="px-6 py-3 text-left">Accions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Iteració dels llibres -->
            <?php foreach ($books as $book): ?>
            <tr class="border-b">
                <td class="px-6 py-3"><?= $book->id; ?></td>
                <td class="px-6 py-3"><?= $book->name; ?></td>
                <td class="px-6 py-3"><?= $book->author; ?></td>
                <td class="px-6 py-3"><?= $book->releaseYear; ?></td>
                <td class="px-6 py-3">
                    <a href="/books/edit/<?= $book->id ?>" class="text-pink-600 hover:text-pink-800">Editar</a>
                    <a href="/books/confirm-delete/<?= $book->id ?>" class="text-red-600 hover:text-red-800 ml-4">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Footer -->
<footer class="bg-pink-600 text-white text-center py-4 mt-8">
    <p>&copy; 2024 Mi Aplicació. Tots els drets reservats.</p>
</footer>

</body>
</html>
