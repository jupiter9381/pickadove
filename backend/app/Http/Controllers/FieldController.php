<?php

namespace App\Http\Controllers;
use App\Field;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    //

    public function getProfileFields() {
        $fields = Field::all()->toArray();
        $data = array();
        foreach ($fields as $key => $value) {
            $item = array (
                "values" => json_decode($value['values']),
                "type" => $value['type'],
                'name' => $value['name'],
                'required' => $value['required']
            );

            array_push($data, $item);
        }
        return response()->json(['status' => 'success', 'result' => $data], 200);
    }
}
