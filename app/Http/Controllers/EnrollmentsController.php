<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentsController extends Controller
{
    function showCheckout($category_id){
        $category=Category::findOrFail($category_id);
        return view('checkout',compact('category'));
    }
    function processPayment(Request $request){
         $request->validate([
        'holder_name' => 'required',
        'card_number' => 'required|digits:16',
        'expiry' => 'required',
        'cvv' => 'required|digits:3',
         ]);
         $category = Category::findOrFail($request->category_id);
         $totalPrice = $category->courses->sum('price');
          
         Enrollment::create([
        'user_id' => Auth::id(),
        'category_id' => $request->category_id,
        'paid_amount' => $totalPrice,
        'payment_status' => 'paid',
        'transaction_id' => 'TXN_' . strtoupper(bin2hex(random_bytes(6))), // كود محاكاه 
         ]);
         return redirect()->route('course')->with("messagepayment","payment success");
    
    }
    function delete($id){
        $enrollment=Enrollment::findOrFail($id);
        $enrollment->delete();
        return redirect()->route("home")->with("message","one enrollment deleted successfully");
    }
}
