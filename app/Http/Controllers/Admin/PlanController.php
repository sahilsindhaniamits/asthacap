<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Wallet\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::orderBy('created_at', 'desc')->get();

        return view('admin.plan.index', compact('plans'));
    }


    public function create()
    {
        return view('admin.plan.create');
    }

    public function store(Request $request)
    {
        $data               = $request->all();
        $data['created_by'] = Auth::user()->id;
        $data['status']     = empty($data['status']) ? 0 : 1;
        $data['is_locked']  = empty($data['is_locked']) ? 0 : 1;
        $plan               = Plan::create($data);
        $plan->plan_id      = 'P' . rand(0,9) . $plan->id . rand(00,99);
        $plan->save();

        return redirect()->route('admin.plan.index')->with('success', 'Plan created successfully');
    } 

    public function edit(Plan $plan)
    {
        return view('admin.plan.edit', compact('plan'));
    } 

    public function update(Request $request, Plan $plan)
    {
        $data               = $request->all();
        $data['status']     = empty($data['status']) ? 0 : 1;
        $data['is_locked']  = empty($data['is_locked']) ? 0 : 1;
        $plan->update($data);
        return redirect()->route('admin.plan.index')->with('success', 'Plan updated successfully');
    } 

    public function destroy(Plan $plan)
    {
        // $plan->delete();
        return redirect()->route('admin.plan.index')->with('success', 'Plan delete successfully');
    } 
}
