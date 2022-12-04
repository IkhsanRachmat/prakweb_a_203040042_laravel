@extends('layouts.main')

@section('container')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <div data-aos="fade-down" data-aos-duration="1500" class="kata2">
            <h1><b>Halaman<span> About</span></b></h1>
        </div>
    <div data-aos="fade-right" data-aos-duration="1500">
        <h3>{{ $name }}</h3>
    </div>
    <div data-aos="fade-left" data-aos-duration="1500">
        <p>203040042| {{ $email }}</p>
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="700">
        <img src="img/{{ $image }}" alt="{{ $name }}" width="300" class="border border-dark img-thumbnail rounded-circle " >
    </div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection