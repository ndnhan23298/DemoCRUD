@extends('welcome')

@section('content')

<div style="width: 700px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add new comic</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('comics.index')}}">Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
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
</div>

@endsection
