
    @extends('layouts.backend.app')


    @push('css')



    @endpush

    @section('content')

    <section class="grid-with-label" id="grid-with-label">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-primary">
                            <h4 class="card-title mb-0">Edit Student</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            {!! Form::model($student,['route' => ['admin.student.update',$student->id], 'method' => 'PUT', 'files' => true]) !!}
                            <div class="form-body">
                                <div class="form-group row">

                                    {{ Form::label('image', ' Image') }}
                                    <div class="col-md-9">
                                        <label id="projectinput8" class="file center-block">
                                            {{ Form::file('image') }}
                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('image') !!}


                                                </span>
                                            @endif

                                            <span class="file-custom"></span>
                                            : </label>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('student_name', 'Student Name') }}


                                            {{ Form::text('student_name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Student Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('student_name') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email') }}


                                            {{ Form::email('email',null, array('class' => 'form-control','required'=>'','placeholder'=>'Email')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('email') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('father_name', 'Father Name') }}


                                            {{ Form::text('father_name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Father Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('father_name') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('mother_name', 'Mother Name') }}


                                            {{ Form::text('mother_name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Mother Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('mother_name') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('present_address', 'Present Address') }}


                                            {{ Form::text('present_address',null, array('class' => 'form-control','required'=>'','placeholder'=>'Present Address')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('present_address') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('permanent_address', 'Permanent Address') }}


                                            {{ Form::text('permanent_address',null, array('class' => 'form-control','required'=>'','placeholder'=>'Permanent Address')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('permanent_address') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group ">
                                            {{ Form::label('gender', 'Gender') }}

                                            {{ Form::select('gender',['Female'=>'Female','Male'=>'Male'], null, array('class' => 'form-control ','required'=>'','placeholder'=>'Select Gender')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                   {!! $errors->first('gender') !!}

                                                 </span>
                                            @endif


                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('blood_group', 'Blood Group (optional)') }}


                                            {{ Form::text('blood_group',null, array('class' => 'form-control','placeholder'=>'Blood Group (optional)')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('blood_group') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('religion', 'Religion') }}


                                            {{ Form::text('religion',null, array('class' => 'form-control','required'=>'','placeholder'=>'Religion')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('religion') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('institute', 'Institute') }}


                                            {{ Form::text('institute',null, array('class' => 'form-control','required'=>'','placeholder'=>'Institute')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('institute') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('date_of_birth', 'Date Of Birth') }}


                                            {{ Form::date('date_of_birth',null, array('class' => 'form-control','required'=>'')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('date_of_birth') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('nationality', 'Nationality') }}


                                            {{ Form::text('nationality',null, array('class' => 'form-control','required'=>'','placeholder'=>'Nationality')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('nationality') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('national_id', 'National Id') }}


                                            {{ Form::number('national_id',null, array('class' => 'form-control','required'=>'','placeholder'=>'National Id')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('national_id') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('mobile', 'Mobile Number') }}


                                            {{ Form::number('mobile',null, array('class' => 'form-control','required'=>'','placeholder'=>'Mobile Number')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('mobile') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('guardians_phone', 'Guardians Phone') }}


                                            {{ Form::number('guardians_phone',null, array('class' => 'form-control','required'=>'','placeholder'=>'Guardians Phone')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('guardians_phone') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                           @php
                                               $payment = $student->course->price - $student->amount;

                                           @endphp

                                            {{ Form::label('amount', 'Due') }} (Payment  {{$student->amount}} TK)


                                            {{ Form::number('amount',$payment, array('class' => 'form-control','required'=>'','placeholder'=>'Payment')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('amount') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group ">
                                            <label for="issueinput5">Course Name</label>
                                            <select id="course" name="course" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                    data-title="Priority" required="">
                                                <option value="">Select Course</option>
                                                @foreach($courses as $key => $course)
                                                    <option  value="{{  $key }}">{{ $course}}</option>
                                                @endforeach


                                            </select>
                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                   {!! $errors->first('course') !!}

                                                 </span>
                                            @endif

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="form-group">
                                            <label for="issueinput5">Batch Name</label>
                                            <select id="batch" name="batch" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                    data-title="Priority">

                                            </select>
                                        </div>
                                        @if (count($errors) > 0)
                                            <span style="color:red">
                                                   {!! $errors->first('batch') !!}

                                                 </span>
                                        @endif

                                    </div>

                                </div>
                            </div>

                            <div class="form-actions">

                                <div class="text-right">


                                    {{ Form::button('<i class="ft-thumbs-up position-right"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary mr-1'] )  }}
                                    {{ Form::button('<i class="ft-refresh-cw position-right"></i> Reset', ['type' => 'reset', 'class' => 'btn btn-warning'] )  }}


                                </div>

                            </div>





                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





@push('js')
    <script src="http://www.codermen.com/js/jquery.js"></script>
    <script type="text/javascript">
        $('#course').change(function(){
            var courseID = $(this).val();
            if(courseID){
                $.ajax({
                    type:"GET",
                    url:"{{url('admin/get-state-list')}}?course_id="+courseID,
                    success:function(res){
                        if(res){
                            $("#batch").empty();
                            $("#batch").append('<option>Select Batch</option>');
                            $.each(res,function(key,value){
                                $("#batch").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#batch").empty();
                        }
                    }
                });
            }else{
                $("#batch").empty();

            }
        });
    </script>
@endpush








