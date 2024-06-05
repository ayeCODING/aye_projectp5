@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h2>Kategori</h2></center>
        @foreach ($produk as $item)
        <div class="card mt-5" style="width: 18rem;">
            <img src="{{asset('storage/produks/'.$item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="/produk/{{$item->id}}" class="btn btn-outline-dark">Detail Produk</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
<footer class="footer mt-5 py-3 bg-light">
    <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <h5>Informasi</h5>
        <p>Alamat: Jl. Cibaduyut No. 66, Cibaduyut, Kec.Bojongloa Kidul, Kota Bandung, Jawa Barat</p>
        <p>Email: salmanananda2@gmail.com</p>
        <p>Telepon: 0895392055699</p>
      </div>
      <div class="col">
        <h5>Tautan</h5>
        <ul class="list-unstyled">
            <li><a href="#" style="text-decoration: none">Tentang Kami</a></li>
            <li><a href="#" style="text-decoration: none">Kebijakan Privasi</a></li>
            <li><a href="#" style="text-decoration: none">Syarat dan Ketentuan</a></li>
        </ul>
      </div>
      <div class="col">
        <h5>Ikuti Kami</h5>
        <ul class="list-unstyled">
            <li><i class="bi bi-instagram"></i><a href="https://www.instagram.com/accounts/onetap/?next=%2F&hl=en" style="text-decoration: none">  slmnaye</a></li>
        </ul>
      </div>
    </div>
  </div>

            </div>
        </div>
    </div>
</footer>
@endsection
