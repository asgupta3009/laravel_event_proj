<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 04:39:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>Event</title>
    <link href="{{asset('assets/images/logos/favicon.png')}}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h3 align="center">Events</h3>
    <form action="{{route('searchevents')}}" method="post">
        @csrf
    <table width="80%" align="center">
        <tr>
            <td>Event Title: <input id="title" type="text" class="form-control" name="title"></td>
            <td>Artist: <input id="artist" type="text" class="form-control" name="artist"></td>
            <td>Genre: <select id="genre" class="form-control" name="genre">
                <option value="">Select</option>
                @foreach ($genredata as $i=>$item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select> </td>
        </tr>
        <tr>
            <td>Date: <input id="event_date" type="date" class="form-control" name="event_date"></td>
            <td>Venue: <select id="venue" class="form-control" name="venue">
                <option value="">Select</option>
                @foreach ($venuedata as $i=>$item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>   </td>
            <td align="center"><br><input type="submit" class="btn btn-success" id="btn_search"></td>
        </tr>
    </table>
    </form>        
    <br>

    <table border="1" width="100%" align="center">
        <tr>
            <th>#</th>
            <th>Title</th>
           
            <th>Image</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Event Date</th>
            
        </tr>
        
        @foreach ($eventdata as $i=>$item)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$item->title}}</td>
            
            <td><img src="{{ URL::to('/public/photo/'.$item->photo) }}" height="50" width="50"></td>
            <td>{{$item->desc}}</td>
            <td>{{$item->amount}}</td>
            <td>{{$item->event_date}}</td>
            
        </tr>    
        @endforeach
    </table>

    
    {!! $eventdata->links() !!}
   
</body>
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 04:40:12 GMT -->

</html>