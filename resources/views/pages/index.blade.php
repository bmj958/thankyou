@extends('layouts.landing')
@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel bgDark slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide"
                         src="#"
                         alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Everyone has something to teach. Everyone has something to learn.</h1>
                            <p>Discover Learning Experiences provided by our Customers</p>
                            <p><a class="btn btn-lg btn-primary" href="/discover-online-courses" role="button">Discover</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide"
                         src="..."
                         alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Understand Learner Enagement</h1>
                            <p>Learn how Learana can improve learning outcomes and increase productivity.</p>
                            <p><a class="btn btn-lg btn-primary" href="/why-learana" role="button">Why Learana</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide"
                         src="..."
                         alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>eSchool Management</h1>
                            <p> (Courses, Scheduling, Registration, and eCommerce)</p>
                            <p><a class="btn btn-lg btn-primary" href="/meet-learana" role="button">Meet Learana</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
        <h1>Features and Pricing</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bgDark">
                <tr class="font-weight-bold text-white">
                    <th scope="col"></th>
                    <th scope="col"><h4>Students and Teachers</h4></th>
                    <th scope="col"><h4>Individuals</h4></th>
                    <th scope="col"><h4>Businesses</h4></th>
                    <th scope="col"><h4>Enterprise</h4></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Course Catalog</h4></th>
                    <td class="font-weight-bold">yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white"  scope="row"><h4>Registration</h4></th>
                    <td class="font-weight-bold">yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Enagement Insights</h4></th>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Scheduling</h4></th>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Instant Messenger Integration</h4></th>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Webinar Management</h4></th>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">yes</td>
                </tr>

                <tr>
                    <th class="bgDark font-weight-bold text-white"  scope="row"><h4>Billing</h4></th>
                    <td class="font-weight-bold">No</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Marketing Tools</h4></th>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">yes</td>
                </tr>

                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Learana Branding</h4></th>
                    <td class="font-weight-bold">Minimal</td>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Optional</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Marketplace</h4></th>
                    <td class="font-weight-bold">Hidden</td>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Optional</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-white" scope="row"><h4>Price</h4></th>
                    <td class="font-weight-bold">Free for .EDU</td>
                    <td class="font-weight-bold">$19.95</td>
                    <td class="font-weight-bold">$100.00</td>
                    <td class="font-weight-bold">Call</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Three columns of text below the carousel -->



    </div>


@stop