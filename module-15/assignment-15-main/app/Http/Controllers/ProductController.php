<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
                    [
                        'id'=>'1',
                        'name'=>'Fan',
                        'code'=>'201'
                    ],
                    [
                        'id' => '2',
                        'name'=>'Laptop',
                        'code'=>'202'
                    ],
                    [
                        'id'=>'3',
                        'name'=>'Desktop',
                        'code'=>'203'
                    ],
                    [
                        'id'=>'4',
                        'name'=>'Desktop',
                        'code'=>'204'
                    ]
                ];
        return Response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $code = $request->code;
        // Return the view for creating a new product
        return Response()->json([
            'id'=>$id,
            'name'=>$name,
            'code'=>$code
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->input();
        return Response()->json([$data,'data'=>'Data store Successful']);
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
        return "Edit id: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Upadate data form $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Successful delete data id=$id";
    }
}
