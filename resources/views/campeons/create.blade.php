<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Campeón</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-100">
<section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
    <h1 class="text-3xl font-bold text-pink-600 mb-6">Afegeix Campeó Nou</h1>
    <form action="/campeons/store" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" required>
        </div>
        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Rol</label>
            <input type="text" name="role" id="role" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" required>
        </div>
        <div class="mb-4">
            <label for="release_year" class="block text-sm font-medium text-gray-700">Any llançament </label>
            <input type="number" name="release_year" id="release_year" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
        </div>
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripció</label>
            <textarea name="description" id="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" rows="4"></textarea>
        </div>
        <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500">Crear Campeón</button>
    </form>
</section>
</body>
</html>
