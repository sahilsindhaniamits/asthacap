<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Wallet\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')->get();

        return view('admin.banner.index', compact('banners'));
    }


    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $data               = $request->all();
        $data['created_by'] = Auth::user()->id;
        $data['status']     = empty($data['status']) ? 0 : 1;
        Banner::create($data);
        return redirect()->route('admin.banner.index')->with('success', 'Banner created successfully');
    } 

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    } 

    public function update(Request $request, Banner $banner)
    {
        $data               = $request->all();
        $data['status']     = empty($data['status']) ? 0 : 1;
        $banner->update($data);
        return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully');
    } 

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Banner delete successfully');
    } 
}
