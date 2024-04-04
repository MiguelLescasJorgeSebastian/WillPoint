<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Asistente Financiero</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center my-8">Bienvenido a tu Asistente Financiero</h1>
            <p class="text-lg text-center mb-8">¡Descubre el poder de conocer tus ganancias diarias! Registra tus montos iniciales y finales cada día para obtener valiosos insights sobre tu negocio y alcanzar tus metas financieras.</p>
            <div class="flex justify-center mb-8">
                <button id="registerIncome" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Registrar tu monto inicial y monto final</button>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-8">
        <div class="flex justify-between items-center mb-4">
            <!-- Botón para regresar al index del sistema -->
            <a href="{{ route('sistema') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver al Sistema</a>
            <!-- Botón para abrir el modal de registro -->
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-blue-100 p-4 rounded shadow">
                <div class="max-w-xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Monto Total</h2>
                            <p class="text-3xl font-bold text-blue-600">${{ $total }}</p>
                        </div>
                        <div>
                            <img src="https://img.icons8.com/fluency/48/000000/money-bag.png" alt="Icono Monto Total">
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Gráfico sobre tu flujo de dinero al final del día</h2>
                        <canvas id="montoFinalChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="bg-green-100 p-4 rounded shadow">
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6 flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Ganancias Totales</h2>
                        <p class="text-3xl font-bold text-green-600">${{$ganancias}}</p>
                    </div>
                    <div>
                        <i class="fas fa-arrow-up text-green-500"></i>

                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Gráfico de Ganancias Diarias</h2>
                    <canvas id="gananciasChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 rounded shadow mt-8">
            <h2 class="text-2xl font-bold mb-4">Análisis de mercado</h2>
            <!-- Aquí puedes insertar el análisis de mercado -->
        </div>
    </div>

    <!-- Modal para registrar ingresos -->

<!-- Modal para registrar ingresos -->
<!-- Modal para registrar ingresos -->
<!-- Modal para registrar ingresos -->
<div id="incomeModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-2xl leading-6 font-medium text-gray-900" id="modal-title">Registrar los montos</h3>
                <form id="incomeForm" method="POST" action="/ingresos">
                    @csrf
                    <div>
                        <div class="mt-1 p-3">
                            <label for="monto_inicio" class="block text-sm font-medium text-gray-700">Ingresa Monto inicial</label>
                            <input type="number" id="monto_inicio" name="monto_inicio" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md p-2 outline-none">
                            <label for="monto_final" class="block text-sm font-medium text-gray-700 mt-3">Ingresa el Monto Final</label>
                            <input type="number" id="monto_final" name="monto_final" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md p-2 outline-none mt-1">
                        </div>
                    </div>
                    <!-- Botones -->
                    <!-- Botones del modal -->
<!-- Botones del modal -->
<div class="mt-4 flex justify-between">
    <!-- Botón Registrar -->
    <div class="w-1/2 mr-2">
        <button type="button" id="submitIncome" class="modal-button bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm w-full">
            Registrar
        </button>
    </div>
    <!-- Botón Cancelar -->
    <div class="w-1/2 ml-2">
        <button type="button" id="cancelIncome" class="modal-button bg-red-500 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-md shadow-sm w-full">
            Cancelar
        </button>
    </div>
</div>


                </form>
            </div>
        </div>
    </div>
</div>




    <script>
        document.getElementById('registerIncome').addEventListener('click', function() {
            document.getElementById('incomeModal').classList.remove('hidden');
        });
        document.getElementById('cancelIncome').addEventListener('click', function() {
        document.getElementById('incomeModal').classList.add('hidden');
    });


        document.getElementById('submitIncome').addEventListener('click', function() {
            var montoInicial = document.getElementById('monto_inicio').value;
            var montoFinal = document.getElementById('monto_final').value;

            fetch('/asistente', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    monto_inicial: montoInicial,
                    monto_final: montoFinal
                })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('incomeModal').classList.add('hidden');
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var montosFinales = @json($montosFinales);
        var diasDeLaSemana = @json($diasDeLaSemana);

        var ctx = document.getElementById('montoFinalChart').getContext('2d');
        var montoFinalChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: diasDeLaSemana,
                datasets: [{
                    label: 'Monto Final Diarios',
                    data: montosFinales,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
<script>
    var montosFinales = @json($ganancias);
    var diasDeLaSemana = @json($dias);

    var ctx = document.getElementById('gananciasChart').getContext('2d');
        var montoFinalChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: diasDeLaSemana,
                datasets: [{
                    label: 'Ganancias Diarias',
                    data: montosFinales,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

</script>
</body>
</html>
