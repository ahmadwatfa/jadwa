<?php

namespace App\Http\Controllers;

use App\Models\InvestmentOffer;
use App\Http\Requests\StoreInvestmentOfferRequest;
use App\Http\Requests\UpdateInvestmentOfferRequest;
use App\Models\admin\Project;
use App\Models\CompetitiveAdvantage;
use App\Models\ProjectBpChannelResource;
use App\Models\ProjectBusinessPlan;
use App\Models\ProjectCompatitor;
use App\Models\ProjectDetail;
use App\Models\ProjectFutureRevenue;
use App\Models\ProjectGoal;
use App\Models\ProjectInvestment;
use App\Models\ProjectInvestmentUse;
use App\Models\ProjectProblem;
use App\Models\ProjectProductDetail;
use App\Models\ProjectSolution;
use App\Models\ProjectTargetCustomer;
use App\Models\ProjectTargetMarket;
use App\Models\ProjectTeamWork;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvestmentOfferController extends Controller
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
        
        $problems = ProjectProblem::where('project_id', $project->id)->limit(5)->get();
        $solutions = ProjectSolution::where('project_id', $project->id)->limit(5)->get();
        
        $details = ProjectDetail::where('project_id', $id)->first();
        
        $first_sales_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'sales_channels')->first();
        $sales_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'sales_channels')->skip(1)->limit(4)->get();
        
        $first_market_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'marketing_channels')->first();
        $market_channels = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'marketing_channels')->skip(1)->limit(4)->get();
        
        $compatitor = ProjectCompatitor::where('project_id', $id)->first();
        
        $Project_future_revenue = ProjectFutureRevenue::where('project_id', $id)->get();

        $Project_investments = ProjectInvestment::where('project_id', $id)->first();
    
        $first_goals = ProjectGoal::where('project_id', $project->id)->first();
        $goals = ProjectGoal::where('project_id', $project->id)->skip(1)->limit(4)->get();

        $first_income = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'income_sources')->first();
        $income = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'income_sources')->skip(1)->limit(4)->get();

        $first_expensis = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'expensis_modal')->first();
        $expensis = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'expensis_modal')->skip(1)->limit(4)->get();

        $first_main_active = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'main_activity')->first();
        $main_active = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'main_activity')->skip(1)->limit(4)->get();
        
        $date = new DateTime($project->start_date);
        $newDate = $date->modify('+' . $project->development_duration . 'month'); // or you can use '-90 day' for deduct

        // $dateStartOper = $newDate->format('Y/m/d');
        $year = $newDate->format('Y');
        // $year = Carbon::createFromFormat('Y-m-d', $project->start_date)->year;

        $customers = ProjectTargetCustomer::where('project_id' , $project->id)->first();
              
        return view('admin.investmentoffer.create', [
            'project_id' => $id,
            'project' => $project,
            'year' => $year,
            'problems' => $problems,
            'solutions' => $solutions,
            'details' => $details,
            'compatitor' => $compatitor,
            'sale_channels' => $sale_channels,
            'marketing_channels' => $marketing_channels,
            'income_sources' => $income_sources,
            'expensis_modal' => $expensis_modal,
            'main_activity' => $main_activity,
            'Project_future_revenue' => $Project_future_revenue,
            'Project_investments' => $Project_investments,
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
            'customers' => $customers,
            'user' => $user,
        ]);
    }
    public function fetchproblems(Request $request)
    {
        $problem = ProjectProblem::where('project_id', $request->id)->get();

        return response()->json([
            'problem' => $problem,
        ]);
    }
   
    public function store_problem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'problem' => 'required|string|min:3',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            ProjectProblem::create($request->all());
            return response()->json(['status' => 1, 'success' => 'تمت الاضافة بنجاح']);
        }
    }
    public function update_problem(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'problem' => 'required|string|min:3',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            ProjectProblem::where('id' , $request->id)->update([
                'problem' => $request->problem,
                'details' => $request->details,
            ]);
            return response()->json(['status' => 1, 'success' => 'تمت عملية التعديل بنجاح']);
        }
    }
    public function destroy_problem(Request $request)
    {
        $problem = ProjectProblem::findOrFail($request->id);
        $problem->delete();
    }

    public function fetchsolution(Request $request)
    {
        $solution = ProjectSolution::where('project_id', $request->id)->get();

        return response()->json([
            'solution' => $solution,
        ]);
    }

    public function store_solution(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'solution' => 'required|string|min:3',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            ProjectSolution::create($request->all());
            return response()->json(['status' => 1, 'success' => 'تمت الاضافة بنجاح']);
        }
    }
    public function update_solution(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'solution' => 'required|string|min:3',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            ProjectSolution::where('id' , $request->id)->update([
                'solution' => $request->solution,
                'details' => $request->details,
            ]);
            return response()->json(['status' => 1, 'success' => 'تمت عملية التعديل بنجاح']);
        }
    }
    public function destroy_solution(Request $request)
    {
        $solution = ProjectSolution::findOrFail($request->id);
        $solution->delete();
    }
    public function store_competitive_advantages(Request $request)
    {

        $validator = Validator::make($request->all(), [
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
            $project = ProjectDetail::where('project_id', $request->project_id)->first();

            if (isset($project->competitive_advantage)) {
                ProjectDetail::where('project_id', $request->project_id)->update([
                    'competitive_advantage' => $request->competitive_advantage,
                ]);
            } else {
                ProjectDetail::create([
                    'project_id' => $request->project_id,
                    'competitive_advantage' => $request->competitive_advantage,
                    'suggested_value' => 'none',
                    'target_customer' => 'none',
                    'target_market' => 'none',
                    'vision' => 'none',
                    'message' => 'none',

                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function store_competitive_advantages_modal(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'icon' => 'required',
            'title' => 'required|min:3|max:255|string',
            'description' => 'required|min:3|max:255|string',
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

            CompetitiveAdvantage::create([
                'project_id' => $request->project_id,
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,

            ]);

            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function update_competitive_advantages_modal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'icon' => 'required',
            'title' => 'required|min:3|max:255|string',
            'description' => 'required|min:3|max:255|string',
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

            CompetitiveAdvantage::where('id', $request->id)->update([
                'project_id' => $request->project_id,
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,

            ]);

            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function fetchcompetitiveadvantage(Request $request)
    {
        $competitiveadvantage = CompetitiveAdvantage::where('project_id', $request->id)->get();

        return response()->json([
            'competitiveadvantage' => $competitiveadvantage,
        ]);
    }
    public function fetchtargetcustomer(Request $request)
    {
        $targetcustomer = ProjectTargetCustomer::where('project_id', $request->id)->get();

        return response()->json([
            'targetcustomer' => $targetcustomer,
        ]);
    }
    public function fetchteamwork(Request $request)
    {
        $teamwork = ProjectTeamWork::where('project_id', $request->id)->get();

        return response()->json([
            'teamwork' => $teamwork,
        ]);
    }
    public function store_target_customer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'target_customer' => 'required|min:3|max:255|string',
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
            $project = ProjectDetail::where('project_id', $request->project_id)->first();

            if (isset($project->target_customer)) {
                ProjectDetail::where('project_id', $request->project_id)->update([
                    'target_customer' => $request->target_customer,
                ]);
            } else {
                ProjectDetail::create([
                    'project_id' => $request->project_id,
                    'target_customer' => $request->target_customer,
                    'competitive_advantage' => 'none',
                    'suggested_value' => 'none',
                    'target_market' => 'none',
                    'vision' => 'none',
                    'message' => 'none',

                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function store_target_customer_modal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'icon' => 'required',
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

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->store('target_customer', 'public');
                $data = array_merge($request->all(), ['icon' => $icon]);
            }

            ProjectTargetCustomer::create($data);
        }
        return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
    }
    public function update_target_customer_modal(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
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
            $icon = ProjectTargetCustomer::where('id' , $request->id)->get('icon');
            $data = array_merge($request->except('_token'), ['icon' => $icon]);
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->store('target_customer', 'public');
                $data = array_merge($request->except('_token'), ['icon' => $icon]);
            }
            ProjectTargetCustomer::where('id', $request->id)->update($data);

        }
        return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
    }
    public function store_target_market(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'target_market' => 'required|min:3|max:255|string',
            'tam' => 'required',
            'sam' => 'required',
            'som' => 'required',
            'expected_growth' => 'required',
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
            $project = ProjectDetail::where('project_id', $request->project_id)->first();
            $ProjectTargetMarket = ProjectTargetMarket::where('project_id', $request->project_id)->first();

            if (isset($project->target_market)) {
                ProjectDetail::where('project_id', $request->project_id)->update([
                    'target_market' => $request->target_market,
                ]);
            } else {
                ProjectDetail::create([
                    'project_id' => $request->project_id,
                    'target_market' =>  $request->target_market,
                    'target_customer' => 'none',
                    'competitive_advantage' => 'none',
                    'suggested_value' => 'none',
                    'vision' => 'none',
                    'message' => 'none',

                ]);
            }
            if (isset($ProjectTargetMarket)) {

                ProjectTargetMarket::where('project_id', $request->project_id)->update([
                    'project_id' => $request->project_id,
                    'tam' =>  $request->tam,
                    'sam' =>  $request->sam,
                    'som' =>  $request->som,
                    'expected_growth' =>  $request->expected_growth,

                ]);
            } else {

                ProjectTargetMarket::create([
                    'project_id' => $request->project_id,
                    'tam' =>  $request->tam,
                    'sam' =>  $request->sam,
                    'som' =>  $request->som,
                    'expected_growth' =>  $request->expected_growth,

                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function store_compatitor(Request $request)
    {
        $project = ProjectCompatitor::where('project_id', $request->project_id)->first();

        $validator = Validator::make($request->all(), [
            'compatitor_vector1' => 'required|min:3|max:255|string',
            'compatitor_vector2' => 'required|min:3|max:255|string',
            'compatitor_vector3' => 'required|min:3|max:255|string',
            'compatitor_vector4' => 'required|min:3|max:255|string',
            'compatitor1' => 'required|min:2|max:255|string',
            'compatitor2' => 'required|min:2|max:255|string',
            'compatitor3' => 'required|min:2|max:255|string',
            'compatitor4' => 'required|min:2|max:255|string',
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

            if (isset($project)) {
                ProjectCompatitor::where('project_id', $request->id)->update([
                    'project_id' => $request->id,
                    'compatitor_vector1' =>  $request->compatitor_vector1,
                    'compatitor_vector2' =>  $request->compatitor_vector2,
                    'compatitor_vector3' =>  $request->compatitor_vector3,
                    'compatitor_vector4' =>  $request->compatitor_vector4,
                    'compatitor1' => $request->compatitor1,
                    'compatitor2' => $request->compatitor2,
                    'compatitor3' => $request->compatitor3,
                    'compatitor4' => $request->compatitor4,
                ]);
            } else {

                ProjectCompatitor::create([
                    'project_id' => $request->project_id,
                    'compatitor_vector1' =>  $request->compatitor_vector1,
                    'compatitor_vector2' =>  $request->compatitor_vector2,
                    'compatitor_vector3' =>  $request->compatitor_vector3,
                    'compatitor_vector4' =>  $request->compatitor_vector4,
                    'compatitor1' => $request->compatitor1,
                    'compatitor2' => $request->compatitor2,
                    'compatitor3' => $request->compatitor3,
                    'compatitor4' => $request->compatitor4,

                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }

    public function store_vision_message_goals(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'vision' => 'required|min:3|max:255|string',
            'message' => 'required|min:3|max:255|string',
            'goals.*' => 'required|min:3|max:255|string',
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
            ProjectDetail::where('project_id',  $request->project_id)->update([
                'vision' => $request->vision,
                'message' => $request->message,
            ]);
            ProjectGoal::where('project_id', $request->project_id)->delete();
            foreach ($request->goals as $key => $value) {
                ProjectGoal::create([
                    'project_id' => $request->project_id,
                    'goals' => $value,
                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }

    public function store_futurer_evenues(Request $request)
    {
        $project_id = $request->project_id;
        ProjectFutureRevenue::where('project_id' , $project_id)->delete();
        foreach($request->except(['_token' , 'project_id']) as $key => $value){
            ProjectFutureRevenue::updateOrCreate([
                'project_id' => $project_id,
                'year' => $key,
                'income_value' => $value,
                'income' => 'user',
            ]);
        }
        return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
    }
    public function store_invesment(Request $request)
    {
        $project = ProjectInvestment::where('project_id', $request->project_id)->first();
        $validator = Validator::make($request->all(), [
            'company_value' => 'required',
            'investment_value' => 'required',
            'offered_share' => 'required',
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
            if (isset($project)) {
                ProjectInvestment::where('project_id', $request->project_id)->update([
                    'project_id' => $request->project_id,
                    'company_value' =>  $request->company_value,
                    'investment_value' =>  $request->investment_value,
                    'offered_share' =>  $request->offered_share,
                ]);
            } else {
                ProjectInvestment::create([
                    'project_id' => $request->project_id,
                    'company_value' =>  $request->company_value,
                    'investment_value' =>  $request->investment_value,
                    'offered_share' =>  $request->offered_share,
                ]);
            }
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function fetchinvestment(Request $request)
    {
        $investment = ProjectInvestmentUse::where('project_id', $request->id)->get();

        return response()->json([
            'investment' => $investment,
        ]);
    }
    public function store_investment_modal(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3',
            'value' => 'required',
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

            ProjectInvestmentUse::create($request->all());
            return response()->json(['status' => 1, 'success' => 'تمت الاضافة بنجاح']);
        }
    }
    public function update_investment_modal(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3',
            'value' => 'required',
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
            ProjectInvestmentUse::where('project_id' , $request->project_id)->update($request->all());
            return response()->json(['status' => 1, 'success' => 'تمت الاضافة بنجاح']);
        }
    }





    public function store_team_work_modal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
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

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('team_work', 'public');
                $data = array_merge($request->all(), ['image' => $image]);
            }
            ProjectTeamWork::create($data);
        }
        return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
    }
    public function update_team_work_modal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'title' => 'required',
            'description' => 'required',
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
            $image = ProjectTeamWork::where('id' , $request->id)->get('image');
            $data = array_merge($request->except('_token'), ['image' => $image]);
            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('team_work', 'public');
                $data = array_merge($request->except('_token'), ['image' => $image]);
            }
            ProjectTeamWork::where('id', $request->id)->update($data);
        }
        return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
    }



    public function fetchservices(Request $request)
    {
        $services = ProjectProductDetail::where('project_id', $request->id)->get();
        return response()->json([
            'services' => $services,
        ]);
    }

    public function store_service_name_description(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'details' => 'required|min:3|max:255|string',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            ProjectProductDetail::create([
                'name' => $request->name,
                'details' => $request->details,
                'project_id' => $request->project_id,
            ]);


            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function update_service_name_description(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'details' => 'required|min:3|max:255|string',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            ProjectProductDetail::where('id', $request->id)->update([
                'name' => $request->name,
                'details' => $request->details,
            ]);
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    public function destroy_services(Request $request)
    {
        $service = ProjectProductDetail::findOrFail($request->id);
        $service->delete();
    }


    public function store_users_details(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|min:3|max:255|string',
            'phone' => 'required|min:3|max:255|string',
            'twitter' => 'string',
            'linkedin' => 'string',

        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            User::where('id', Auth::user()->id)->update([
                'name' =>  $request->name,
                'email' =>  $request->email,
                'phone' => $request->phone,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
            ]);
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvestmentOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestmentOfferRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestmentOffer  $investmentOffer
     * @return \Illuminate\Http\Response
     */
    public function show(InvestmentOffer $investmentOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestmentOffer  $investmentOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestmentOffer $investmentOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvestmentOfferRequest  $request
     * @param  \App\Models\InvestmentOffer  $investmentOffer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestmentOfferRequest $request, InvestmentOffer $investmentOffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestmentOffer  $investmentOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestmentOffer $investmentOffer)
    {
        //
    }
}
