<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Config;

class ConfigController extends Controller {

    //
    protected $_config;

    public function __construct(Config $config) {
        $this->_config = $config;
    }

    public function getConfigPage() {
        return view('admin.pages.configuration');
    }

    public function getAllConfig() {
        $configs = $this->_config::all();
        return response()->json($configs);
    }

    public function postSaveConfigs(Request $request) {
        $rules = [
            //
            'cf_email' => 'email',
            'cf_phonenumber' => 'numeric',
            'cf_mobilenumber' => 'numeric'
        ];
        $messages = [
            'exits' => "The :attribute doesn't exist.",
            'unique' => "The :attribute already exist."
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->passes()) {
            foreach ($request->all() as $key => $data) {
                if($key == "_token"){
                    continue;
                }
                try {
                    if(!empty($data)){
                        $this->_config::where('config_tag', $key)
                            ->update(['config_value' => $data]);
                    }
                    
                } catch (\Exception $e) {
                    return response()->json(['errors' => [$e->getMessage().' Fail when update '.$key], 'status' => 0]);
                }
            }
            return response()->json(['success' => 'Configs has been saveed.', 'status' => 1]);
        } else {
            return response()->json(['errors' => $validator->errors(), 'status' => 0]);
        }
    }

}
