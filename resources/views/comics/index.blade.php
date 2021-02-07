@extends('welcome')

@section('content')

<div style="width:700px;">
    <h3>List comic</h3>
    
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('comics.create')}}">Create a new comic</a>
    </div>

    <div style="width: 300px">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
    </div>

    <table class="table table-bordered">
    <tr>
        <th>Comic</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->name}}</td>
            @foreach ($cates as $cate)
            @if($comic->cate_id == $cate->id)
                <td>{{$cate->name}}</td>
            @endif
            @endforeach
            <td>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    <!-- <a class="btn btn-info" href="{{route('comics.show', $comic->id)}}">SHOW</a> -->
                    <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>

            </td>
        </tr>
        
    @endforeach
    </table>
</div>

@endsection

