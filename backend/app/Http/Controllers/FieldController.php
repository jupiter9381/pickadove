<?php

namespace App\Http\Controllers;
use App\Field;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Profile;

class FieldController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.jwt');
    }

    public function getProfileFields() {
        $user_id = Auth::user()->id;
        $fields = Field::all();
        $data = array();
        $mandatory = array();
        $dropdowns = array();
        $contacts = array();
        $services = array();
        foreach ($fields as $key => $value) {
            if($value->type == "2"){
                $values = json_decode($value->values);
            } else {
                $values = $value->values;
            }
            
            $profile = Profile::where('user_id', $user_id)->where('field_id', $value->id)->first();
            if($profile) $selected_val = $profile->value;
            else $selected_val = "";
            $item = array (
                "id" => $value->id,
                "values" => $values,
                "type" => $value->type,
                'name' => $value->name,
                'required' => $value->required,
                'selected_val' => $selected_val
            );
            if($value->type == "1") array_push($mandatory, $item);
            if($value->type == "2") array_push($dropdowns, $item);
            if($value->type == "3") array_push($contacts, $item);
            if($value->type == "4") array_push($services, $item);
        }
        return response()->json(['status' => 'success', 'mandatory' => $mandatory, 'dropdowns' => $dropdowns, 'contacts' => $contacts, 'services' => $services], 200);
    }
}
