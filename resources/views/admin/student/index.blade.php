@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.student.create')}}" class="btn btn-primary">Add Student</a>
                        <br>
                        <br>
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">All Student</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-responsive-md text-center">
                                <thead>
                                <tr>

                                    <th>Student Image</th>
                                    <th>Student Name</th>

                                    <th>Course Name</th>
                                    <th>Batch Name</th>
                                    <th>Payment</th>
                                    <th>due</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($students as $student)
                                    <tr>



                                        <td>
                                            @if($student->image == 'default.png' && $student->gender == 'Male' )
                                                <img src="{{url('backend/img/default.jpg')}}" height="40px" width="40px">

                                            @elseif($student->image == 'default.png' && $student->gender == 'Female')
                                                <img src="{{url('backend/img/download.jpg')}}" height="40px" width="40px">
                                                @else
                                                <img src="{{url('storage/student',$student->image)}}" height="40px" width="40px">
                                            @endif
                                        </td>

                                        <td>{{$student->student_name}}</td>
                                        <td>{{$student->course->course_name}}</td>
                                        <td>{{$student->batch->batch_name}}</td>
                                        <td>{{$student->payment}}</td>
                                        @php
                                            $total_due = $student->course->price - $student->payment
                                        @endphp

                                        <td>{{$total_due}}</td>
                                        <td>
                                            <a class="success p-0" data-original-title="" title="">
                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                            </a>


                                            <a data-id="{{$student->id}}" data-name="{{$student->name}}" data-pic="{{$student->image}}"data-url="/admin/deleteStudent"
                                               class="danger p-0  DeleteContent" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></a>



                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                            <br>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





@push('js')




@endpush