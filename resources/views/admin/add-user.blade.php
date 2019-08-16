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
                      <label class="control-label col-sm-2" for="email">Username:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" value="{{ old('name', $user->name) }}"  name="name">
                         @if ( $errors->has('name') )
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                         @endif
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="password">Password:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" value="old('password', $user->password)"  name="password">
                         @if ( $errors->has('password') )
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                         @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="Department">Department:</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="department"  name="deptt_id">
                        <option value="">Select Department</option>
                        @foreach ($deptts as $deptt)
                            <option value="{{ $deptt->id }}" {{ old('deptt_id', $user->deptt_id)== $deptt->id ? 'selected' : '' }} > {{ $deptt->name }} </option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-sm-2" for="Office">Office:</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="office_id"  name="office_id">
                        <option value="">Select Office</option>
                        
                        @foreach ($offices as $office)
                            <option value="{{ $office->id }}" {{ old('office_id', $user->office_master_id)== $office->id ? 'selected' : '' }} > {{ $office->office_name }} </option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-sm-2" for="user_type">User Type :</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="user_type"  name="user_type">
                          <option value="">Select User Type</option>
                         @php
                          $keys= array_keys($user_type);
                          $values = array_values($user_type);
                          for($i=0; $i < count($keys); $i++) {  @endphp
                            <option value="@php echo $keys[$i] @endphp " {{ old('user_type', $user->user_type)== $keys[$i] ? 'selected' : '' }} > @php echo $values[$i] @endphp  </option>

                            @php }
                         @endphp 

                        </select>
                        
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

@foreach ( $user_type as $type )
   
@endforeach

@endsection