@extends('utama')

@section('content')
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>KodeBarang</th>
                                <th>NamaBarang</th>
                                <th>JenisVarian</th>
                                <th>Qty</th>
                                <th>HargaJual</th>
                                <th>totalHargaJual</th>
                                <th>hargaSetelahDiskon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listProduct as $product)
                            <tr>
                                <td>{{$product->KodeBarang}}</td>
                                <td>{{$product->NamaBarang}}</td>
                                <td>{{$product->JenisVarian}}</td>
                                <td>{{$product->Qty}}</td>
                                <td>{{$product->HargaJual}}</td>
                                <td>{{$product->totalHargaBarang}}</td>
                                <td>{{$product->hargaSetelahDiskon}}</td>
                                <td>
                                    <a href="{{route('edit.form',['id'=>$product->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete', ['id' => $product->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
