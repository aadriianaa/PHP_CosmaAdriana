<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portada Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

<!-- Header de navegación -->
<header class="bg-pink-600 text-white p-4 shadow-md fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-bold">PHP</h1>
        <nav>
            <a href="books" class="text-lg px-4 py-2 hover:bg-pink-700 rounded" onclick="showSection('books')">Books</a>
            <a href="campeons" class="text-lg px-4 py-2 hover:bg-pink-700 rounded" onclick="showSection('campeons')">Campeons</a>
        </nav>
    </div>
</header>

<!-- Portada amb imatge ajustada -->
<section class="pt-24 flex-grow">
    <div class="relative">
        <img src="images/16933298615638.jpg" alt="Portada" class="w-full h-screen object-cover sm:h-96">
    </div>
</section>

<!-- Footer -->
<footer class="bg-pink-600 text-white text-center py-4 mt-8">
    <div class="max-w-7xl mx-auto">
        <p class="text-sm">© <?= date("Y") ?> PHP Application - Tots els drets reservats.</p>
    </div>
</footer>

<!-- Script per mostrar o ocultar les seccions -->
<script>
    function showSection(section) {
        document.getElementById('books')?.classList.add('hidden');
        document.getElementById('campeons')?.classList.add('hidden');

        if (section === 'books') {
            document.getElementById('books')?.classList.remove('hidden');
        } else if (section === 'campeons') {
            document.getElementById('campeons')?.classList.remove('hidden');
        }
    }
</script>

</body>
</html>
