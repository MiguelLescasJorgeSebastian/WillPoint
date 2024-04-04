<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Proyecto</title>

    <!-- Añade Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- Añade Font Awesome para íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-300 to-gray-500 min-h-screen flex flex-col items-center justify-center">
    <!-- Navbar -->
    <nav class="bg-indigo-600 w-full py-4">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <a class="text-lg font-semibold text-white" href="#" aria-label="Bienvenido a WillPoint">WillPoint</a>
                <div class="flex space-x-4">
                    <a href="/asistente" class="text-white hover:text-gray-200"><i class="fas fa-chart-line mr-1"></i> Asistente Financiero</a>
                    <a href="/mercadito" class="text-white hover:text-gray-200"><i class="fas fa-store mr-1"></i> Mercadito</a>
                    <a href="/guias" class="text-white hover:text-gray-200"><i class="fas fa-book-open mr-1"></i> Guías para formalizar tu negocio</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Contenedor del título motivador -->
    <div class="container mx-auto p-6 flex-grow flex items-center justify-center flex-col text-center border-2 border-black rounded-lg shadow-lg bg-white my-8">
        <h1 class="text-4xl font-bold text-gray-800 border-b-2 border-black pb-4 mb-4">¡Haz crecer tu negocio con facilidad!</h1>
        <p class="text-lg text-gray-700 mb-6">Descubre herramientas intuitivas que te ayudarán a gestionar tu negocio de manera eficiente y a experimentar un crecimiento sostenido. Imagina cómo podrías alcanzar tus metas empresariales con WillPoint a tu lado.</p>
    </div>
    <!-- Contenedor de las cards -->
    <div class="container mx-auto p-6 flex-grow flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tarjeta 1: Asistente Financiero -->
            <div class="card bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">
                <a href="/asistente" class="block p-6">
                    <i class="fas fa-chart-line text-4xl text-white mb-4"></i>
                    <h5 class="text-lg font-semibold mb-2 text-white" id="func1Title">Asistente Financiero</h5>
                    <p class="text-gray-200">Gestiona tus finanzas de manera sencilla y obtén valiosos consejos para mejorar tu situación económica y lograr un crecimiento constante.</p>
                </a>
            </div>

            <!-- Tarjeta 2: Mercadito -->
            <div class="card bg-green-100 hover:bg-green-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">
                <a href="/mercadito" class="block p-6">
                    <i class="fas fa-store text-4xl text-green-500 mb-4"></i>
                    <h5 class="text-lg font-semibold mb-2 text-gray-800" id="func2Title">Mercadito</h5>
                    <p class="text-gray-700">Atrae a más clientes mostrando tus ofertas y facilitando que te encuentren en el mapa, impulsando así el crecimiento de tu negocio.</p>
                </a>
            </div>

            <!-- Tarjeta 3: Guías para formalizar tu negocio -->
            <div class="card bg-blue-100 hover:bg-blue-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">
                <a href="/guias" class="block p-6">
                    <i class="fas fa-book-open text-4xl text-blue-500 mb-4"></i>
                    <h5 class="text-lg font-semibold mb-2 text-gray-800" id="func3Title">Guías para formalizar tu negocio</h5>
                    <p class="text-gray-700">Accede a recursos que te ayudarán a establecer tu negocio de manera segura y exitosa, allanando el camino para un crecimiento continuo.</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

