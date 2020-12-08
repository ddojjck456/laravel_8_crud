@extends('layouts.app')
@section('title','新增')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>新增專案</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>姓名:</strong>
                    <input type="text" name="name" class="form-control" placeholder="姓名">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>簡介:</strong>
                    <textarea class="form-control" style="height:50px" name="Introduction"
                        placeholder="簡介"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>位置:</strong>
                    <input type="text" name="location" class="form-control" placeholder="位置">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>價格:</strong>
                    <input type="number" name="cost" class="form-control" placeholder="價格">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </div>

    </form>
@endsection
