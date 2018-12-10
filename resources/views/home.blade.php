@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @guest
                        Home
                    @else
                        You are logged in!
                    @endguest
                </div>
            </div>
        </div>
    </div> -->
    <div class="container container-full ">
        <div id="home-carousel" class="media-custom frame-media no-margin-bottom">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <p>
                    Welcome messages: The definitive first impression for your mobile app.

First impressions count, both for people and products. Apps have one chance to grab a new user’s attention. This is especially true when you consider the average mobile app retention rate: Only 21 percent of users remain active after the first 24 hours of downloading an app. To raise your retention rate, it’s imperative to make a first impression that really sticks.
                    </p>
                </div> 
            </div>
        </div>
    </div>
</div>




<div class="container-fluid bg-white" style="padding: 10px;">
    <div class="container container-full ">
        <div id="home-carousel" class="media-custom frame-media no-margin-bottom">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card-box text-center">
                        <img src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png" class="img-responsive"> <h4>Vision Mission</h4> 
                        <p>.........................</p>
                    </div>
                </div> 

                <div class="col-md-3 col-sm-6">
                    <div class="card-box text-center">
                        <img src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png" class="img-responsive"> <h4>Job Desc</h4> 
                        <p>.........................</p>
                    </div>
                </div> 
                    
                <div class="col-md-3 col-sm-6">
                    <div class="card-box text-center">
                        <img src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png" class="img-responsive"> <h4>Programs</h4> 
                        <p>.........................</p>
                    </div>
                </div> 
                
                <div class="col-md-3 col-sm-6">
                    <div class="card-box text-center">
                        <img src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png" class="img-responsive"> <h4>Structure</h4> 
                        <p>.........................</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
