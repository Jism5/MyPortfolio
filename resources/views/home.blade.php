
@extends('layouts.app')

@section('content')
<div class="home position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5 "> 
        <div class="fadein">
        <img src="{{ asset('assets/img/boy.png') }}" height="250px" alt="">
        </div>
        <h1 class="faderight display-4 font-weight-normal">Hi, I'm <span>Jis</span></h1>
        <p class="fadeleft lead font-weight-normal">Programmer | Web Developer</p>
        <a class="fadein btn btn-outline-secondary" href="/quali">My Works &raquo;</a>
        
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
 
    <!-- about me -->
    <div class="about text-center mt-5">
        <div class="container">
        <div class="row">
          <div class="animated col-md-6">
          <h1>About me</h1>
            <img src="{{ asset('assets/img/imgaa.png') }}" height="400px" alt="">
          </div>
          <div class="animated col-md-6">
            <h2>I am</h2>
            <p>John Ivan S. Mendiola, Bachelor's degree In Information System, who is passionate in coding, hardware trouble shooting and network configuration.</p>
            <h2>I do</h2>
            <p>Interested in Web development</p>  
            <h2>I Graduated</h2>
            <p>at AMA Computer Learning Center</p>
            <h2>Apart from coding I do</h2>
            <p>love listening to music, playing some instruments like guitar and drums</p>    
        </div>
        </div>
    </div>
@endsection
