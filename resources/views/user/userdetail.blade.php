@extends('user.layout.app')
@section('content')
    <!-- properties-section -->
    <section class="properties-section centred">
        <div class="auto-container">
            <div class="row clearfix">
                @include('user.layout.sidebar')
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="table-outer">
                        <table class="properties-table">
                            <thead class="table-header">
                                <tr>
                                    <th>User Photo</th>
                                    <th>
                                        <figure><img src="{{ asset($data->photo) }}" style="width: 300px; height:350px;"
                                                alt="">
                                        </figure>
                                        <div class="title">{{ $data->fullname }}</div>
                                        <div class="price">{{ $data->email }}</div>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>User Avatar Photo</p>
                                    </td>
                                    <td>
                                        <img src="{{ asset($data->avatar) }}" alt="">
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User Prefix Name</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->prefixname }}</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User First Name</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->firstname }}</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User Middle Name</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->middlename }}</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User Last Name</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->lastname }}</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User Suffix Name</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->suffixname }}</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User Full Name</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->middlename }}</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <p>User Email</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->email }}</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <p>User Type</p>
                                    </td>
                                    <td>
                                        <p>{{ $data->type }}</p>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- properties-section end -->
@endsection
