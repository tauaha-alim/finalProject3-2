@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.batch.create')}}" class="btn btn-primary">Add Batch</a>
                        <br>
                        <br>
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">All Batch</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-responsive-md text-center">
                                <thead>
                                <tr>

                                    <th>Course Name</th>
                                    <th>Batch Name</th>
                                    <th>Total Student</th>
                                    <th>Starting Date</th>
                                    <th>Ending Date</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($batches as $batch)
                                        <tr>

                                    <td>{{$batch->course->course_name}}</td>
                                    <td>{{$batch->batch_name}}</td>
                                    <td>{{$batch->students->count()}}</td>
                                    <td>{{$batch->starting_date}}</td>
                                    <td>{{$batch->ending_date}}</td>

                                    <td>
                                        <a class="success p-0" data-original-title="" title="">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>


                                        <a data-id="{{$batch->id}}" data-name="{{$batch->name}}" data-pic=""data-url="/admin/deleteBatch"
                                                class="danger p-0  DeleteContent" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></a>



                                    </td>
                                        </tr>
                                        @endforeach


                                </tbody>
                            </table>
                            <br>
                            {{ $batches->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





@push('js')




@endpush