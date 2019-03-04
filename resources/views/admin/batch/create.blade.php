@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Add Batch</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="px-3">

                                {!! Form::open(['route' => 'admin.batch.store', 'method' => 'POST','class'=>'form form-horizontal']) !!}
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="fa fa-book" aria-hidden="true"></i>Add Batch</h4>

                                    <div class="form-group row">
                                        {{ Form::label('course_id', 'Course Name',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-sm-9">
                                            {{ Form::select('course_id',$course, null, array('class' => 'form-control mb-3','required'=>'','placeholder'=>'Select Class')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                   {!! $errors->first('course_id') !!}

                         </span>
                                            @endif

                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        {{ Form::label('batch_name', 'Batch Name',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::text('batch_name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Batch Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('batch_name') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        {{ Form::label('starting_date', 'Starting Date',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::date('starting_date',null, array('class' => 'form-control','required'=>'')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('starting_date') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        {{ Form::label('ending_date', 'Ending Date',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::date('ending_date',null, array('class' => 'form-control','required'=>'')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('ending_date') !!}


                                                </span>
                                            @endif
                                        </div>
                                    </div>





                                </div>

                                <div class="form-actions">
                                    <a type="button" class="btn btn-danger mr-1" href="{{route('admin.batch.index')}}">
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