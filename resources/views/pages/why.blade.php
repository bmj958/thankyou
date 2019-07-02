@extends('layouts.landing')
@section('content')
    <div class="row">
        <div class="container justify-content-center ">

            <div class="jumbotron learanaJumbotron">

            </div>
        </div>
    </div>

    <div class="row ml-auto mr-auto bgDark">
        <div class="container justify-content-center ">

            <h1 class="text-center text-white">Virtual School Management</h1>
            <p class="text-center text-white">Create exceptional experiences for your learners.</p>
            <div class="card-deck">
                <div class="card mb-3 pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Registration and Scheduling</h4>
                        <p class="card-text">Talk about course registration and scheduling</p>
                    </div>
                </div>
                <div class="card shadow mb-3  pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Learner Engagement</h4>
                        <p class="card-text">Talk about content analysis and automation</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Communications</h4>
                        <p class="card-text">Talk about web conferencing and chat.
                        </p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">eCommerce</h4>
                        <p class="card-text">Talk about marketplace and billing options</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid bg-primary">
            <div class="container">
                @include('includes.influencers')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid ">
            <div class="container">
                @include('includes.educators')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid bg-primary">
            <div class="container">
                @include('includes.trainers')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid ">
            <div class="container">
                @include('includes.guides')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>


@stop