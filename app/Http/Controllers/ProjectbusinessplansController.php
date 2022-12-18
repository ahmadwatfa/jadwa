<?php

namespace App\Http\Controllers;

use App\Models\admin\Project;
use App\Models\ProjectBpChannelResource;
use App\Models\ProjectBpDetails;
use App\Models\ProjectBusinessPlan;
use App\Models\ProjectCompatitor;
use App\Models\ProjectDetail;
use App\Models\ProjectProblem;
use App\Models\ProjectProductDetail;
use App\Models\ProjectSolution;
use App\Models\ProjectTargetMarket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProjectbusinessplansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = Auth::user();

        $sale_channels = ProjectBpChannelResource::where('type', 'sale_channel')->get();
        $marketing_channels = ProjectBpChannelResource::where('type', 'marketing_channel')->get();
        $income_sources = ProjectBpChannelResource::where('type', 'income_sources')->get();
        $expensis_modal = ProjectBpChannelResource::where('type', 'expensis_modal')->get();
        $main_activity = ProjectBpChannelResource::where('type', 'main_activity')->get();
        $services = ProjectProductDetail::where('project_id', $id)->get();

        $project = Project::where('id', $id)->with('ProjectTargetMarket', 'ProjectSalesChannels', 'ProjectCompatitor')->first();

        $first_problems = ProjectProblem::where('project_id', $project->id)->first();
        $problems = ProjectProblem::where('project_id', $project->id)->skip(1)->limit(4)->get();

        $first_solutions = ProjectSolution::where('project_id', $project->id)->first();
        $solutions = ProjectSolution::where('project_id', $project->id)->skip(1)->limit(4)->get();

        $first_sales_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'sales_channels')->first();
        $sales_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'sales_channels')->skip(1)->limit(4)->get();

        $first_market_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'marketing_channels')->first();
        $market_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'marketing_channels')->skip(1)->limit(4)->get();

        $first_goals = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'goals')->first();
        $goals = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'goals')->skip(1)->limit(4)->get();

        $first_income = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'income_sources')->first();
        $income = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'income_sources')->skip(1)->limit(4)->get();

        $first_expensis = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'expensis_modal')->first();
        $expensis = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'expensis_modal')->skip(1)->limit(4)->get();

        $first_main_active = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'main_activity')->first();
        $main_active = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'main_activity')->skip(1)->limit(4)->get();

        return view('admin.projectsplane.create', [
            'project_id' => $id,
            'project' => $project,
            'first_problems' => $first_problems,
            'problems' => $problems,
            'first_solutions' => $first_solutions,
            'solutions' => $solutions,
            'user' => $user,
            'sale_channels' => $sale_channels,
            'marketing_channels' => $marketing_channels,
            'income_sources' => $income_sources,
            'expensis_modal' => $expensis_modal,
            'main_activity' => $main_activity,
            'services' => $services,
            'first_sales_channels' => $first_sales_channels,
            'sales_channels' => $sales_channels,
            'first_market_channels' => $first_market_channels,
            'market_channels' => $market_channels,
            'first_goals' => $first_goals,
            'goals' => $goals,
            'first_income' => $first_income,
            'income' => $income,
            'first_expensis' => $first_expensis,
            'expensis' => $expensis,
            'first_main_active' => $first_main_active,
            'main_active' => $main_active,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store_problems_solutions(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'problems.*' => 'required',
            'solutions.*' => 'required',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            // $problems = ProjectProblem::where('project_id', $request->project_id)->delete();
            foreach ($request->problems as $key => $value) {
                ProjectProblem::create([
                    'project_id' => $request->project_id,
                    'problem' => $value,
                ]);
            }
            // $solutions = ProjectSolution::where('project_id', $request->project_id)->delete();
            foreach ($request->solutions as $key => $value) {
                ProjectSolution::create([
                    'project_id' => $request->project_id,
                    'solution' => $value,
                ]);
            }
            return response()->json(['status' => 1, 'success' => 'تمت الاضافة بنجاح']);
        }
    }

    public function store_details_market(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'suggested_value' => 'required|min:3|max:255|string',
            'target_customer' => 'required|min:3|max:255|string',
            'target_market' => 'required|min:3|max:255|string',
            'competitive_advantage' => 'required|min:3|max:255|string',
            'project_id' => 'required|exists:projects,id',
        ], [

            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            // $deatails = ProjectBpDetails::where('project_id', $request->project_id)->first();
            // $competitive_advantage = ProjectBusinessPlan::where('project_id', $request->project_id)->where('type', 'competitive_advantage')->first();

            // if (isset($deatails)) {
            //     ProjectBpDetails::where('project_id', $request->project_id)->update([
            //         'suggested_value' => $request->suggested_value,
            //         'target_customer' => $request->target_customer,
            //     ]);
            // } else {
                
                ProjectDetail::create([
                    'project_id' => $request->project_id,
                    'suggested_value' => $request->suggested_value,
                    'target_customer' => $request->target_customer,
                    'target_market' => $request->target_market,
                    'competitive_advantage' => $request->competitive_advantage,
                    'vision' => 'none',
                    'message' => 'none',

                ]);
            // }
            // if (isset($competitive_advantage)) {
            //     $competitive_advantage->delete();
            //     ProjectBusinessPlan::create([
            //         'title' => $request->competitive_advantage,
            //         'project_id' => $request->project_id,
            //         'type' => 'competitive_advantage',
            //     ]);
            // } else {
                // ProjectBusinessPlan::create([
                //     'title' => $request->competitive_advantage,
                //     'project_id' => $request->project_id,
                //     'type' => 'competitive_advantage',
                // ]);
            // }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }

    public function store_sales_marketing_channels(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'sales_channels.*' => 'required',
            'marketing_channels.*' => 'required',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            // dd($request->all());
            $sales_channels = ProjectBusinessPlan::where('project_id', $request->project_id)->where('type', 'sales_channels')->delete();
            foreach ($request->sales_channels as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->project_id,
                    'type' => 'sales_channels',
                ]);
            }
            $market_channels = ProjectBusinessPlan::where('project_id', $request->project_id)->where('type', 'marketing_channels')->delete();
            foreach ($request->marketing_channels as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->project_id,
                    'type' => 'marketing_channels',
                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }

    public function store_revenue_cost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'income_sources.*' => 'required',
            'expensis_modal.*' => 'required',
            'main_activity.*' => 'required',
            // 'project_id' => 'required|exists:project,id',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $income_sources = ProjectBusinessPlan::where('project_id', $request->project_id)->where('type', 'income_sources')->delete();
            foreach ($request->income_sources as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->project_id,
                    'type' => 'income_sources',
                ]);
            }

            $expensis_modal = ProjectBusinessPlan::where('project_id', $request->project_id)->where('type', 'expensis_modal')->delete();
            foreach ($request->expensis_modal as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->project_id,
                    'type' => 'expensis_modal',
                ]);
            }

            $main_activity = ProjectBusinessPlan::where('project_id', $request->project_id)->where('type', 'main_activity')->delete();
            foreach ($request->main_activity as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->project_id,
                    'type' => 'main_activity',
                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }

    

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
