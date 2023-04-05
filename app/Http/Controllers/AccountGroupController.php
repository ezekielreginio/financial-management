<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAccountGroup;
use App\Services\AccountsService;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class AccountGroupController extends Controller
{
    use JsonResponseTrait;

    private AccountsService $service;

    public function __construct(AccountsService $service)
    {
        $this->service = $service;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestAccountGroup $request)
    {
        return $this->parseJsonResponse($this->service->createAccountGroup($request->validated(), auth()->user()->id), 'data');
    }

    public function all()
    {
        return $this->parseJsonResponse($this->service->getAllAccountGroups(auth()->user()->id), 'data');
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
