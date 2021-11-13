@extends('layouts/templete')
@section('title')
    Inventario
@endsection

@section('body')
    <div class="card">
        <div class="card-header">
            PRODUCTOS DEL INVENTARIO
        </div>
        <div class="card-body">
            <h4 class="card-title">HOLA NVENTARIO</h4>
            <p class="card-text">estos son tus productos</p>
        </div>
        
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
        </tbody>
    </table>
    
@endsection