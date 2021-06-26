@extends('layouts.admin.app')
@section('admin_content')

<div class="my-3 bg-light">
    <h2 class="text-center">Students Search Result</h2>
</div>

<table class="text-center table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">INDEX</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">PHONE</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($search as $item)
        <tr>
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{ $item->f_name .' '. $item->l_name }}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->student_phone}}</td>
            <td>
                <a href="{{ url('admin/student/detail', $item->id) }}" class="text-light btn btn-sm btn-success">VIEW</a>
                <a href="{{ url('admin/student/edit', $item->id) }}" class="text-light btn btn-sm btn-primary">EDIT</a>
                <a href="{{ url('admin/student/delete', $item->id) }}" class="btn btn-sm btn-danger">DELETE</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
