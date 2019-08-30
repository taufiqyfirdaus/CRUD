@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Tambah penjualan</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li><strong>{{ $error }}</strong>
        @endforeach
    </div>
    @endif

    <form action="{{ route('penjualan.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="id">id:</label>
        <input type="text" class="form-control" id="user" name="id">
      </div>
      <div class="form-group">
        <label for="kode_barang">kode_barang: </label>
        <input type="text" class="form-control" id="kode_barang" name="kode_barang">
      </div>
      <div class="form-group">
        <label for="jumlah">Jumlah: </label>
        <input type="text" class="form-control" id="jumlah" name="jumlah">
      </div>
      <div class="form-group">
        <label for="total_harga">total_harga: </label>
        <textarea class="form-control" id="total_harga" name="total_harga"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
      </div>
    </form>
  </div>
</section>
@endsection
