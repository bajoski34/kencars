@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="">Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Users</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Vehicles</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-10">
                @yield('admin_content')
            </div>
        </div>
    </div>
@endsection