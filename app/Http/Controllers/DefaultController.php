<?php

namespace App\Http\Controllers;

use App\PageSetting;
use Illuminate\Http\Request;
use App\Dynamic\DynamicFacade;
use App\Http\Controllers\ShopController;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $name=null, $category=null)
    {


        // DynamicFacade::shop();

        //  return DynamicFacade::ShopController()->index('kaWSAR');
        // $currentRoute = \Request::route()->getName();
        // $pageSetting = PageSetting::first();
        
        // $cont = "App\Http\Controllers\\".$pageSetting->controller;
        // return DynamicFacade::DController($cont, $pageSetting->method,['id' => 1])->getResult();
        
        // return redirect()->action([$cont, $pageSetting->method], ['name' => 'shop', 'slug' => true]);
        // return $pageSetting;
        return view('template.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
