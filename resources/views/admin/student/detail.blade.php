@extends('layouts.admin.app')
@section('admin_content')

    <div class="my-3 bg-light">
        <h2 class="text-center">{{$detail->f_name .' '. $detail->l_name}} Details Information</h2>
    </div>

    <section>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-lg-3">
               <div class="text-center">
                <img  class="" src="{{asset('images/avater.jpg')}}" alt=""> <br>
               </div>
                <div class="text-center">
                     {{$detail->f_name .' '. $detail->l_name}} <br>
                     <span>Class : {{$detail->class}}</span> <br>
                     <span>Section : {{$detail->section}}</span> <br>
                     <span>ID : {{$detail->student_id}}</span> <br>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 col-lg-9">
                <div class="my-3">
                    <h3 class="bg-light">Phone Section</h3>
                    <span>Parent Phone: {{$detail->parent_phone}}</span> <br>
                    <span>Student Phone: {{$detail->student_phone}}</span>
                </div>


                <div class="my-2">
                    <h3 class="bg-light">Login Info</h3>
                    <span>Email : {{$detail->email}}</span> <br>
                    <span>Password: {{$detail->password}}</span>
                </div>

                <div class="my-2">
                    <h3 class="bg-light">House Location</h3>
                    <span>Locations : {{$detail->location}}</span> <br>
                </div>

                <div class="">
                    <a style="float: right" href="{{ url('admin/student/list') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>


    </section>


@endsection
