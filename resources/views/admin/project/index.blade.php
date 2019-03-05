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

                                    <th>Project Name</th>
                                    <th>Total Price</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Project Income</th>
                                    <th>Project Expense</th>
                                    <th>Project Profit</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($project as $value)
                                        <tr>
                                    <td>{{$value->project_name}}</td>
                                    <td>{{$value->total_price}}</td>
                                    <td>{{$value->start_time}}</td>
                                    <td>{{$value->end_time}}</td>
                                    <td>{{$value->project_income}}</td>
                                    <td>{{$value->project_expanse}}</td>
                                    <td>{{$value->project_profit}}</td>
                                    <td>
                                        <a class="success p-0" href="{{route('admin.project.edit',$value->id)}}" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$value->id}}" data-name="{{$value->name}}" data-pic=""data-url="/admin/deleteProject"
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