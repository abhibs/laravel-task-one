@extends('user.layout.app')
@section('content')
    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">
                @include('user.layout.sidebar')
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="tabs-box">

                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <form action="{{ route('user-update') }}" method="post" class="default-form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}">

                                        <input type="hidden" name="fullname" value="Abhiram">
                                        <input type="hidden" name="avatar" value="avatar.png">
                                        <div class="form-group">
                                            <label>Prefix Name</label>


                                            <select class="wide mb-3" name="prefixname">
                                                <option value="Mr" @if ($data->prefixname == 'Mr') selected @endif>Mr
                                                </option>
                                                <option value="Mrs" @if ($data->prefixname == 'Mrs') selected @endif>Mrs
                                                </option>
                                                <option value="Ms" @if ($data->prefixname == 'Ms') selected @endif>Ms
                                                </option>
                                            </select>

                                            @error('prefixname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="firstname" autocomplete="off"
                                                value="{{ $data->firstname }}">
                                            @error('firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" name="middlename" autocomplete="off"
                                                value="{{ $data->middlename }}">
                                            @error('middlename')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lastname" autocomplete="off"
                                                value="{{ $data->lastname }}">
                                            @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Suffix Name</label>
                                            <input type="text" name="suffixname" autocomplete="off"
                                                value="{{ $data->suffixname }}">
                                            @error('suffixname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" autocomplete="off"
                                                value="{{ $data->username }}">
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" autocomplete="off"
                                                value="{{ $data->email }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" name="type" autocomplete="off"
                                                value="{{ $data->type }}">
                                            @error('type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Old Photo</label>
                                            <br>
                                            <img src="{{ asset($data->photo) }}" alt=""
                                                style="width:100px;heigh:100px;">
                                            <br>
                                            <label>Photo</label>

                                            <input type="file" name="photo" style="margin-right: 500px;">
                                            @error('photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>




                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Update User</button>
                                        </div>
                                    </form>

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
