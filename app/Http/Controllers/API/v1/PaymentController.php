<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{

    public function processingCustomerDetail(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'reg_num' => 'required',
        ));


        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors(),
            ], 422);
        } else {
            $reg_num = $request->input('reg_num');

            $data = DB::table('users')
                ->select('name', 'email', 'program', 'year', 'semester')
                ->where(['reg_num' => $reg_num])
                ->orderBy('id', 'asc')
                ->get();

            return array(
                'error' => false,
                'message' => 'Everything is Ok',
                'reg_num' => $reg_num,
                'result' => $data
            );
        }
    }


    public function processPayment(Request $request)
    {

        $validator = Validator::make($request->input(), array(
            'source_ref' => 'required',
            'payment_method' => 'required',
            'amount' => 'required',
            'reg_num' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors(),
            ], 422);
        } else {
            $reg_num = $request->input('reg_num');
            $amount = $request->input('amount');
            $payment_method = $request->input('payment_method');
            $transaction_result = null;
            $status_code = null;

            $payment_method_results = DB::table('users')
                ->select('program_fees','ecocash', 'zipit')
                ->where(['reg_num' => $reg_num])
                ->get();

            switch ($payment_method) {
                case 'ECOCASH':
                    $ecocash = $payment_method_results[0]->ecocash;
                    $program_fees = $payment_method_results[0]->program_fees;

                    if ($ecocash > $amount) {
                        Payment::create($request->all());

                        //Calculate Wallet Balance
                        $wallet_balance = $ecocash - $amount;

                        //Reduce Program fees
                        $program_fees_balance = $program_fees - $amount;

                        $ecocash_transaction = DB::table('users')
                            ->where('reg_num', $reg_num)
                            ->update(['ecocash' => $wallet_balance, 'semester_reg' => 1]);

                        $transaction_result = 'Successful Transaction';
                        $status_code = 200;

                        DB::table('messages')->insert([
                            'msg_title' => 'Receipt',
                            'msg_body' => 'Successfully Paid Amount of: RTGS$'.$amount."\n Balance Due On Fees: RTGS$".$program_fees_balance,
                            'msg_type' => 'private',
                            'reg_num' => $reg_num,
                        ]);

                        DB::table('users')
                            ->where('reg_num', $reg_num)
                            ->update([
                                'program_fees' => $program_fees_balance,
                            ]);

                        Log::info($ecocash_transaction);
                    } else {
                        $transaction_result = 'Error: Insufficient Funds';
                        $status_code = 603;

                    }
                    break;

                case 'ZIPIT':
                    $zipit = $payment_method_results[0]->zipit;
                    $program_fees = $payment_method_results[0]->program_fees;


                    if ($zipit > $amount) {
                        Payment::create($request->all());

                        // Calculate Wallet Balance
                        $wallet_balance = $zipit - $amount;

                        //Reduce Program fees
                        $program_fees_balance = $program_fees - $amount;

                        $zipit_transaction = DB::table('users')
                            ->where('reg_num', $reg_num)
                            ->update(['zipit' => $wallet_balance, 'semester_reg' => 1]);

                        $transaction_result = 'Successful Transaction';
                        $status_code = 200;

                        DB::table('messages')->insert([
                            'msg_title' => 'Receipt',
                            'msg_body' => 'Successfully Paid Amount of: RTGS$'.$amount."\n Balance Due On Fees: RTGS$".$program_fees_balance,
                            'msg_type' => 'private',
                            'reg_num' => $reg_num,
                        ]);

                        DB::table('users')
                            ->where('reg_num', $reg_num)
                            ->update([
                                'program_fees' => $program_fees_balance,
                            ]);

                        Log::info($zipit_transaction);
                    } else {
                        $transaction_result = 'Error: Insufficient Funds';
                        $status_code = 603;

                    }
                    break;

                default:
                    $transaction_result = 'Error Incorrect Payment Method';
                    $status_code = 604;

                    Log::error('PaymentController: Error Inside The Payment Method');
                    break;
            }




            return array(
                'error' => false,
                'result' => [
                    [
                        'status_code'=> $status_code,
                        'message' => 'Everything is Ok',
                        'transaction_result' => $transaction_result
                    ]
                ]
            );
        }
    }


    public function processPassClass(Request $request){
        $reg_num = $request->input('reg_num');

        $results = DB::table('users')
            ->select('reg_num','name', 'email', 'program')
            ->where(['payment_plan' => 1])
            ->where(['reg_num' => $reg_num])
            ->orderBy('id', 'asc')
            ->get();

        return array(
            'error' => false,
            'result' => $results
        );

    }

    public function processPassExam(Request $request){
        $reg_num = $request->input('reg_num');

        $results = DB::table('users')
            ->select('reg_num','name', 'email', 'program')
            ->where(['exam_reg' => 1])
            ->where(['reg_num' => $reg_num])
            ->orderBy('id', 'asc')
            ->get();

        return array(
            'error' => false,
            'result' => $results
        );    }

}
