@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>Create A Theme!</h1>
                            <form action="/themelist/add" method="get">

                                <label for="themename">Name:</label>

                                <input type="text" id="themename" name="themename" class="form-control" value=""><br/>

                                <label for="themeurl">URL:</label>

                                <input type="text" id="themeurl" name="themeurl" class="form-control" value=""><br/>

                                <label for="themeurl">IMAGE URL:</label>

                                <input type="text" id="imgurl" name="themeurl" class="form-control" value=""><br/>

                                <button class="btn btn-success" type="submit">Add!</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
