@extends('layouts.admin.app')
@section('admin_content')

    <section class="my-3">

        <div class="bg-light mb-4">
            <h2 class="text-center">Search Students</h2>
        </div>

        <form action="{{ url('admin/student/search') }}" method="POST" class="form-inline">
            @csrf
            <div class="row" style="margin-left: 189px" >
                <div class="col-md-4">
                    <label for="">Select Class <span class="text-danger">*</span> </label>
                    <select required name="class" id="" class="form-control">
                        <option value="" >Select Class</option>
                        <option value="one">One</option>
                        <option value="two">Tow</option>
                        <option value="three">Three</option>
                        <option value="four">Four</option>
                        <option value="five">Five</option>
                        <option value="six">Six</option>
                        <option value="seven">Seven</option>
                        <option value="eight">Eight</option>
                        <option value="nine">Nine</option>
                        <option value="ten">Ten</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="">Enter Student ID <span class="text-danger">*</span> </label>
                    <input placeholder="Enter Student Roll" class="form-control" type="number" name="student_id" value="{{@$edit->student_id}}" id="">
                </div>

                <div class="col-md-4">
                    <input type="submit" value="Search" class="btn btn-primary my-4" name="" id="">
                </div>
            </div>
        </form>
    </section>

@endsection
