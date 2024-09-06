<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function userFundingWallet(Request $request){
     $user_id = $request->user_id;
     $user = User::where('id', $user_id)->first();

     if (!$user) {
        return response()->json(['message'=>"Transaction cannot be processed"], 500);
     }
     
     transaction::create([
        'user_id'=> $user_id,
        'username'=> $request->name,
        'amount'=> $request->amount,
        'acc_type'=> $request->acc_type,
        'transaction_id'=> $request->transaction_id,
        'description'=> "{$request->name} funded {$request->amount} to {$request->acc_type}",
        'status'=> 'pending'

     ]);
       return response()->json(["message"=>'your transaction is being processed'], 200);
    }


    public function fetchUserTransaction(Request $request){  //function for individual trans
        $user = Auth:: user(); // auth is used to get login user
       $id = $user->id;
       if (!$id) {
        return response()->json(["message" => "Error fetching transaction"]);
       }
       $trans = transaction::where('user_id', $id)->get();
       return response()->json($trans, 200);
    }

    public function fetchAllTransaction(){ // function for all trans
        
        try{
            $transaction = transaction::all();
            return response()->json($transaction,   200);
        }catch(\Throwable $th){
            return response()->json(["meassge"=>'error fetchting transaction']);
        }

    }



public function confirmTransaction(Request $request)
{
   $id= $request->id;
   $tranz = transaction:: where('transaction_id', $id)->first();
   if(!$tranz){
    return response()->json(["message"=> 'Transaction could not be found'], 404);
   }
   $user = User:: where('id', $tranz->user_id)->first();
   if (!$user) {
    return response()->json(['message'=>'user cannot be found'], 404);
   }
   $tranz->status = $request->status;
   $user->wallet += $tranz->amount;
   $tranz->save();
   $user->save();
   return response()->json(['message' => 'Transaction successful'], 200);
}



public function rejectTransaction(Request $request)
{
    $id = $request->id;
    $tranz = transaction:: where('transaction_id', $id)->first();
    if (!$tranz) {
        return response()->json(['message'=>'user not found'], 404);

    }
    $user = User:: where('id', $tranz->user_id)->first();
    if (!$user) {
        return response()->json(['message' => 'user id not found'] , 404);
    }
    
    $tranz->status = $request->status;
    $tranz->save();
    $user->save();
    return response()->json(['mesaage' =>'Transaction Rejected'], 200);
}














}
