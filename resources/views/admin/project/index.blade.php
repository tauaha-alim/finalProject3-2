@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.project.create')}}" class="btn btn-primary">Add Project</a>
                        <br>
                        <br>
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">All Project</h4>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-lg-6">
                            <div class="result_search_box" style="margin: 8px;">
                                {!! Form::open(['route' => 'admin.projectSearch', 'method' => 'GET']) !!}



                                {!! Form::text('q', null, ['class' => 'form-control form-control-success','placeholder' => 'Search Project','required' => '1']) !!}

                                @if (count($errors) > 0)
                                    <span style="color:red">
                           {!! $errors->first('q') !!}
                         </span>
                                @endif




                                <br>

                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="result_search_box" style="margin: 8px;">
                                <a class="btn btn-success" href="{{route('admin.project.index')}}">Refresh</a>
                            </div>

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
                                     @csrf
                                @isset($data)
                                    @foreach($data as $value)

                                        <tr>
                                    <td>{{$value->project_name}}</td>
                                    <td>{{$value->total_price}}</td>
                                    <td>{{$value->start_time}}</td>
                                    <td>{{$value->end_time}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->project_expanse}}</td>
                                    @php
                                    $total_profit = $value->amount - $value->project_expanse
                                    @endphp
                                    <td>{{$total_profit}}</td>
                                    <td>
                                        <a class="success p-0" href="{{route('admin.project.edit',$value->id)}}" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$value->id}}" data-name="{{$value->name}}" data-pic=""data-url="/admin/deleteProject"
                                                class="danger p-0  DeleteContent" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></a>



                                    </td>
                                        </tr>
                                               @endforeach
                                @endisset
                                @isset($details)
                                    <h5>Search result for your query : {{$query}}</h5>
                                    @foreach($details as $value)

                                        <tr>
                                    <td>{{$value->project_name}}</td>
                                    <td>{{$value->total_price}}</td>
                                    <td>{{$value->start_time}}</td>
                                    <td>{{$value->end_time}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->project_expanse}}</td>
                                    @php
                                    $total_profit = $value->amount - $value->project_expanse
                                    @endphp
                                    <td>{{$total_profit}}</td>
                                    <td>
                                        <a class="success p-0" href="{{route('admin.project.edit',$value->id)}}" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$value->id}}" data-name="{{$value->name}}" data-pic=""data-url="/admin/deleteProject"
                                                class="danger p-0  DeleteContent" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></a>



                                    </td>
                                        </tr>

                                        @endforeach
                                @endisset


                                </tbody>
                            </table>
                               <br>
                            @if(isset($data)){!! $data->render() !!}@endif
                            @if(isset($details)){!! $details->render() !!}
                            @elseif(isset($message))
                                <p>{{ $message }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





@push('js')




@endpush