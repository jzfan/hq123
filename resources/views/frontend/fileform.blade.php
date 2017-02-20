@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                <form method="POST" action='/api/file' enctype="multipart/form-data">
                  <div class="form-group">
                    <label>phone</label>
                    <input type="text" class="form-control" name='phone'>
                  </div>
                  <div class="form-group">
                    <label>File input</label>
                    <input type="file" name='file'>
                  </div>
                  <button type="submit" class="btn btn-primary">提交</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
