<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function store(Request $request) {
        // return response()->json(["data" => $request->get('date')]);
        $fields = $request->only(['task_name', 'task_category', 'date']);
        
        DB::beginTransaction();
        
        $model = new Task();
        $model->fill($fields);
        $model->save();

        DB::commit();
        return response()->json(["data" => [
            'message'   => 'Data Successfully Saved!'
        ]]);
    }

    public function getAll() {
        $model = new Task();

        return response()->json(["data" => [
            'message'   => $model->all()
        ]]);
    }
}
