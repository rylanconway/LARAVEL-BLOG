@extends('layouts.app')

@section('content')
    <div class="container">
       <h1>This is the Theme Management page!</h1>
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
                                    <td>

                                        <form action="/themelist/delete" method="get">

                                            <label for="url">{{$data->url}}</label><br/>

                                            <input type="hidden" id="userid" name="userid" value="{{Auth::user()->id}}"/>

                                            <input type="hidden" id="url" name="url" value="{{$data->url}}"/>

                                            <input type="hidden" id="id" name="id" value="{{ $data->id }}"/>

                                            <button class="btn btn-danger" type="submit">delete</button>

                                        </form>

                                        <form action="/themelist/update" method="get">

                                            <label for="url" >{{$data->url}}</label><br/>

                                            <input type="hidden" id="userid" name="userid" value="{{Auth::user()->id}}"/>

                                            <input type="hidden" id="url" name="url" value="{{$data->url}}"/>

                                            <input type="hidden" id="id" name="id" value="{{ $data->id }}">

                                            <button class="btn btn-warning" type="submit">edit</button>

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
