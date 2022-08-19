@extends('layouts.app')

@section('content')
<div class="container">
    <div class="position-relative overflow-hidden p-3 m-md-3 text-center mt-5 bg-light">
      <div class="col-md-5 mx-auto">
        <h1 class="fadein display-4 font-weight-normal">Contact</h1>
        <p class="faderight lead font-weight-normal">Contact me by filling up this form ;)</p>
      </div>
    </div>
    <div class="row">
        
        <div class="fadeleft contact-details col-md-6 text-center">
        <h3 class="mt-3">bsis.mendiolajohnivans@gmail.com</h3>
        <h3 class="mt-3">09188277736</h3>
        <h3 class="mt-3">Binangonan, Rizal</h3>

        </div>

        <div class="faderight contact-form col-md-6">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        <form action="{{ route('send.mail') }}" method="POST">
            @csrf
             <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Your Name">
                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" name="email" id="inputPassword4" placeholder="example@gmail.com">
                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                <label for="inputEmail4">Subject</label>
                <input type="text" class="form-control" name="subject" id="inputEmail4" placeholder="Your Name">
                @error('subject') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

            <div class="form-group mt-3">
                <label for="inputAddress">Message:</label>
                <textarea type="text" class="form-control" name="msg" id="inputAddress" placeholder="Your Message"></textarea>
                @error('msg') <span class="text-danger">{{ $message }}</span>@enderror

            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection