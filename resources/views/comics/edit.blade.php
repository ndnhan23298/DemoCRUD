@extends('welcome')

@section('content')

<div style="width: 700px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit comic</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('comics.index')}}">Back</a>
            </div>
        </div>
    </div>
    
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$comic->name}}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="cate_id" id="cate_id" class="form-control">
                @foreach ($cates as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


@endsection
