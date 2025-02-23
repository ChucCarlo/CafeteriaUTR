<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas con Eventos y Animaciones</title>
    <link rel="stylesheet" href="./estilo.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .table-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 48%;
        }
        h2 {
            margin-bottom: 10px;
            background: #3498db;
            color: white;
            padding: 10px;
            width: 100%;
            text-align: center;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        .highlight {
            background-color: #f1c40f !important;
        }
        #tabla3 {
            transition: transform 0.3s;
        }
    </style>
</head>
<body>
<div class="container mt-4">

<!-- TABLA 1 -->
<h2>TABLA 1</h2>
<table class="table table-bordered tabla1" onclick="alert('Has hecho clic en la Tabla 1')">
    <tr>
        <td>Celda</td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>
            <table class="table table-bordered">
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
            </table>
        </td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>
            <table class="table table-bordered">
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
            </table>
        </td>
        <td>Celda</td>
    </tr>
</table>

<!-- TABLA 2 -->
<h2>TABLA 2</h2>
<table class="table table-bordered tabla2" onmouseenter="console.log('Has entrado a la Tabla 2')">
    <tr>
        <td>Celda</td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>
            <table class="table table-bordered">
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
            </table>
        </td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>
            <table class="table table-bordered">
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
            </table>
        </td>
        <td>Celda</td>
    </tr>
</table>

<!-- TABLA 3 -->
<h2>TABLA 3</h2>
<table class="table table-bordered tabla3" onmouseover="console.log('Mouse sobre la Tabla 3')">
    <tr>
        <td colspan="3">Celda</td>
        <td rowspan="3">Celda</td>
    </tr>
    <tr>
        <td rowspan="3">
            <table class="table table-bordered">
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <td colspan="3">Celda</td>
    </tr>
    <tr>
        <td colspan="3">Celda</td>
        <td colspan="3">Celda</td>
    </tr>
    <tr>
        <td colspan="3">Celda</td>
        <td colspan="3">Celda</td>
    </tr>
</table>

<!-- TABLA 4 -->
<h2>TABLA 4</h2>
<table class="table table-bordered tabla4" onmouseleave="alert('Has salido de la Tabla 4')">
    <tr>
        <td>Celda</td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>Celda</td>
        <td>Celda</td>
    </tr>
    <tr>
        <td>Celda</td>
        <td>
            <table class="table table-bordered">
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
                <tr>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                    <td>Celda</td>
                </tr>
            </table>
        </td>
        <td>Celda</td>
    </tr>
</table>

</div>
</body>
</html>
