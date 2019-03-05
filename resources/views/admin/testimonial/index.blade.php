@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.investment.create')}}" class="btn btn-primary">Add Investor</a>
                        <br>
                        <br>
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">All Investor</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-responsive-md text-center">
                                <thead>
                                <tr>

                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($testimonial as $value)
                                        <tr>
                                            <td><img src="/uploads/testimonial/{{$value->image}}" alt="Image" style="height: 50px;width: 100px"></td>

                                    <td>{{$value->description}}</td>

                                    <td>
                                        <a class="success p-0" href="{{route('admin.testimonial.edit',$value->id)}}" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$value->id}}" data-name="{{$value->name}}" data-pic=""data-url="/admin/deleteTestimonial"
                                                class="danger p-0 deletetestimonial" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></a>



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