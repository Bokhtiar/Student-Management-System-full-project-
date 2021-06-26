<!--sidebar start here-->
<div style="height: 700px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" class="bg-light col-md-2">
    <div class="my-2 text-center">
        <a style="width:182px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;"
            class="btn " href="{{route('admin.dashboard')}}"> Dashboard </a>
    </div>

    <div class="my-2 text-center">
        <a style="width:182px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;"
            class="btn " href=" {{url('admin/student/create')}} "> Student Create</a>
    </div>

    <div class="my-2 text-center">
        <a style="width:182px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;"
            class="btn " href="{{ url('admin/student/list') }}"> Student List </a>
    </div>



    <div class="my-2 text-center">
        <a style="width:182px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;"
            class="btn " href="{{ url('admin/teacher/list') }}">Teacher List</a>
    </div>

    <div class="my-2 text-center">
        <a style="width:182px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;"
            class="btn " href="{{ url('admin/teacher/create') }}"> Teacher Create </a>
    </div>


    <div class="my-2 text-center">
        <a style="width:182px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;"
            class="btn " href="{{ url('admin/logout') }}"> Logout </a>
    </div>
</div>
<!--sidebar end here-->
