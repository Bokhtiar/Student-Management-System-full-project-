@extends('layouts.admin.app')
@section('admin_content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="my-3 bg-light">
    <h2>Create New Students</h2>
</div>

<div class="row justify-content-center my-5">
    <div class="col-md-11">
        <form action="{{ isset($edit) ? url('admin/student/update', $edit->id) : url('admin/student/store') }}" method="POST" class="form-group">
            @csrf
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Student First Name <span class="text-danger">*</span> </label>
                    <input required placeholder="Enter Student First Name" class="form-control" type="text" name="f_name" value="{{@$edit->f_name}}" id="">
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Student Last Name <span class="text-danger">*</span> </label>
                    <input required placeholder="Enter Student Last Name" class="form-control" type="text" name="l_name" value="{{@$edit->l_name}}" id="">
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Student Email <span class="text-danger">*</span> </label>
                    <input required placeholder="Enter Student Email" class="form-control" type="text" name="email" value="{{@$edit->email}}" id="">
                </div>
            </div><!--first name, last name, email end here-->
            <div class="row my-4">
                <div class="col-md-6 col-sm12 col-lg-6">
                    <label for="">Select Class <span class="text-danger">*</span> </label>
                    <select required name="class" id="" class="form-control">
                        <option value="" >Select Class</option>

                        <option value="one" {{ ( @$edit->class == 'one') ? 'selected' : '' }}> One </option>
                        <option value="two" {{ ( @$edit->class == 'two') ? 'selected' : '' }}> Tow </option>

                        <option value="three" {{ ( @$edit->class == 'three') ? 'selected' : '' }}> Three </option>
                        <option value="four" {{ ( @$edit->class == 'four') ? 'selected' : '' }}> Four </option>
                        <option value="five" {{ ( @$edit->class == 'five') ? 'selected' : '' }}> Five </option>
                        <option value="six" {{ ( @$edit->class == 'six') ? 'selected' : '' }}> Six </option>
                        <option value="seven" {{ ( @$edit->class == 'seven') ? 'selected' : '' }}> Seven </option>
                        <option value="eight" {{ ( @$edit->class == 'eight') ? 'selected' : '' }}> Eight </option>
                        <option value="nine" {{ ( @$edit->class == 'nine') ? 'selected' : '' }}> Nine </option>
                        <option value="ten" {{ ( @$edit->class == 'ten') ? 'selected' : '' }}> Ten </option>
                    </select>
                </div>

                <div class="col-md-6 col-sm12 col-lg-6">
                    <label for="">Select Sections <span class="text-danger">*</span> </label>
                    <select required name="section" id="" class="form-control">
                        <option value="" >Select Sections</option>
                        <option value="Section A" {{ ( @$edit->section == 'Section A') ? 'selected' : 'Section A' }}> Section A </option>
                        <option value="Section B" {{ ( @$edit->section == 'Section B') ? 'selected' : '' }}> Section B </option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Student ID <span class="text-danger">*</span> </label>
                    <input required placeholder="Enter Student Roll" class="form-control" type="number" name="student_id" value="{{@$edit->student_id}}" id="">
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Student Parent Phone <span class="text-danger">*</span> </label>
                    <input required placeholder="Enter Student Parent Phone" class="form-control" type="number" name="parent_phone" value="{{@$edit->parent_phone}}" id="">
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <label for="">Enter Student Phone <span class="text-danger">*</span> </label>
                    <input required placeholder="Enter Student Phone" class="form-control" type="number" name="student_phone" value="{{@$edit->student_phone}}" id="">
                </div>
            </div><!--roll and phone-->


            <div class="form-group my-3">
                <label for="">Enter Student Password <span class="text-danger">*</span></label>
                <input required placeholder="Enter Student Password" type="password" class="form-control" name="password" value="{{@$edit->password}}" id="">
            </div>

            <div class="form-gorup my-3">
                <label for="">Enter Student Location <span class="text-danger">*</span></label>
                <textarea required placeholder="Enter Student Location" name="location" class="form-control" id="" cols="10" rows="4">{{@$edit->location}}</textarea>
            </div>

            <div class="form-group float-right text-center my-3">
                <input type="submit" class="btn btn-primary" value="Create New Student" name="" id="">
            </div>
        </form>
    </div>
</div>

@endsection
