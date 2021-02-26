@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-items text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            Add a Room
        </div>
        <div class="panel-body">
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="roomtype">Room Type</label>
                            <input type="text" name="roomtype" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="number">Number of Rooms</label>
                            <input type="text" name="amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="desc1">Description 1</label>
                            <input type="text" name="desc1" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="desc2">Description 2</label>
                            <input type="text" name="desc2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="desc3">Description 3</label>
                            <input type="text" name="desc3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    
                </div>             
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
