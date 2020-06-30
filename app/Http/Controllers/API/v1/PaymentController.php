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
            $source_ref = $request->input('source_ref');
            $reg_num = $request->input('reg_num');
            $amount = $request->input('amount');
            $payment_method = $request->input('payment_method');


            $data = DB::table('users')
                ->select('name', 'email', 'program', 'year', 'semester')
                ->where(['reg_num' => $reg_num])
                ->orderBy('id', 'asc')
                ->get();

            return array(
                'error' => false,
                'message' => 'Everything is Ok',
                'source_ref' => $source_ref,
                'reg_num' => $reg_num,
                'amount' => $amount,
                'payment_method' => $payment_method,
                'data' => $data
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

            $payment_method_results = DB::table('users')
                ->select('ecocash', 'zipit')
                ->where(['reg_num' => $reg_num])
                ->get();

            switch ($payment_method) {
                case 'ECOCASH':
                    $ecocash = $payment_method_results[0]->ecocash;

                    if ($ecocash > $amount) {
                        Payment::create($request->all());

                        $wallet_balance = $ecocash - $amount;

                        $ecocash_transaction = DB::table('users')
                            ->where('reg_num', $reg_num)
                            ->update(['ecocash' => $wallet_balance, 'semester_reg' => 1]);

                        $transaction_result = 'Successful Transaction';

                        Log::info($ecocash_transaction);
                    } else {
                        $transaction_result = 'Error: Insufficient Funds';
                    }
                    break;

                case 'ZIPIT':
                    $zipit = $payment_method_results[0]->zipit;

                    if ($zipit > $amount) {
                        Payment::create($request->all());

                        $wallet_balance = $zipit - $amount;

                        $zipit_transaction = DB::table('users')
                            ->where('reg_num', $reg_num)
                            ->update(['zipit' => $wallet_balance, 'semester_reg' => 1]);

                        $transaction_result = 'Successful Transaction';

                        Log::info($zipit_transaction);
                    } else {
                        $transaction_result = 'Error: Insufficient Funds';
                    }
                    break;

                default:
                    $transaction_result = 'Error Incorrect Payment Method';

                    Log::error('PaymentController: Error Inside The Payment Method');
                    break;
            }


            return array(
                'error' => false,
                'message' => 'Everything is Ok',
                'result' => $transaction_result
            );
        }
    }





}
