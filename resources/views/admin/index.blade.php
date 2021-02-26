@extends('layouts.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Rooms</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Thumbnail
                            </th>
                            <th>
                                Type
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Amount
                            </th>
                            <th>
                                Desc1
                            </th>
                            <th>
                                Desc2
                            </th>
                            <th>
                                Desc3
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>
                                        <img src="{{asset($room->image)}}" alt="image" width="90px" height="50px">
                                    </td>
                                    <td>{{$room->type}}</td>
                                    <td>{{$room->price}}</td>
                                    <td>{{$room->amount}}</td>
                                    <td>{{$room->desc1}}</td>
                                    <td>{{$room->desc2}}</td>
                                    <td>{{$room->desc3}}</td>
                                    <td>
                                        <a href="{{route('edit', ['id' => $room->id])}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>Delete</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
