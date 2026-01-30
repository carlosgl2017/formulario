<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Sistemas #{{ $formulario->id }}</title>
    <style>
        /* Estilos generales */
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin-top: 5px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        /* --- ESTILOS DEL ENCABEZADO (TIPO TABLA) --- */
        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .header-table td {
            border: 1px solid #333;
            padding: 5px;
            vertical-align: middle;
        }

        /* Columna 1: Logo */
        .header-table .logo-cell {
            width: 20%;
            text-align: center;
        }

        /* Columna 2: Título */
        .header-table .title-cell {
            width: 60%;
            text-align: center;
            background-color: #f9f9f9;
        }
        .header-table h1 {
            margin: 0;
            font-size: 20px;
            color: #333;
            text-transform: uppercase;
        }

        /* Columna 3: ID */
        .header-table .id-cell {
            width: 20%;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }

        /* --- ESTILOS DE LA TABLA DE DATOS --- */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .data-table td {
            padding: 4px;
            border: 1px solid #333;
            vertical-align: middle;
        }

        /* Columna de la izquierda (títulos) */
        .data-table .label-column {
            font-weight: bold;
            width: 25%;
            background-color: #f2f2f2;
        }

        /* Nueva clase para la celda de firma */
        .signature-cell {
            width: 35%;
            /* AUMENTADO: De 60px a 100px para dar espacio a la firma */
            height: 100px;
            vertical-align: bottom !important; /* El texto queda abajo */
            text-align: center;
            color: #999;
            font-size: 10px;
        }

        /* Estilos para la sección de descripción */
        .description-section {
            margin-top: 10px;
        }
        .description-section .label {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .description-section .content {
            border: 1px solid #333;
            padding: 10px;
            min-height: 100px;
        }
    </style>
</head>
<body>

<!-- 1. Encabezado en forma de tabla con bordes -->
<table class="header-table">
    <tr>
        <!-- Columna 1: Logo -->
        <td class="logo-cell">
            <img src="{{ public_path('images/logo.png') }}" alt="Logo" style="width: 60px;">
        </td>

        <!-- Columna 2: Título -->
        <td class="title-cell">
            <h1>Formulario de Sistemas</h1>
        </td>

        <!-- Columna 3: ID -->
        <td class="id-cell">
            <div>N° REGISTRO</div>
            <div style="font-size: 18px; margin-top: 2px;">
                {{ str_pad($formulario->id, 4, '0', STR_PAD_LEFT) }}
            </div>
        </td>
    </tr>
</table>

<!-- 2. Tabla de datos -->
<table class="data-table">
    <tr>
        <td class="label-column">Fecha y Hora:</td>
        <!-- CAMBIO AQUÍ: Se eliminó la 'A' del formato para quitar AM/PM -->
        <td class="data-column" colspan="2">{{ \Carbon\Carbon::parse($formulario->fecha)->format('d/m/Y H:i') }}</td>
    </tr>
    <tr>
        <td class="label-column">Procedimiento:</td>
        <td class="data-column" colspan="2">{{ $formulario->procedimiento->nombre ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td class="label-column">Responsable:</td>
        <td class="data-column" colspan="2">{{ $formulario->responsable->name ?? 'N/A' }}</td>
    </tr>

    <!-- Fila de Autorizador -->
    <tr>
        <td class="label-column">Autorizador:</td>
        <td class="data-column">
            {{ $formulario->autorizador->name ?? 'N/A' }}
        </td>
        <td class="signature-cell">
            Firma Autorizada
        </td>
    </tr>
</table>
<!-- 3. Sección de Descripción -->
<div class="description-section">
    <div class="label">Descripción del Trabajo Realizado:</div>
    <div class="content">
        <p>{{ $formulario->descripcion }}</p>
    </div>
</div>

</body>
</html>
