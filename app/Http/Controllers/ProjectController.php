<?php

namespace App\Http\Controllers;

use App\Models\admin\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\ProjectBusinessPlan;
use App\Models\ProjectType;
use App\Models\SystemServices;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public function index()
    {
        if (Auth::user()->type == "admin") {
            $projects = Project::with('countries' , 'cities')->latest()->paginate(5);
        } else {
            $projects = Project::where('owner_id', Auth::user()->id)->latest()->paginate(5);
        }

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $user = User::where('type', 'client')->get();
        $protype = ProjectType::where('status', 'active')->get();

        return view('admin.projects.create', compact('user', 'protype'));
    }

    public function store_project(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'idea' => 'required|min:3|max:1025|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'logo' => 'required',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $user_id = auth()->user()->id;
            $data = $request->all();
            $data['created_by'] = $user_id;

            if ($request->file('logo')) {
                $file = $request->file('logo');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('public/logo'), $filename);
                $data['logo'] = $filename;
            }
            $project = Project::create([
                     'name' => $data['name'],
                'idea' => $data['idea'],
                'project_type_id' => 1,
                'owner_id' => $user_id,
                'created_by' => $user_id,
                'logo' => $data['logo'],
                'language' => 'ar',
                'country' => $data['country'],
                'city' => $data['city'],
                'start_date' => '1900-01-01',
                'development_duration' => 100,
                'number_days_year' => 365,
                'vat' => 15,
                'currency' => 'sar',

            ]);

            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered', 'id' => $project->id]);
        }
    }
    public function store_project_details(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'project_type_id' => 'required|exists:project_types,id',
            'study_duration' => 'required|numeric',
            'language' => 'required',
            'currency' => 'required',
            'start_date' => 'required|date',
            'development_duration' => 'required|numeric',
            'vat' => 'required|numeric',
            'number_days_year' => 'required|numeric',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'numeric' => 'هذا الحقل  يجب ان يحتوي على رقم',
            'date' => 'هذا الحقل  يجب ان يحتوي على تاريخ',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $project = Project::where('id', $request->project_id)->first();

            $project->update([
                // 'project_type_id' => $request->vat,
                'id' => $request->project_id,
                'study_duration' => $request->study_duration,
                'language'  => $request->language,
                'currency'  => $request->currency,
                'start_date'  => $request->start_date,
                'development_duration'  => $request->development_duration,
                'vat'   => $request->vat,
                'number_days_year'  => $request->number_days_year,

            ]);
            return response()->json(['status' => 1, 'success' => 'تم اضافة المشروع بنجاح']);
        }
    }
    public function update_project(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'idea' => 'required|min:3|max:1025|string',
            'country' => 'required|min:3|max:1025|string',
            'city' => 'required|min:3|max:1025|string',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $project = Project::findOrFail($request->id);
            $user_id = Auth::user()->id;
            $data = $request->all();
            $data['created_by'] = $user_id;
            $data['logo'] = $project->logo;
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('public/logo'), $filename);
                $data['logo'] = $filename;
            }
            Project::where('id', $request->id)->update([
                'name' => $data['name'],
                'idea' => $data['idea'],
                'project_type_id' => $project->project_type_id,
                'owner_id' => $user_id,
                'created_by' => $user_id,
                'logo' => $data['logo'],
                'language' => $project->language,
                'country' => $data['country'],
                'city' => $data['city'],
                'start_date' => $project->start_date,
                'development_duration' => $project->development_duration,
                'number_days_year' => $project->number_days_year,
                'vat' => $project->vat,
                'currency' => $project->currency,

            ]);

            return response()->json(['status' => 1, 'msg' => 'تم تعديل المشروع بنجاح', 'id' => $project->id]);
        }
    }
    public function update_project_details(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'project_type_id' => 'required|exists:project_types,id',
            'study_duration' => 'required|numeric',
            'language' => 'required',
            'currency' => 'required',
            'start_date' => 'required|date',
            'development_duration' => 'required|numeric',
            'vat' => 'required|numeric',
            'number_days_year' => 'required|numeric',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'numeric' => 'هذا الحقل  يجب ان يحتوي على رقم',
            'date' => 'هذا الحقل  يجب ان يحتوي على تاريخ',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $project = Project::where('id', $request->id)->first();

            $project->update([
                'study_duration' => $request->study_duration,
                'language'  => $request->language,
                'currency'  => $request->currency,
                'start_date'  => $request->start_date,
                'development_duration'  => $request->development_duration,
                'vat'   => $request->vat,
                'number_days_year'  => $request->number_days_year,

            ]);
            return response()->json(['status' => 1, 'success' => 'تم تعديل تفاصيل المشروع بنجاح']);
        }
    }
    public function update_project_problems_solutions(Request $request)
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
            $problems = ProjectBusinessPlan::where('project_id', $request->id)->where('type', 'problems')->delete();
            $solutions = ProjectBusinessPlan::where('project_id', $request->id)->where('type', 'solutions')->delete();
            foreach ($request->problems as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->id,
                    'type' => 'problems',
                ]);
            }
            foreach ($request->solutions as $key => $value) {
                ProjectBusinessPlan::create([
                    'title' => $value,
                    'project_id' => $request->id,
                    'type' => 'solutions',
                ]);
            }
            return response()->json(['status' => 1, 'success' => 'تم التعديل بنجاح']);
        }
    }

    public function store(StoreProjectRequest $request)
    {

        $user_id = auth()->user()->id;
        $data = $request->validated();
        $data['created_by'] = $user_id;

        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('public/logo'), $filename);
            $data['logo'] = $filename;
        }

        $project = Project::create($data);
        $project->save();
        return redirect()->route('projects.index');
    }


    public function show(Project $project)
    {
        //    $dates= $project->development_duration+$project->start_date;

        $date = new DateTime($project->start_date);
        $newDate = $date->modify('+' . $project->development_duration . 'month'); // or you can use '-90 day' for deduct

        $dateStartOper = $newDate->format('Y/m/d');
        $year = $newDate->format('Y');

        //    dd($newDate);
        $numofday = $newDate->modify('-' . '365' . 'day');

        $numofday = $numofday->format('d');

        $numofmonth = $newDate->modify('-' . '365' . 'month');

        $numofmonth = $numofmonth->format('m');
        // dd(  $numofmonth);
        $services = SystemServices::where('status', 'active')->get();

        return view('admin.projects.show', compact('project', 'services', 'dateStartOper', 'year', 'numofday', 'numofmonth'));
    }


    public function edit(Project $project)
    {

        $projectType = ProjectType::where('status', 'active')->get();
        $user = User::where('type', 'client')->get();
        // $first_problems = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'problems')->first();
        // $problems = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'problems')->skip(1)->limit(4)->get();
        // $first_solutions = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'solutions')->first();
        // $solutions = ProjectBusinessPlan::where('project_id', $project->id)->where('type', 'solutions')->skip(1)->limit(4)->get();
        return view('admin.projects.edit', compact('project', 'projectType', 'user'));
    }


    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->all();
        $project = Project::query()->findOrFail($project->id);
        $data['logo'] = $project->logo;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('public/logo'), $filename);
            $data['logo'] = $filename;
        }
        $project->update($data);
        return redirect()->route('projects.index')->with('success', 'تم التعديل على بيانات المشروع بنجاح');
    }


    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->id)->delete();
        $problems = ProjectBusinessPlan::where('project_id', $request->id)->where('type', 'problems')->delete();
        $solutions = ProjectBusinessPlan::where('project_id', $request->id)->where('type', 'solutions')->delete();
        return response()->json(true, 200);
    }

    public function search_project(Request $request)
    {

        $search = $request->get('query', false);
        $projects = Project::query()->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->latest()->paginate(2);

        return view('admin.projects.index', compact('projects'));
    }
}
