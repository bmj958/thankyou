@extends('layouts.landing')
@section('content')
    <div class="row ml-auto mr-auto bgDark">
        <div class="container justify-content-center ">
            <h1 class="text-center text-white">Share your experience with others.</h1>
            <p class="text-center text-white">Achieve your goals</p>
            <div class="card-deck">
                <div class="card mb-3 pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Solo</h4>
                        <p class="card-text">Solo are self paced courses that consist of currated resources and instructions that save you time searching for what to learn about a subject.</p>
                    </div>
                </div>
                <div class="card shadow mb-3  pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">One on One</h4>
                        <p class="card-text">Is for 1-1 interactions through webconferencing, in person meetings, and online chat.(Slack and FacebooK)</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Small Group Courses</h4>
                        <p class="card-text">Is for a  group interactions through webconferencing, in person meetings, and online chat.(Slack and FacebooK)</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Webinars</h4>
                        <p class="card-text">Lare groups that meet through web conferencing and online chat (Slack and FacebooK)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
x


    <div class="container">
        <div class="row">

            <button type="button" class="btn btn-primary">Request a Course</button>
            <button type="button" class="btn btn-secondary">Create a Course</button>
            <button type="button" class="btn btn-success">Register for Course</button>
        </div>
        <div class="row">

            <div class="col-md-4">

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Post Content Column -->
            <div class="col-md-8">

                <!-- Title -->
                <h1 class="mt-4">Recently Added Experiences</h1>

                <!-- Author -->
                <p class="lead">
                   Get started today!
                </p>

                <hr>

                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Experience Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Experience Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <hr>
            </div>

            <!-- Sidebar Widgets Column -->

            <!-- /.row -->

        </div>


@stop
