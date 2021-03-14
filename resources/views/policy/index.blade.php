@extends('layouts.app')

@section('content')
    <div class="page-body">

        <!-- Basic table card start -->
        <div class="card">
            <div class="card-header">
                <h5>Policy table</h5>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Policy name</th>
                            <th>Policy Description</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company->policies as $policy)

                            <tr>
                                <th scope="row">{{$policy->id}}</th>
                                <td>{{$company->name}}</td>
                                <td>{{$policy->title}}</td>
                                <td>{{$company->description}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- Basic table card end -->

    </div>

@endsection
