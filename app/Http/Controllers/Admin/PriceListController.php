<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\PriceList\PriceListServiceInterface;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct( private PriceListServiceInterface $priceListService){

     }


    public function index()
    {
        //
        $pricelists = $this->priceListService->all();
        return view('admin.pricelist.index',compact('pricelists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $pricelist = $this->priceListService->find($id);


        return view('admin.pricelist.edit',compact('pricelist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();

        $this->priceListService->update($data, $id);

        return redirect('/admin/pricelist');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
