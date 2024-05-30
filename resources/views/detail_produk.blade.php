@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('produk') }}
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/produks/' . $produk->image) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $produk->nama_produk }} </h4>
                    <p class="tmt-3">
                        Merk : {!! $produk->merk->nama_merk !!}
                    </p>
                    <p class="tmt-3">
                        Harga : Rp.{{ number_format($produk->harga, 2) }}
                    </p>
                    <p class="tmt-3">
                        Stok : {!! $produk->stok !!}
                    </p>
                    <p class="tmt-3">
                        Deskripsi : {!! $produk->deskripsi !!}
                    </p>
                    <p class="tmt-3">
                        Kategori : {!! $produk->kategori->nama_kategori !!}
                    </p>
                    <p>
                        <a href="https://wa.me/0895392055699/?text=Halo,%20saya%20tertarik%20dengan%20{{ $produk->nama_produk }}%20dengan%20harga%20Rp.{{ number_format($produk->harga, 2) }}.%20Apakah%20masih%20tersedia?" class="btn btn-info">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="24" height="24" style="vertical-align: middle;">
                            Chat via WhatsApp
                        </a>
                    </p>
                </div>
            </div>
        </div>
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
