<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Services;
use App\User;
use Auth;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {

        $this->validate($request, ['email' => 'required', 'password' => 'required', ]);
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
		{
			$data='{ 
				    "error":false,
			         "name": "'.Auth::user()->name.'",
					 "user_id":'.Auth::user()->user_id.'
					}';

            return response($data);
		} 

		return response('{"error": true,"error_msg": "Invaild Login Credentials"}');
	}

	public function verifyNumber(Request $request)
    {
	   $check=Customer::where('phone',$request->number)->first();
       if(count($check) > 0)
       {
             $data='{ 
				    "error":false,
				    "cust_id": '. $check->customer_id.',
			        "cust_name": "'. $check->name.'",
					"cust_email": "'.$check->email.'",
					"cust_area": "'.$check->location.'"
					}';

            return response($data);
       }
       else
       {
          return response('{"error": true,"error_msg": "Customer not yet Registered"}');
       }
    }

    public function addcustomer(Request $request)
    {
	   $email=Customer::where('email',$request->cust_email)->first();
	   if(count($email) > 0)
       {
            return response('{"error": true,"error_msg": "Customer Email Already Registered"}');
       }
       else
       {
            $customer_data=array('name'=>$request->cust_name,'phone' =>$request->cust_number,'email'=>$request->cust_email,
          	                   'location'=>$request->cust_area,'user_id'=>$request->user_id,'created_at'=>date('Y-m-d H:i:s'));	
		    $insert=Customer::insertGetId($customer_data);
			$data='{ 
				    "error":false,
				    "cust_id": '.$insert.'
			    }';
			return response($data);
       }
    }

    public function services(Request $request)
    {

	    $services=array('vehicle'=>$request->vehicle,'service_amount' =>$request->service_amount,
	    	            'discount'=>$request->discount, 'addon'=>$request->addon,'payment_mode'=>$request->payment_mode,
	    	            'price'=>$request->price,'date'=>date('Y-m-d'),'user_id'=>$request->user_id,
	    	            'customer_id'=>$request->cust_id,'created_at'=>date('Y-m-d H:i:s'));	
	    Services::insert($services);
        return response('{"error": false,"error_msg": "Services Added"}');
    }

    public function serviceReport(Request $request)
    {

	    $paytm=Services::where('date',date('Y-m-d'))->where('user_id',$request->user_id)->where('payment_mode','paytm')->get();
	    $cash=Services::where('date',date('Y-m-d'))->where('user_id',$request->user_id)->where('payment_mode','cash')->get();
        
        if(count($paytm) == 0 && count($cash) == 0)
        {
        	return response('{"error": true,"error_msg": "No Records"}');
        }


	    $total_serveice=count($paytm)+count($cash);
	    $paytm_total=0;
	    foreach($paytm as $value)
	    {
           $paytm_total += $value->price;
	    }
	    $cash_total=0;
	    foreach($cash as $cvalue)
	    {
           $cash_total += $cvalue->price;
	    }
	   
	    $total_price= $cash_total + $paytm_total;
	    $data='{ 
				    "error":false,
				    "total_serveice": '.$total_serveice.',
			        "paytm_total": "'. $paytm_total.'",
					"cash_total": "'.$cash_total.'",
					"total_price": "'.$total_price.'"
					}';

            return response($data);
        
    }


}
