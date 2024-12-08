<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Eliminació - Llibre</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-100">
<section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
    <h1 class="text-3xl font-bold text-pink-600 mb-6">Eliminar Llibre</h1>
    <p class="text-gray-700 mb-6">Estàs segur que vols eliminar el llibre <strong><?= htmlspecialchars($book->name) ?></strong>?</p>
    <form action="http://localhost:8000/books/destroy/<?= $book->id ?>" method="POST">
        <div class="flex space-x-4">
            <!-- Botó per confirmar eliminació -->
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                Eliminar Definitivament
            </button>
            <!-- Botó per cancel·lar -->
            <a href="http://localhost:8000/books" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                Cancel·lar
            </a>
        </div>
    </form>
</section>
</body>
</html>
