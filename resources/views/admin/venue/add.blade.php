@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Venue Master</div>

                <div class="card-body">
                    
                    @if(session('message'))
                    <div class="col-auto alert alert-success">
                            {{ session('message') }}
                    </div>
                    @endif
                    

                    <a href="{{route('venue')}}" style="float:right;"> &lt;&lt; Back </a>
                        <h3>Add New</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insertvenue') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="venue" class="col-md-4 col-form-label text-md-end">Venue Name:</label>
                                <input id="venue" type="text" class="form-control" name="venue" required>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">Address:</label>
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>

                            <div class="row mb-3">
                                <label for="contact" class="col-md-4 col-form-label text-md-end">Contact No.:</label>
                                <input id="contact" type="text" class="form-control" name="contact" required>
                            </div>

                            <div class="row mb-3">
                               
                                <input id="submit_btn" type="submit" class="btn btn-success" name="submit_btn">
                            </div>
                      
                            
                        </form>
                    </div>         
                    
                        


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
