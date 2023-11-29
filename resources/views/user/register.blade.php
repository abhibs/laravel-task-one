@extends('user.layout.app')
@section('content')
    <!-- ragister-section -->
    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                    <div class="sec-title">
                        <h5>Register</h5>
                    </div>
                    <div class="tabs-box">

                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <form action="{{ route('user-register-post') }}" method="post" class="default-form"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="fullname" value="Abhiram">
                                        <input type="hidden" name="avatar" value="avatar.png">
                                        <div class="form-group">
                                            <label>Prefix Name</label>


                                            <select class="wide mb-3" name="prefixname">
                                                <option>Choose Prefix Name</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Ms">Ms</option>
                                            </select>

                                            @error('prefixname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="firstname" autocomplete="off">
                                            @error('firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" name="middlename" autocomplete="off">
                                            @error('middlename')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lastname" autocomplete="off">
                                            @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Suffix Name</label>
                                            <input type="text" name="suffixname" autocomplete="off">
                                            @error('suffixname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" autocomplete="off">
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" autocomplete="off">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" name="type" autocomplete="off">
                                            @error('type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="photo" style="margin-right: 500px;">
                                            @error('photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" autocomplete="off">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" autocomplete="off">
                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Register</button>
                                        </div>
                                    </form>
                                    <div class="othre-text">
                                        <p>Already have an account? <a href="">Login</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ragister-section end -->
@endsection
