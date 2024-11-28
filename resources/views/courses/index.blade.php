@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Courses Application</h2>
        </div>
            <div class="card-body">
                <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Course">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br/><br/>
                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                    <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Syllabus</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td class="text-wrap" style="max-width: 200px;">{{ $item->syllabus }}</td>
                                <td>{{ $item->duration }}</td>
                                
                                <td class="d-flex flex-column flex-md-row">
                                    <a href="{{ url('/courses/' . $item->id) }}" title="View Course">
                                        <button class="btn btn-info btn-sm me-2 mb-1 mb-md-0">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                        </button>
                                    </a>
                                    <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Course">
                                        <button class="btn btn-primary btn-sm me-2 mb-1 mb-md-0">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                        </button>
                                    </a>

                                    <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm mb-1" title="Delete Course" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection