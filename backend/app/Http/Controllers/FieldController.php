<?php

namespace App\Http\Controllers;
use App\Field;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.jwt');
    }

    public function getProfileFields() {
        $fields = Field::all()->toArray();
        $data = array();
        $mandatory = array();
        $dropdowns = array();
        $contacts = array();
        foreach ($fields as $key => $value) {
            if($value['type'] == "2"){
                $values = json_decode($value['values']);
            } else {
                $values = $value['values'];
            }

            
            $item = array (
                "id" => $value['id'],
                "values" => $values,
                "type" => $value['type'],
                'name' => $value['name'],
                'required' => $value['required']
            );
            if($value['type'] == "1") array_push($mandatory, $item);
            if($value['type'] == "2") array_push($dropdowns, $item);
            if($value['type'] == "3") array_push($contacts, $item);
        }
        return response()->json(['status' => 'success', 'mandatory' => $mandatory, 'dropdowns' => $dropdowns, 'contacts' => $contacts], 200);
    }
}
