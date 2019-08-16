@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div>
                <p> <a href="{{ route('users') }}"> Users  </a> </p>
                <p> <a href="{{ route('add.department') }}"> Add Deptt  </a> </p>
                <p> <a href="{{ route('add.office') }}"> Add Office </a> </p>
                <p> <a href="{{ route('add.vip') }}"> Add Vip  </a> </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
