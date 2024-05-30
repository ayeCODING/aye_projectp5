@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h2>Produk List</h2></center>
        @foreach ($produk as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/produks/'.$item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="/produk/{{$item->id}}" class="btn btn-info">Detail Produk</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Informasi</h5>
                <p>Alamat: Jl. Cibaduyut Raya No. 123, Kota Bandung, Negara Indonesia</p>
                <p>Email: salmanananda2@gmail.com</p>
                <p>Telepon: 0895392055699
            <div class="col-md-4">
                <h5>Tautan</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Ikuti Kami</h5>
                <ul class="list-unstyled">
                    <li><a href="#"><img src="{{ asset('path_to_facebook_logo') }}" alt="Facebook" width="24" height="24"></a></li>
<li><a href="#"><img src="{{ asset('path_to_instagram_logo') }}" alt="Instagram" width="24" height="24"></a></li>
<li><a href="#"><img src="{{ asset('path_to_twitter_logo') }}" alt="Twitter" width="24" height="24"></a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>

@endsection
