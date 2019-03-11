@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Update</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="px-3">

                            {!! Form::open(['route' => ['admin.testimonial.update',$data->id], 'method' => 'PUT','class'=>'form form-horizontal','files'=>true]) !!}
                            <div class="form-body">
                                <h4 class="form-section">
                                    <i class="fa fa-book" aria-hidden="true"></i>Update Testimonial</h4>


                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="centerPersonImage">
                                            <div class="centerImg" style="width: 80%;margin:0 auto">
                                                    <img src="/uploads/testimonial/{{$data->image}}" alt="Image" height="200" width="250">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    {{ Form::label('image', 'Image',['class' => 'col-md-3 label-control']) }}
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
                                    {{ Form::label('description', 'Description',['class' => 'col-md-3 label-control']) }}
                                    <div class="col-md-9">

                                        {{ Form::textarea('description',$data->description, array('class' => 'form-control','required'=>'','placeholder'=>'description')) }}

                                        @if (count($errors) > 0)
                                            <span style="color:red">
                                                       {!! $errors->first('name') !!}
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