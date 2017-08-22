@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Photos list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Photo</th>
                                <th>Post / Product</th>
                            </tr>
                            @foreach ($photos as $photo)
                                <tr>
                                    <td>{{ $photo->filename }}</td>
                                    <td>
                                        {{ ($photo->imageable->name)
                                            ? 'Product: ' . $photo->imageable->name
                                            : 'Post: ' . $photo->imageable->title }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
