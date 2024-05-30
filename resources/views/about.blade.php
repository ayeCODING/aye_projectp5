@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h2>Ini Halaman About</h2></center>
        <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
            <h3>Nama Toko :Gruty</h3>
            <h3>Disini kita menjual berbagai jenis sepatu</h3>
              <h5 class="card-title">Lokasi Toko kami</h5>
              <p class="card-text"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.48902992212!2d107.59071397410708!3d-6.951495568053906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8c0dd1aaaef%3A0x620fbc8d47512ded!2sGrutty%20Shoes%20%26%20Bags!5e0!3m2!1sen!2sid!4v1717070668643!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
            <div class="card-footer text-muted">
            
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
