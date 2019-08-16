@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <br>
               
                @if ( session('status') )
                <div class="container-fluid">
                    <div class="alert alert-{{ session('status') }}" role="alert">
                        <h4 class="alert-heading">{{ strtoupper(session('status')) }}</h4>
                        <p>{{ session('message') }}</p> 
                    </div>
                </div>
                @endif

                <form class="form-horizontal" action="{{ url()->current() }}" method="post" >
                    @csrf

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="vip name"> VIP Type </label>
                      <div class="col-sm-10">
                       <select name="vip_id" id="vip_id" class="form-control">
                           @foreach ($vips as $vip) 
                           <option value="{{ $vip->id }}"> {{ $vip->name }} 
                           </option>
                          
                           @endforeach
                       </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name"> Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vip_name"  name="name">
                        </div>
                      </div>

                                       <div class="form-group">
                      <label class="control-label col-sm-2" for="contact"> Contact Details </label>
                      <div class="col-sm-10">
                        <input type="tel" class="form-control" id="contact"  name="contact">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                   
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>

            </div>
        </div>
    </div>
</div>

@endsection 