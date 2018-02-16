<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
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
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
            'city' => 'required',
            'street' => 'required',
            'zip' => 'required',
        ]);

        $client = new Clients;
        $client->user_id = Auth::id();
        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        $client->telephone = $request->telephone;
        $client->city = $request->city;
        $client->street = $request->street;
        $client->zip = $request->zip;

        $client->save();

        return redirect(route('manage'))->with('success', 'Client Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clients::find($id);

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
            'city' => 'required',
            'street' => 'required',
            'zip' => 'required',
        ]);

        Clients::find($request->id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'telephone' => $request->telephone,
            'city' => $request->city,
            'street' => $request->street,
            'zip' => $request->zip,
        ]);

        return redirect(route('manage'))->with('success', 'Client Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Clients::find($id);
        $client->delete();

        return back()->with('success', 'Client Deleted');
    }
}
