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

                    <a href="{{route('addvenue')}}" style="float:right;">Add New</a>
                        <h3>List</h3>
                        
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-8">
                                <table border="1" width="100%">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                    
                                    @foreach ($data as $i=>$item)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->contact_no}}</td>
                                        <!--<td><a href="{{-- route('editartist', ['id'=>Crypt::encryptString($item->id)]) --}}">Edit</a> | <a href="{{-- route('deleteartist', ['id'=>Crypt::encryptString($item->id)]) --}}">Delete</a></td>-->
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
