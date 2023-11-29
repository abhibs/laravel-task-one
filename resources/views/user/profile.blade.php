@extends('user.layout.app')
@section('content')
    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">
                @include('user.layout.sidebar')
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">

                        <div class="wrapper list">
                            <div class="deals-list-content list-item">



                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{ asset($data->photo) }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">{{ $data->prefixname }}
                                                        {{ $data->fullname }} {{ $data->suffixname }}</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>{{ $data->email }}</h6>
                                                    <h4>{{ $data->type }}</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="{{ asset($data->avatar) }}" alt="">
                                                        <span>{{ $data->username }}</span>
                                                    </figure>
                                                </div>
                                            </div>

                                            <ul class="more-details clearfix">
                                                <li>{{ $data->firstname }}</li>
                                                <li></i>{{ $data->middlename }}</li>
                                                <li></i>{{ $data->lastname }}</li>

                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a
                                                        href="{{ route('user-detail', $data->id) }}"
                                                        class="theme-btn btn-two">See Details</a></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->
@endsection
