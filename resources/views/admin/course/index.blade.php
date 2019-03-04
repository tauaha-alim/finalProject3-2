@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.course.create')}}" class="btn btn-primary">Add Course</a>
                        <br>
                        <br>
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">All Course</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-responsive-md text-center">
                                <thead>
                                <tr>

                                    <th>Course Name</th>
                                    <th>Total Class</th>
                                    <th>Total Hours</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($courses as $course)

                                    <td>{{$course->course_name}}</td>
                                    <td>{{$course->total_class}}</td>
                                    <td>{{$course->class_hour}}</td>
                                    <td>{{$course->price}}</td>
                                    <td>
                                        <a class="success p-0" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$course->id}}" data-name="{{$course->name}}" data-pic=""data-url="/admin/deletecourse"
                                                class="danger p-0  DeleteContent" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></a>



                                    </td>
                                </tr>
                                        @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





@push('js')




@endpush