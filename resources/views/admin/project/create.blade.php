@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Add Project</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="px-3">

                                {!! Form::open(['route' => 'admin.project.store', 'method' => 'POST','class'=>'form form-horizontal']) !!}
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="fa fa-book" aria-hidden="true"></i>Add Project</h4>


                                    <div class="form-group row">
                                        {{ Form::label('project_name', 'project_name',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::text('project_name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Project Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('name') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {{ Form::label('start_time', 'start_time',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::date('start_time',null, array('class' => 'form-control','required'=>'','placeholder'=>'start_time')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('amount') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {{ Form::label('end_time', 'end_time(Optional)',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::date('end_time',null, array('class' => 'form-control','placeholder'=>'end_time')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('amount') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {{ Form::label('total_price', 'total_price',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::number('total_price',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'total_price')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('total_price') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        {{ Form::label('project_expanse', 'project_expanse',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::number('project_expanse',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'project_expanse')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('project_expanse') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {{ Form::label('project_income', 'project_income',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">
                                            {{ Form::number('project_income',null, array('class' => 'form-control','required'=>'','placeholder'=>'project_income')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('project_income') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                             

                                <div class="form-actions">
                                    <a type="button" class="btn btn-danger mr-1" href="{{route('admin.dashboard')}}">
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