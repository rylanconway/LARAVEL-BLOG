@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                       <h1>Edit The Chosen Theme Below</h1>
                        @foreach( $selectedtheme as $newtheme )
                            <form action="/themelist/save" method="get">

                            <input type="hidden" id="id" name="id" value="{{ $newtheme->id }}">

                            <label for="themename">Name:</label>

                            <input type="text" id="themename" name="themename" class="form-control" value="{{ $newtheme->name }}"><br/>

                            <label for="themeurl">URL:</label>

                            <input type="text" id="themeurl" name="themeurl" class="form-control" value="{{ $newtheme->url }}"><br/>

                            <button class="btn btn-success" type="submit">Update!</button>
                            </form>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
