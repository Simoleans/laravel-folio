@php
    $products = \App\Models\Products::all();
@endphp

<style>
    table, th, td {
        border: 1px solid black;
    }
    th {
        background-color: #7c9cb0;
    }
</style>

<table>
    <thead>
        <td>ID</td>
        <td>Descripcion</td>
        <td>Stock</td>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td><a href="/products/{{$product->id}}">{{$product->id}}</a></td>
            <td>{{$product->description}}</td>
            <td>{{$product->stock}}</td>
        </tr>
    @endforeach
</table>
