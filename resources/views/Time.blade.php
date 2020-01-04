@extends('layout')
@section('Day', 'active bg-success text-white')
@section('content')
    <div class="row">
        @foreach($schedules as $Day)
            <?php
            $temp = explode(' ',$Day->start);
            ?>
            <div class="col-lg-4 col-md-2 col-sm-1">
                <form action="/Time" method="POST">
                    @csrf
                    <input class="btn btn-success border border-light btn-block" type="submit" value="{{ $temp[1] }}">
                    <input type="hidden" name="_token" value="{{$temp[1]}}">
                </form>
            </div>
        @endforeach
    </div>
@endsection
