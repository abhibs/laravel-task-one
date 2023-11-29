@extends('user.layout.app')
@section('content')
    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">
                @include('user.layout.sidebar')
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL No</th>

                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userdatas as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>

                                        <a href="{{ route('user-restore', $item->id) }}" class="btn btn-secondary"><i
                                                class="fas fa-undo"></i></a>
                                        <a href="{{ route('user-force-delete', $item->id) }}" id="delete"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>


                                    </td>


                                </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->
@endsection
