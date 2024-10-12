<?php

namespace App\Http\Controllers\Api;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class BankController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Bank::get();
        return $this->sendResponse($data,"Bank list");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=Bank::create($request->all());
        return $this->sendResponse($data,"Bank created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return $this->sendResponse($bank,"Bank data");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bank=Bank::where('id',$id)->update($request->all());
        return $this->sendResponse($bank,"Bank updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $bank=$bank->delete();
        return $this->sendResponse($bank,"Bank deleted successfully");
    }
}
