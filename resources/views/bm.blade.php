@extends('layout/main')

@section('title' , 'About')
    
@section('container')
<title>Barang Masuk</title>
</head>
<body>

    
<div class="container">
    
    <p></p>
    <nav class="navbar navbar-light ">
        <div class="container-fluid">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Barang
</button>  
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cari</button>
          </form>
        </div>
        
    </nav>
    <p></p>
    <table class="table">
        <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga per item</th>
              <th scope="col">Aksi</th>
            </tr>
    </thead>
    <tbody>
            
       <tr>
        <th scope="row">1</th>
        <td>004545</td>
        <td>galon</td>
        <td>29</td>
        <td>50.000</td>
        <td>
          <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-warning">Ubah</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        
        </td>
      </tr>
      
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Kode Barang:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama Barang:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Jumlah:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Harga per item:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Konfirmasi</button>
        </div>
      </div>
    </div>
  </div>
</div>

    
@endsection 
