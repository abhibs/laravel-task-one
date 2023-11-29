@extends('user.layout.app')
@section('content')
    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>User List</h5>
            </div>
            <div class="row clearfix">
                @foreach ($userdatas as $item)
                    <div class="col-lg-4 col-md-6 mt-5 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="{{ route('user-detail', $item->id) }}"><img
                                                src="{{ asset($item->photo) }}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('user-detail', $item->id) }}">{{ $item->prefixname }}
                                            {{ $item->fullname }} {{ $item->suffixname }}</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{ asset($item->avatar) }}"
                                                    alt="">
                                            </figure>
                                            <h5><a href="{{ route('user-detail', $item->id) }}">{{ $item->username }}</a>
                                            </h5>
                                        </li>
                                        <li>{{ $item->created_at->format('M d Y') }}</li>
                                    </ul>

                                    <div class="btn-box">
                                        <a href="{{ route('user-detail', $item->id) }}" class="theme-btn btn-two">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- news-section end -->
@endsection
