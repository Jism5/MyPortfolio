@extends('layouts.app')

@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="fadein display-4 font-weight-normal">My Projects</h1>
        <p class="faderight lead font-weight-normal">Here are some of the projects I have built :)</p>
      </div>

<div class="container mt-5">
    <div class=" fadeup row">
            <div class="col-md-4">
                    <div class="">            
                    <img class="card-img-top" src="{{ asset('assets/img/prod1.png') }}" height="400px"  alt="Card image cap">
                    <div class="card-body">
                    <h4>Web based Automated Transportation E-payment using QR Code</h4>
                    <span class="text-secondary">PHP | MySQL | JavaScript | Bootstrap | HTML | CSS</span>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                    <div class="">            
                    <img class="card-img-top" src="https://imag.malavida.com/mvimgbig/download-fs/visual-studio-2010-6538-4.jpg=" height="400px"  alt="Card image cap">
                    <div class="card-body">
                    <h4>Hotel Room Reservation System</h4>
                    <span class="text-secondary">VB.net | Visual Basic 2010</span>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                    <div class="">            
                    <img class="card-img-top" src="{{ asset('assets/img/prod1.png') }}" height="400px"  alt="Card image cap">
                    <div class="card-body">
                    <h4>Web based Automated Transportation E-payment using QR Code</h4>
                    <span class="text-secondary">PHP | MySQL | JavaScript | Bootstrap | HTML | CSS</span>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>


    </div>
</div>
            
@endsection