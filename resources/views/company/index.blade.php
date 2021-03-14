@extends('layouts.app')

@section('content')
    <div class="page-body">

        <!-- Basic table card start -->
        <div class="card">
            <div class="card-header">
                <h5>Companies table</h5>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Sector</th>
                            <th>Website</th>
                            <th>Vote</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)

                            <tr>
                                <th scope="row">{{$company->id}}</th>
                                <td>{{$company->name}}</td>
                                <td>{{$company->sector}}</td>
                                <td><a href="{{$company->website}}" target="_blank">{{Str::limit($company->website,10)}}</a></td>
                                <td>{{$company->voteResult}}</td>
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
