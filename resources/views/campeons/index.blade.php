<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeons - Llista de Campeons</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

<!-- Header de navegació -->
<header class="bg-pink-600 text-white p-4 shadow-md fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-bold">Campeons</h1>
        <nav>
            <a href="/" class="text-lg px-4 py-2 hover:bg-pink-700 rounded">Inici</a>
            <a href="#campeons" class="text-lg px-4 py-2 hover:bg-pink-700 rounded">Campeons</a>
        </nav>
    </div>
</header>

<!-- Contingut de la pàgina -->
<section class="pt-24">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-pink-600 mb-4">Campeons</h2>

        <!-- Botó per crear un nou campeó -->
        <a href="/campeons/create" class="bg-pink-600 text-white px-6 py-2 rounded-full mb-4 inline-block hover:bg-pink-700">Crear Nou Campeó</a>

        <!-- Taula de Campeons -->
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead class="bg-pink-600 text-white">
            <tr>
                <th class="px-6 py-3 text-left">ID</th>
                <th class="px-6 py-3 text-left">Nom</th>
                <th class="px-6 py-3 text-left">Rol</th>
                <th class="px-6 py-3 text-left">Any de Llançament</th>
                <th class="px-6 py-3 text-left">Accions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Dades dels campeons -->
            <tr class="border-b">
                <td class="px-6 py-3">1</td>
                <td class="px-6 py-3">Luchador A</td>
                <td class="px-6 py-3">Melee</td>
                <td class="px-6 py-3">2019</td>
                <td class="px-6 py-3">
                    <a href="/campeons/edit/1" class="text-pink-600 hover:text-pink-800">Editar</a>
                    <a href="/campeons/confirm-delete/1" class="text-red-600 hover:text-red-800 ml-4">Eliminar</a>
                </td>
            </tr>
            <tr class="border-b">
                <td class="px-6 py-3">2</td>
                <td class="px-6 py-3">Maga B</td>
                <td class="px-6 py-3">Màgia</td>
                <td class="px-6 py-3">2020</td>
                <td class="px-6 py-3">
                    <a href="/campeons/edit/2" class="text-pink-600 hover:text-pink-800">Editar</a>
                    <a href="/campeons/confirm-delete/2" class="text-red-600 hover:text-red-800 ml-4">Eliminar</a>
                </td>
            </tr>
            <tr class="border-b">
                <td class="px-6 py-3">3</td>
                <td class="px-6 py-3">Tirador C</td>
                <td class="px-6 py-3">Distància</td>
                <td class="px-6 py-3">2018</td>
                <td class="px-6 py-3">
                    <a href="/campeons/edit/3" class="text-pink-600 hover:text-pink-800">Editar</a>
                    <a href="/campeons/confirm-delete/3" class="text-red-600 hover:text-red-800 ml-4">Eliminar</a>
                </td>
            </tr>
            <tr class="border-b">
                <td class="px-6 py-3">4</td>
                <td class="px-6 py-3">Tanque D</td>
                <td class="px-6 py-3">Tanque</td>
                <td class="px-6 py-3">2021</td>
                <td class="px-6 py-3">
                    <a href="/campeons/edit/4" class="text-pink-600 hover:text-pink-800">Editar</a>
                    <a href="/campeons/confirm-delete/4" class="text-red-600 hover:text-red-800 ml-4">Eliminar</a>
                </td>
            </tr>
            <tr class="border-b">
                <td class="px-6 py-3">5</td>
                <td class="px-6 py-3">Suport E</td>
                <td class="px-6 py-3">Suport</td>
                <td class="px-6 py-3">2022</td>
                <td class="px-6 py-3">
                    <a href="/campeons/edit/5" class="text-pink-600 hover:text-pink-800">Editar</a>
                    <a href="/campeons/confirm-delete/5" class="text-red-600 hover:text-red-800 ml-4">Eliminar</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Footer -->
<footer class="bg-pink-600 text-white text-center py-4 mt-8">
    <p>&copy; 2024 PHP. Tots els drets reservats.</p>
</footer>

</body>
</html>
