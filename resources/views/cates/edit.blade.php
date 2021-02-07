@extends('welcome')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit cate</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('cates.index')}}">Back</a>
            </div>
        </div>
    </div>
    
    <form action="{{route('cates.update', $cate->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$cate->name}}">
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
