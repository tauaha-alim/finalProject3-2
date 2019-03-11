@extends('layouts.backend.app')


@push('css')



@endpush

@section('content')

   <div class="content-wrapper">
  
   
    
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
<br>
<br>
 </div>
<script>
function myFunction(val) {
            if(val){
               window.location.href = '/admin/investment_chart/'+val;
            }else{
                location.reload();

            }
}
</script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  animationEnabled: true,
  title:{
    text: "{{$title}}"   
  },
  axisX: {
    interval: 1,
    intervalType: "month",
    valueFormatString: "MMM"
  },
  axisY:{
    title: "Price (in Tk)",
    valueFormatString: "#0 Tk"
  },
  data: [{        
    type: "column",
    markerSize: 12,
    xValueFormatString: "MMM, YYYY",
    yValueFormatString: "###.# Tk",
    dataPoints: [

    @foreach($TransectionTrack as $key)
  
    { x: new Date({{$key['year']}}, {{$key['month']-1}}, 1), y: {{$key['amount']}},  markerType: "triangle",  markerColor: "#6B8E23" },
    @endforeach 
    ]
  }]
});
chart.render();

}
</script>

<div id="chartContainer" style="height: 300px; width: 100%;"></div>


  </div>

@endsection





@push('js')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


@endpush