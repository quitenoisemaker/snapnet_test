@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-md-8">
            <div class="card p-4">
                <form method="POST" action="{{ route('store.citizen') }}">
                    @csrf 
                    {{-- <input type="hidden" name="_method" value="PUT"> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Full name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                          <div class="form-group col-md-6">
                            <label >Select Gender</label>
                            <select class="form-control" id="exampleSelect1" name="gender">
                                <option disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>    
                            </select>
                          </div>
                          <div class="form-group col-md-12">
                            <label >Address</label>
                            <input type="text" class="form-control" name="address">
                          </div>
                          <div class="form-group col-md-6">
                            <label >Phone</label>
                            <input type="text" class="form-control" name="phone">
                          </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleSelect1">Wards</label>
                                <select class="form-control" id="exampleSelect1" name="ward_id">
                                    @if (count($wards)>0)
                                    <option disabled selected>Select ward</option>
                                       @foreach ($wards as $ward)
                                    <option value={{$ward->id}}>{{$ward->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>                   
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            
        </div>
        </div>
    </div>
</div>
@endsection
