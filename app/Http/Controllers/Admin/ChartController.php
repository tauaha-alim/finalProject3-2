<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Student;


class ChartController extends Controller
{




public function index()
    {



       
            

            $totalStudentTransection=Student::sum('amount');
            $totalTeachersTransection=Project::sum('amount');
     




$months=['0'=>'01','1'=>'02','2'=>'03','3'=>'04','4'=>'05','5'=>'06','6'=>'07','7'=>'08','8'=>'09','9'=>'10','10'=>'11','11'=>'12'];
     
     $year=date('Y');

     $TransectionTrackIncome=array();
     $TransectionTrackExpance=array();
     $TransectionTrackLoss=array();
     $TransectionTrackProfit=array();
     $TransectionTrackIndexIncome=0;
     $TransectionTrackIndexExpence=0;
     $TransectionTrackIndexProfit=0;
     $TransectionTrackIndexLoss=0;

     foreach ($months as $key => $value) {
        $totalStudentTransection=Project::
       whereMonth('created_at', '=', $value)
       ->whereYear('created_at', '=', $year)
       ->sum('amount');
       $TransectionTrackIncome[$TransectionTrackIndexIncome]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection

       ];

      

       $totalTeacherTransection=Project::
       whereMonth('created_at', '=', $value)
       ->whereYear('created_at', '=', $year)
       ->sum('project_expanse');
  
       $total_expense =  $totalTeacherTransection ;
       
       $TransectionTrackExpance[$TransectionTrackIndexExpence]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$total_expense
       ];

if ($totalStudentTransection-$total_expense>0) {
   $TransectionTrackProfit[$TransectionTrackIndexProfit]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection-$total_expense
       ];
}
else{
     $TransectionTrackProfit[$TransectionTrackIndexProfit]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>'0'
       ];
}

if ($totalStudentTransection-$total_expense<0) {
    $TransectionTrackLoss[$TransectionTrackIndexLoss]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection-$total_expense
       ];

}
else{
      $TransectionTrackLoss[$TransectionTrackIndexLoss]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>'0'
       ];
}  
       $TransectionTrackIndexIncome++;
       $TransectionTrackIndexProfit++;
       $TransectionTrackIndexLoss++;
       $TransectionTrackIndexExpence++;
       

     }     



            return view('admin.chart.chart')
           
       
           
          
            
       
            ->with('totalStudentTransection',$totalStudentTransection)
            ->with('totalTeachersTransection',$totalTeachersTransection)
           
            
            ->with('TransectionTrackIncome',$TransectionTrackIncome)
            ->with('TransectionTrackExpance',$TransectionTrackExpance)
            ->with('TransectionTrackLoss',$TransectionTrackLoss)
            ->with('TransectionTrackProfit',$TransectionTrackProfit)
            ->with('year',$year);

        





              
    }

   public function GetYearlyBalanceSheet($year)
    {



        
         


$months=['0'=>'01','1'=>'02','2'=>'03','3'=>'04','4'=>'05','5'=>'06','6'=>'07','7'=>'08','8'=>'09','9'=>'10','10'=>'11','11'=>'12'];


     $TransectionTrackIncome=array();
     $TransectionTrackExpance=array();
     $TransectionTrackLoss=array();
     $TransectionTrackProfit=array();
     $TransectionTrackIndexIncome=0;
     $TransectionTrackIndexExpence=0;
     $TransectionTrackIndexProfit=0;
     $TransectionTrackIndexLoss=0;

     foreach ($months as $key => $value) {
        $totalStudentTransection=Project::
       whereMonth('created_at', '=', $value)
       ->whereYear('created_at', '=', $year)
       ->sum('amount');
       $TransectionTrackIncome[$TransectionTrackIndexIncome]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection

       ];

      

        $totalTeacherTransection=Project::
       whereMonth('created_at', '=', $value)
       ->whereYear('created_at', '=', $year)
       ->sum('project_expanse');
  
       $total_expense =  $totalTeacherTransection ;

        $TransectionTrackExpance[$TransectionTrackIndexExpence]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$total_expense
       ];

       
       $TransectionTrackExpance[$TransectionTrackIndexExpence]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$total_expense
       ];

if ($totalStudentTransection-$total_expense>0) {
   $TransectionTrackProfit[$TransectionTrackIndexProfit]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection-$total_expense
       ];
}
else{
     $TransectionTrackProfit[$TransectionTrackIndexProfit]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>'0'
       ];
}

if ($totalStudentTransection-$total_expense<0) {
    $TransectionTrackLoss[$TransectionTrackIndexLoss]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection-$total_expense
       ];

}
else{
      $TransectionTrackLoss[$TransectionTrackIndexLoss]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>'0'
       ];
}  
       $TransectionTrackIndexIncome++;
       $TransectionTrackIndexProfit++;
       $TransectionTrackIndexLoss++;
       $TransectionTrackIndexExpence++;
       

     }     


            return view('admin.chart.chart')
            
            
            ->with('totalStudentTransection',$totalStudentTransection)
           
           
            ->with('TransectionTrackIncome',$TransectionTrackIncome)
            ->with('TransectionTrackExpance',$TransectionTrackExpance)
             ->with('totalTeachersTransection',$totalTeacherTransection)

            ->with('TransectionTrackLoss',$TransectionTrackLoss)
            ->with('TransectionTrackProfit',$TransectionTrackProfit)
            ->with('year',$year);

        }


         public function student_chart()
    {
     $months=['0'=>'01','1'=>'02','2'=>'03','3'=>'04','4'=>'05','5'=>'06','6'=>'07','7'=>'08','8'=>'09','9'=>'10','10'=>'11','11'=>'12'];
     $year=date('Y');
     $TransectionTrack=array();
     $TransectionTrackIndex=0;

     foreach ($months as $key => $value) {
         $totalStudentTransection=Student::
       whereMonth('created_at', '=', $value)
       ->whereYear('created_at', '=', $year)
       ->sum('amount');
       $TransectionTrack[$TransectionTrackIndex]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection
       ];
       $TransectionTrackIndex++;
       
     }
     $title="Student Payment ".$year;
     return view('admin.chart.student_payment_chart')->with('TransectionTrack',$TransectionTrack)->with('title',$title)->with('year',$year);

  
    }





       public function student_chart_year($year)
    {
     $months=['0'=>'01','1'=>'02','2'=>'03','3'=>'04','4'=>'05','5'=>'06','6'=>'07','7'=>'08','8'=>'09','9'=>'10','10'=>'11','11'=>'12'];
    
     $TransectionTrack=array();
     $TransectionTrackIndex=0;

     foreach ($months as $key => $value) {
         $totalStudentTransection=Student::
       whereMonth('created_at', '=', $value)
       ->whereYear('created_at', '=', $year)
       ->sum('amount');
       $TransectionTrack[$TransectionTrackIndex]=[
        'month'=>$value,
        'year'=>$year,
        'amount'=>$totalStudentTransection
       ];
       $TransectionTrackIndex++;
       
     }
     $title="Student Payment ".$year;
     return view('admin.chart.student_payment_chart')->with('TransectionTrack',$TransectionTrack)->with('title',$title)->with('year',$year);

  
    }




        
    


}

