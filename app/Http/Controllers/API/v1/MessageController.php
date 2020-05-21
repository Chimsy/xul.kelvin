<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class MessageController extends Controller
{
    public function sendMsgToHelpDesk(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'reg_num' => 'required',
            'msg_title' => 'required',
            'msg_body' => 'required',
            'msg_state' => 'required',
            'msg_type' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors(),
            ], 422);
        } else {
            Message::create($request->all());
            return array(
                'error' => false,
                'message' => 'Everything is Ok',
                'result' => 'Message Sent Successfully'
            );
        }

    }

    public function receiveMsgs(Request $request)
    {
        $reg_num = $request->input('reg_num');
        $msg_type = $request->input('msg_type');

        $results = DB::table('messages')
            ->select('id','msg_title', 'msg_body', 'msg_state', 'msg_type','reg_num')
            ->where(['reg_num' => $reg_num])
            ->where(['msg_type' => $msg_type])
            ->orderBy('id', 'desc')
            ->get();

        return array(
            'error' => false,
            'message' => 'Everything is Ok',
            'result' => $results
        );
    }
}
