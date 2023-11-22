@extends('utama')

@section('content')
<form method="POST" action="/process-product">
    @csrf
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description">
              Basic form layout
            </p>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputUsername1">Kode Barang</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="text" name="KodeBarang">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="text" name="NamaBarang">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jenis Varian</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="text" name="JenisVarian">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Qty</label>
                <input type="number" class="form-control" id="exampleInputConfirmPassword1" placeholder="number" name="Qty">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Harga Jual</label>
                <input type="number" class="form-control" id="exampleInputConfirmPassword1" placeholder="number" name="HargaJual">
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</form>

@endsection
 