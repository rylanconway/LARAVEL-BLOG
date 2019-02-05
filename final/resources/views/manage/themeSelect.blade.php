@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>This is the List of themes</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">


                        @foreach($themes as $key => $data)
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{ $data->name }}</th>
                                </tr>
                                <tr>

                                    <img style="width: 420px; height: 300px;" src="{{ $data->imgurl }}" alt="{{ $data->name }}">

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    {{--ON SELECT OF THEME MAKE SELECTED THEME USERS CURRENT THEME--}}
                                    {{--THIS WILL MAKE THE PAGE UPDATE--}}
                                    <td>
                                        <form action="/themeset/update" method="get">

                                            <label for="themename">{{$data->url}}>{{ $data->name }}</label>

                                            <input type="hidden" id="url" name="url" value="{{$data->url}}"/><br/>

                                            <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}"><br/>

                                            <button class="btn btn-success" type="submit">Select</button>

                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        @endforeach

                    </div>
                </div>
            </div>
    </div>
@endsection
