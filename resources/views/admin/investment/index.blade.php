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
                                    <th>Name</th>
                                    <th>Invest Amount</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Present Address</th>
                                    <th>permanent Address</th>
                                    <th>Invest Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($investment as $value)
                                        <tr>

                                            @if($value->image == 'default.png')
                                                <td><img src="/uploads/{{$value->image}}" alt="Image" style="height: 50px;width: 50px"></td>
                                            @else
                                                <td><img src="/uploads/Investor/{{$value->image}}" alt="Image" style="height: 50px;width: 50px"></td>
                                            @endif

                                    <td>{{$value->name}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->present_address}}</td>
                                    <td>{{$value->permanent_address}}</td>
                                    <td>{{$value->date}}</td>
                                    <td>
                                        <a class="success p-0" href="{{route('admin.investment.edit',$value->id)}}" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$value->id}}" data-name="{{$value->name}}" data-pic=""data-url="/admin/deleteInvestment"
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