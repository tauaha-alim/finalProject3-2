@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

 
       <div align="right"  >
        <p style="margin-left: 760px;margin-top: 12px ; font-size: 20px ;margin-top:10px"> Select Year</p>
    <select id="mySelect"style="
  display: inline-block;
  height: 30px;
  width: 100px;
  outline: none;
  color: #74646e;
  border: 1px solid #C8BFC4;
  border-radius: 4px;
  box-shadow: inset 1px 1px 2px #ddd8dc;
  background: #fff;
" onchange="myFunction(this.value)" >
      @php
      $year1=date('Y');
      @endphp
    @for($i=$year1;$i>$year1-10; $i--)
     <option style="font-size: 20px;" value="{{$i}}" @if($i==$year) {{"selected"}} @endif >{{$i}}</option>
    @endfor

</select>
 </div>
 <br>
 <br>
<script>
function myFunction(val) {
            if(val){
               window.location.href = '/admin/chart/'+val;
            }else{
                location.reload();

            }
}
</script>


      <div class="container-fluid">
       


 <script>

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
    text: "Monthly Income Profit Loss Expenses,{{$year}}"
  },
  axisY :{
    includeZero: false,
    prefix: ""
  },
  toolTip: {
    shared: true
  },
  legend: {
    fontSize: 13
  },
  data: [
  

  {
    type: "splineArea", 
    showInLegend: true,
    name: "Income",
    yValueFormatString: "#,##0 TK",     
    dataPoints: [

    @foreach($TransectionTrackIncome as $key)
  
    { x: new Date({{$key['year']}}, {{$key['month']-1}}), y: {{$key['amount']}}},
    @endforeach 
     
    ]
  },

  {
    type: "splineArea", 
    showInLegend: true,
    yValueFormatString: "#,##0 TK",      
    name: "Expenses",
    dataPoints: [
    @foreach($TransectionTrackExpance as $key)
  
    { x: new Date({{$key['year']}}, {{$key['month']-1}}), y: {{$key['amount']}}},
    @endforeach 
     
    ]
  },
  {
    type: "splineArea", 
    showInLegend: true,
    yValueFormatString: "#,##0 TK",      
    name: "Profit",
    dataPoints: [
    @foreach($TransectionTrackProfit as $key)
  
    { x: new Date({{$key['year']}}, {{$key['month']-1}}), y: {{$key['amount']}}},
    @endforeach 
     
    ]
  },
  {
    type: "splineArea", 
    yValueFormatString: "#,##0 TK",      
    name: "Loss",
    showInLegend: true,
    dataPoints: [
    @foreach($TransectionTrackLoss as $key)
  
    { x: new Date({{$key['year']}}, {{$key['month']-1}}), y: {{$key['amount']}}},
    @endforeach 
     
    ]
  },
  ]
});
chart.render();

}
</script>
<div id="chartContainer" class="container-fluid" style="height: 300px; width: 100%;"></div>
         </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

@endsection





@push('js')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


@endpush