<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'created_at')->get()->toArray(); //paginate(10);

        $data = [
            'users' => $users,
        ];
        //return view('users.users', $data);
        //return response()->json($data);
        return response()->json( [
            'users' => $users
        ] );
    }

    public function getRecords( Request $request ) {
        //dd($request);
        $search_query = $request->searchTerm;
        $perPage      = $request->per_page;
        $users        = User::where( 'name', 'LIKE', '%' . $search_query . '%' )
            ->paginate( $perPage )
            ->toArray();

        if ( $search_query ) {
            $users['searchTerm'] = $search_query ?: '';
        } else {
            $users['searchTerm'] = $search_query ? null : '';
        }

        return response()->json( [
            'users' => $users
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
