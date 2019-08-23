<?php

namespace App\Http\Controllers;
use App\Field;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    //

    public function getProfileFields() {
        $fields = Field::all()->toArray();
        return response()->json(['status' => 'success', 'result' => $fields], 200);
    }
}
