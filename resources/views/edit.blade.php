@extends('utama')
@section('content')

<form class="forms-sample" action="{{ route('edit',['id'=>$barang->id]) }}" method="POST" id="form">
    @csrf
    <div class="form-group">
        <label for="code">Kode Barang</label>
        <input type="text" class="form-control" id="kodebarang" name="KodeBarang" placeholder="Code Barang" value="{{$barang->KodeBarang}}">
    </div>
    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control" id="namabarang" name="NamaBarang" placeholder="Nama Barang" value="{{$barang->NamaBarang}}">
    </div>
    <div class="form-group">
        <label for="jenis">Jenis Varian</label>
        <input type="text" class="form-control" id="jenisvarian" name="JenisVarian" placeholder="Jenis Varian" value="{{$barang->JenisVarian}}">
    </div>
    <div class="form-group">
        <label for="harga">Harga Jual</label>
        <input type="number" class="form-control" id="hargajual" name="HargaJual" placeholder="Harga Barang" value="{{$barang->HargaJual}}">
    </div>
    <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="number" class="form-control" id="qty" name="Qty"
            placeholder="Jumlah Barang" value="{{$barang->Qty}}">
    </div>
    <button type="submit" class="btn btn-primary me-2">Proses</button>

</form>
@endsection