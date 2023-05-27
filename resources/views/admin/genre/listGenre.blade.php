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

                    <a href="{{route('addgenre')}}" style="float:right;">Add New</a>
                        <h3>List</h3>
                        
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-8">
                                <table border="1" width="100%">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    
                                    @foreach ($genredata as $i=>$item)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$item->name}}</td>
                                        <td><a href="{{ route('editgenre', ['id'=>Crypt::encryptString($item->id)]) }}">Edit</a> | <a href="{{ route('delgenre', ['id'=>Crypt::encryptString($item->id)]) }}">Delete</a></td>
                                    </tr>    
                                    @endforeach
                                </table>
                            </div>

                            
                        </form>
                    </div>         
                    
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
