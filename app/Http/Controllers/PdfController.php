<?php

namespace App\Http\Controllers;

use App\Models\admin\Project;
use App\Models\AdministExpen;
use App\Models\ProjectBpChannelResource;
use App\Models\ProjectBpDetails;
use App\Models\ProjectBusinessPlan;
use App\Models\ProjectDetail;
use App\Models\ProjectProblem;
use App\Models\ProjectSolution;
use App\Models\ProjectTargetMarket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\Auth;
use PDF;

class PdfController extends Controller
{


    public function PDF($id){

        $pdf = new TCPDF();
        $project = Project::where('id' , $id)->first();
        $logo =$project->logo;


        $pdf::setHeaderCallback(function($pdf) use($logo)  {
          
            $pdf->Image('images/85200.jpg', 223, -5, 60, 30);
            $pdf->SetY(10);
            $pdf->SetFont('aealarabiya', '', 18);
            $Title = 'تم اعداد الدراسة من قبل جدوى';
            $pdf->Cell(0, 15, $Title, 0, true, 'C', 0, '', 0, true, 'M', 'M');
            $data = Carbon::now()->toDateString();
            $pdf->Cell(0, 15, 'بتاريخ'." ".$data, 0, true, 'C', 0, '', 0, true, 'M', 'M');
            $pdf->Image('images/'.$logo, 5,-5, 60, 30);
           

    });
    $pdf::setPrintFooter(false);



       $pdf::SetFont('aealarabiya', '', 18);

        $pdf::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
        // set image scale factor
        $pdf::setImageScale(PDF_IMAGE_SCALE_RATIO);
        // set some language dependent data:
        $lg = Array();
        $lg['a_meta_charset'] = 'UTF-8';
        $lg['a_meta_dir'] = 'rtl';
        $lg['a_meta_language'] = 'fa';
        $lg['w_page'] = 'page';

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/ara.php')) {
            require_once(dirname(__FILE__).'/lang/ara.php');
            $pdf::setLanguageArray($l);
        }
        $pdf::SetAutoPageBreak(false, PDF_MARGIN_BOTTOM);

        $pdf::SetMargins(0, PDF_MARGIN_TOP, 2);
        $pdf::SetDisplayMode('fullpage');
        $pdf::setJPEGQuality(75);
        $pdf::setRTL(true);
        $pdf::AddPage('L', 'A4');
// set auto page breaks
// define(PDF_MARGIN_BOTTOM,5);
  
        // $pdf::Ln();
        $pdf::SetY(34);
        // $user = Auth::id();
        $project = Project::where('id' , $id)->first();
        $user = User::where('id', $project->owner_id)->get();

        $problems = ProjectProblem::where('project_id', $project->id)->get();
        $solutions = ProjectSolution::where('project_id', $project->id)->get();
        $saleChannel = ProjectBpChannelResource::where('project_id', $project->id)->where('type','sales_channels')->get();
        $marketingChannel = ProjectBusinessPlan::where('project_id', $project->id)->where('type','marketing_channels')->get();
        $expensisModal = ProjectBusinessPlan::where('project_id', $project->id)->where('type','expensis_modal')->get();
        $incomeSources = ProjectBusinessPlan::where('project_id', $project->id)->where('type','income_sources')->get();

        $suggestedValue = ProjectDetail::where('project_id', $project->id)->get();
        $targetCustomer = ProjectDetail::where('project_id', $project->id)->get();
        $competitive = ProjectDetail::where('project_id' ,$project->id)->get();
        $targetMarket = ProjectDetail::where('project_id',$project->id)->get();
        $mainActive = ProjectBusinessPlan::where('project_id', $project->id)->where('type','main_activity')->get();
      
        $view = \View::make('admin.report.pdf',compact('project','user','problems','solutions','suggestedValue','targetCustomer'
        ,'targetMarket','mainActive','competitive','saleChannel','marketingChannel','expensisModal','incomeSources'));
    
        $html = $view->render();
        $pdf::writeHTML($html, true, false, true, false, '');
        $pdf::Output('report.pdf', 'D');

    }
}
