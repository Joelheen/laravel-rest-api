<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(){
        $documents = Document::all();

        if ($documents->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'No documents found'
            ], 404);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Document retrieved successfully',
            'data' => $documents
        ], 200);


    }
public function show($id){

}
        
public function store(Request $request){
    }

    public function update(Request $request, $id){
    }

    public function destroy($id){
    }
}