@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Add Investor</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="px-3">

                                {!! Form::open(['route' => 'admin.investment.store', 'method' => 'POST','class'=>'form form-horizontal','files' => true]) !!}
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="fa fa-book" aria-hidden="true"></i>Add Investor</h4>



                                    <div class="form-group row">
                                        {{ Form::label('image', 'Upload Image',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::file('image',null, array('class' => 'form-control','required'=>'')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('image') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {{ Form::label('name', 'Investor Name',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::text('name',null, array('class' => 'form-control','required'=>'','placeholder'=>'Investor Name')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('name') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {{ Form::label('amount', 'Invest Amount',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::number('amount',null, array('class' => 'form-control','required'=>'','placeholder'=>'Invest Amount')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('amount') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {{ Form::label('birthday', 'Birthday',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">

                                            {{ Form::date('birthday',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'Birthday')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('birthday') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {{ Form::label('phone', 'phone',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('phone',null, array('class' => 'form-control','required'=>'','placeholder'=>'phone')) }}

                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('phone') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {{ Form::label('email', 'email',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('email',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'email')) }}
                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('email') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        {{ Form::label('present_address', 'present_address',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('present_address',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'present_address')) }}
                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('present_address') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {{ Form::label('permanent_address', 'permanent_address',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('permanent_address',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'permanent_address')) }}
                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('permanent_address') !!}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {{ Form::label('date', 'Investment Date',['class' => 'col-md-3 label-control']) }}
                                        <div class="col-md-9">
                                            {{ Form::date('date',null, array('class' => 'form-control','min'=>'0','required'=>'','placeholder'=>'Investment Date')) }}
                                            @if (count($errors) > 0)
                                                <span style="color:red">
                                                       {!! $errors->first('date') !!}
                                                </span>
                                            @endif
                                        </div>
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