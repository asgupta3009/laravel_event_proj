@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Artist Master</div>

                <div class="card-body">
                    
                    @if(session('message'))
                    <div class="col-auto alert alert-success">
                            {{ session('message') }}
                    </div>
                    @endif
                    

                    <a href="{{route('artist')}}" style="float:right;"> &lt;&lt; Back </a>
                        <h3>Edit</h3>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            @method('PUT')
                        
                            <div class="row mb-3">
                                <label for="artistname" class="col-md-4 col-form-label text-md-end">Artist Name:</label>
                                <input id="artistname" type="text" class="form-control" name="artistname" value="{{$data->name}}" required>
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
