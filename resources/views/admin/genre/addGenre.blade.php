@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Genre Master</div>

                <div class="card-body">
                    
                    @if(session('message'))
                    <div class="col-auto alert alert-success">
                            {{ session('message') }}
                    </div>
                    @endif
                    

                    <a href="{{route('genre')}}" style="float:right;"> &lt;&lt; Back </a>
                        <h3>Add New</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insertgenre') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="genrename" class="col-md-4 col-form-label text-md-end">Genre Name:</label>
                                <input id="genrename" type="text" class="form-control" name="genrename" required>
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
