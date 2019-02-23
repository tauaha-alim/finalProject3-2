@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Add Course</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="px-3">

                                {!! Form::open(['route' => 'admin.course.store', 'method' => 'POST','class'=>'form form-horizontal']) !!}
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="fa fa-book" aria-hidden="true"></i>Add Course</h4>
                                    <div class="form-group row">

                                        {{ Form::label('course_name', 'Course Name',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::text('course_name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Course Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('course_name') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        {{ Form::label('total_class', 'Total Class',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::number('total_class',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'Total Class')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('total_class') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        {{ Form::label('class_hour', 'Course Hours',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::text('class_hour',null, array('class' => 'form-control','required'=>'','placeholder'=>'Course Hours')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('class_hour') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        {{ Form::label('price', 'Price',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::number('price',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'Price')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('price') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                </div>

                                <div class="form-actions">
                                    <a type="button" class="btn btn-danger mr-1" href="{{route('admin.course.index')}}">
                                        <i class="icon-trash"></i> Cancel
                                    </a>



                                    {{ Form::button('<i class="icon-note"></i> Save', ['type' => 'submit', 'class' => 'btn btn-success'] )  }}



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




@endpush