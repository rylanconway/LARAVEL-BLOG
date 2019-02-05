@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                        @foreach($users as $key => $data)
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">{{ $data->name }}</th>
                            </tr>
                            <tr>
                                {{--<img style="width: 420px; height: 300px;" src="{{ $data->imgurl }}" alt="{{ $data->name }}">--}}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>

                                    <form action="/userlist/delete" method="get">

                                        <label for="url">{{$data->name}}</label> |
                                        <label for="url">{{$data->email}}</label><br/>


                                        <input type="hidden" id="userid" name="userid" value="{{Auth::user()->id}}"/>

                                        <input type="hidden" id="id" name="id" value="{{ $data->id }}"/>

                                        <button class="btn btn-danger" type="submit">delete</button>

                                    </form>

                                    <form action="/userlist/update" method="get">

                                        <input type="hidden" id="userid" name="userid" value="{{Auth::user()->id}}"/>

                                        <input type="hidden" id="id" name="id" value="{{ $data->id }}">

                                        <button class="btn btn-warning" type="submit">edit</button>
                                        <hr/>

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
