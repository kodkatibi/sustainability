@extends('layouts.app')

@section('content')
    <div class="page-body">
        <policy-form :companyid="{{$company->id}}"></policy-form>
    </div>
@endsection
