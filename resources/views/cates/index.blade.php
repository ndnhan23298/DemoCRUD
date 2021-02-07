@extends('welcome')

@section('content')

<div class="content">
    <h3>List category</h3>
    
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('cates.create')}}">Create a new cate</a>
    </div>

    <div class="message">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
    </div>

    <table class="table table-bordered">
    <tr>
        <th class="table-header">Category</th>
        <th>Action</th>
    </tr>
    @foreach ($cates as $cate)
        <tr>
            <td>{{$cate->name}}</td>
            <td>
                <form action="{{route('cates.destroy', $cate->id)}}" method="POST">
                    <!-- <a class="btn btn-info" href="{{route('cates.show', $cate->id)}}">SHOW</a> -->
                    <a class="btn btn-primary" href="{{route('cates.edit', $cate->id)}}">EDIT</a>
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

