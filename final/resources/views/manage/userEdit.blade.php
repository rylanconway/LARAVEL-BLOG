@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>Edit The Chosen User Below</h1>
                        @foreach( $selecteduser as $newuser )
                            <form action="/userlist/save" method="get">

                                <input type="hidden" id="id" name="id" value="{{ $newuser->id }}">

                                <label for="themename">Name:</label>

                                <input type="text" id="username" name="username" class="form-control" value="{{ $newuser->name }}" required><br/>

                                <label for="themeurl">Email:</label>

                                <input type="text" id="useremail" name="useremail" class="form-control" value="{{ $newuser->email }}" required><br/>

                                <label for="themeurl">Role:</label>

                                <input type="text" id="userrole" name="userrole" class="form-control" value="{{ $newuser->role }}"><br/>

                                <label for="themeurl">Password:</label>

                                <input type="text" id="userpassword" name="userpassword" class="form-control" value="{{ $newuser->password }}" required><br/>

                                <button class="btn btn-success" type="submit">Update!</button>

                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
