<?php

namespace App\Http\Controllers;

use App\Models\No_Deposit;
use App\Models\transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use illuminate\Support\Str;

class NoDepositController extends Controller
{
    //
    public function subscribePackage(Request $request){
        $user = Auth::user();
        $package = $request->input('name');
        $amount = $request->input('price');
        $activeField = $request->input('active');
       

  
      //   if($user->$activeField){
      //       return response()->json("you already subscribe for this package", 409);
      //   }
      //  if($user->wallet < $amount){
      //   return response()->json("insufficent balance", 406);
      //  }

      if (isset($user->$activeField) && $user->$activeField) {
        return response()->json("You already subscribed to this package", 409);
    }

    // Check if the user has sufficient balance
    if ($user->wallet < $amount) {
        return response()->json("Insufficient balance", 406);
    }


      $user->$activeField = true;
      $user->wallet -= $amount;
      $expires = Carbon::now()->addDays(30 * 9);
      $user->save();


      No_Deposit::create([
        "user_id" => $user->id,
        "name" => $user->name,
        "amount" => $amount,
        "acc_type" =>$package,
        "deposit_count"=> 0,
        "last_recieved" => Carbon::now(),
        "subscribtion_expires" =>$expires
      ]);

      $tranzId = Str::uuid();
      transaction::create([
        'user_id' =>$user->id,
        'username'=> $user->name,
        'amount'=> $amount,
        'acc_type'=> $package,
        'transaction_id' =>$tranzId,
        'description' => "{$user->name} has been charged \${$amount} for{$package}",

      ]);
      return response()->json("you have successfully subscribe for this package", 200);
    }

        
    public function fetchNoDeposit(){
          $data = No_Deposit::where('last_recieved', "<=", Carbon::now()->subDay(1) )->get();
          return response()->json($data);
    }

}
