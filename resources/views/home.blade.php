@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        </div>
    </div>

    <center>
    @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="/images/{{ Session::get('path') }}" width="500px" height="400">
        @endif

        <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST" >
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <input type="file" name="image" />
                </div>
                <br><br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-default">Upload Photo of Yours!</button>
                </div>
            </div>
        </form>
    <div class="panel-body">
    
        <h2>{{ Auth::user()->name }}<h2>
        <h5>{{ Auth::user()->email }}<h5>

    </div>
<a href="/edit/{id} "><button>Edit Your Info</button></a>
</div></center>
@endsection