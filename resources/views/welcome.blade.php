@extends('layout')
@section('Appointment', 'active bg-success text-white')
@section('content')
    <div class="row">
        @foreach($appointments as $appointment)
            <div class="col-lg-4 col-md-2 col-sm-1">
                    <form action="/Employee" method="POST">
                        @csrf
                    <input class="btn btn-success border border-light btn-block" type="submit" value="{{ $appointment->name }}">
                        <input type="hidden" name="HiddenValue" value="{{$appointment->id}}">
                    </form>
            </div>
        @endforeach
    </div>
@endsection
