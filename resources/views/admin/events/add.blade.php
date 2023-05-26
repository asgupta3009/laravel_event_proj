@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Events</div>

                <div class="card-body">
                    
                    @if(session('message'))
                    <div class="col-auto alert alert-success">
                            {{ session('message') }}
                    </div>
                    @endif
                    

                    <a href="{{route('events')}}" style="float:right;"> &lt;&lt; Back </a>
                        <h3>Add New</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insertevents') }}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Title:</label>
                                <input id="title" type="text" class="form-control" name="title" required>
                            </div>

                            <div class="row mb-3">
                                <label for="genre" class="col-md-4 col-form-label text-md-end">Genre:</label>
                                <select id="genre" class="form-control" name="genre">
                                    <option value="">Select</option>
                                    @foreach ($genredata as $i=>$item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>    
                            </div>

                            <div class="row mb-3">
                                <label for="photo" class="col-md-4 col-form-label text-md-end">Image:</label>
                                <input id="photo" type="file" class="form-control" name="photo">
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Description:</label>
                                <input id="desc" type="text" class="form-control" name="desc">
                            </div>

                            <div class="row mb-3">
                                <label for="amt" class="col-md-4 col-form-label text-md-end">Amount:</label>
                                <input id="amt" type="text" class="form-control" name="amt">
                            </div>

                            <div class="row mb-3">
                                <label for="event_date" class="col-md-4 col-form-label text-md-end">Event Date:</label>
                                <input id="event_date" type="date" class="form-control" name="event_date">
                            </div>

                            <div class="row mb-3">
                                <label for="venue" class="col-md-4 col-form-label text-md-end">Venue:</label>
                                <select id="venue" class="form-control" name="venue">
                                    <option value="">Select</option>
                                    @foreach ($venuedata as $i=>$item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>    
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
