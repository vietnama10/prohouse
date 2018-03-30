<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Validator;

class MessageController extends Controller
{
    //
    public function __construct(Message $message) {
        $this->_message = $message;
    }
    
    public function saveMessage(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|max:500|min:50'
        ];
        $messages = [];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->passes()){
            try{
                $this->_message->name = $request->name;
                $this->_message->email = $request->email;
                $this->_message->phone = $request->phone;
                $this->_message->message = $request->message;
                $this->_message->status = 0;
                $this->_message->save();
            }catch(\Exception $e){
                return response()->json(['errors'=>['Can\'t send your message! Some things went wrong.'], 'status' => 0]);
            }
            return response()->json(['success' => 'The message has been sent. Thanks for your message!', 'status' => 1]);
        }else{
            return response()->json(['errors' => $validator->errors(), 'status' => 0]);
        }
    }
}
