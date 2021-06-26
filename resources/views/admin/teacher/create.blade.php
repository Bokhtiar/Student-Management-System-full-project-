@extends('layouts.admin.app')
@section('admin_content')

<div class="my-3 bg-light">
    <h2>Create New Teachers</h2>
</div>

<div class="row justify-content-center my-5">
    <div class="col-md-11">
        <form action="{{ isset($edit) ? url('admin/teacher/update', $edit->id) : url('admin/teacher/store') }}" method="POST" class="form-group">
            @csrf
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Teacher First Name <span class="text-danger">*</span> </label>
                    <input placeholder="Enter Student First Name" class="form-control" type="text" name="f_name" value="{{ @$edit->f_name }}" id="">
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Teacher Last Name <span class="text-danger">*</span> </label>
                    <input placeholder="Enter Student Last Name" class="form-control" type="text" name="l_name" value="{{ @$edit->l_name }}" id="">
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Teacher Email <span class="text-danger">*</span> </label>
                    <input placeholder="Enter Student Email" class="form-control" type="email" name="email" value="{{ @$edit->email }}" id="">
                </div>
            </div><!--first name, last name, email end here-->

            <div class="row my-4">

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="">Enter Teacher Designation <span class="text-danger">*</span> </label>
                    <input placeholder="Enter Student First Name" class="form-control" type="text" name="designation" value="{{ @$edit->designation }}" id="">
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="">Enter Teacher Phone <span class="text-danger">*</span> </label>
                    <input placeholder="Enter Student First Name" class="form-control" type="number" name="phone" value="{{ @$edit->phone }}" id="">
                </div>

            </div>

            <div class="form-gorup my-3">
                <label for="">Enter Student Location <span class="text-danger">*</span></label>
                <textarea placeholder="Enter Student Location" name="location" class="form-control" id="" cols="10" rows="4">{{ @$edit->location }}</textarea>
            </div>

            <div class="form-group float-right text-center my-3">
                <input type="submit" class="btn btn-primary" value="Create New Student" name="" id="">
            </div>
        </form>
    </div>
</div>



@endsection
