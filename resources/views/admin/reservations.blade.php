@extends('layouts.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Reservations</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Guest Name
                            </th>
                            <th>
                                Phone Number
                            </th>
                            <th>
                                Room Type
                            </th>
                            <th>
                                Number of Rooms
                            </th>
                            <th>
                                Credit Card
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            @foreach($reserves as $reserve)
                                <tr>
                                    <td>{{$reserve->guestname}}</td>
                                    <td>{{$reserve->phonenumber}}</td>
                                    <td>{{$reserve->roomid}}</td>
                                    <td>{{$reserve->rooms}}</td>
                                    <td>{{$reserve->creditnumber}}</td>                                    
                                    <td>
                                        Edit
                                    </td>
                                    <td>Delete</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
