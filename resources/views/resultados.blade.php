@extends('layout')

@section('content')
    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-16">
            <h2 class="font-bold text-3xl text-center">Resultados</h2>
            <div class="bg-white rounded-xl p-4">
                <table class="results-table w-full table-auto border-collapse mt-4">
                    <tbody>
                        <tr>
                            <th>Folio: </th>
                            <td>{{ $item->folio }}</td>
                        </tr>
                        <tr>
                            <th>Resultado: </th>
                            <td><strong>{{ $item->result }}</strong></td>
                        </tr>
                        <tr>
                            <th>Nombre: </th>
                            <td>{{ $item->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Apellido: </th>
                            <td>{{ $item->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Fecha de Toma: </th>
                            <td>{{ $item->submission_date }}</td>
                        </tr>
                        <tr>
                            <th>Fecha de Resultado: </th>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Tipo de Prueba: </th>
                            <td>{{ $item->procedure }}</td>
                        </tr>
                        <tr>
                            <th>Método: </th>
                            <td>{{ $item->method }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection