@extends('layout')
@section('Employee', 'active bg-success text-white')
@section('content')
    <div class="row">
        @foreach($employees as $employee)
            <div class="col-lg-4 col-md-2 col-sm-1">
                <form action="/Day" method="POST">
                    @csrf
                    <input class="btn btn-success border border-light btn-block" type="submit" value="{{ $employee->name }}">
                    <input type="hidden" name="HiddenValue" value="{{$employee->id}}">
                </form>
            </div>
        @endforeach
    </div>
@endsection
