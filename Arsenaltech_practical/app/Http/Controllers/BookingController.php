<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use Response;
use DB;
class BookingController extends Controller
{
    public function bookticket(Request $request)
    {
    	$data = array();
		  $name = $request->get('name');
    	$email = $request->get('email');
    	$phone = $request->get('phone');
    	$ticketNo = $request->get('tno');

    	
    	$data = array('name'=>"Yatri Rathod");
    	//send mail
    	Mail::send(['html'=>'mail'], $data, function($message) use($email) {
         $message->to($email, 'Booking is Done')->subject
            ('Movie Tickets has been Booked');
         $message->from('vivanyatrirathod@gmail.com','Yatri Rathod');
      	});

      	if(count(Mail::failures()) > 0){
    		$errors = 'Failed to send password reset email, please try again.';
		}
		else{
			$user = new User;
	    	$user->name = $name;
	    	$user->email = $email;
	    	$user->phone_no = $phone;
	    	$user->email_send = 1;
	    	$user->is_booked = 1;
	    	$user->ticket_no = $ticketNo;
	    	$user->save();

	    	$data['ticketNo'] = $user->ticket_no;
	    	$data['success'] = 'success';
	        $data['message'] =  'Booking Successfully';
	        $data['user']  = $user;

		}

      	return Response::json($data);
    }

    public function getTickets()
    {
    	$data = array();

    	$userTicket = User::where('is_booked','=',1)->get();
      
    	return Response::json($userTicket);

    }
    public function Unbooked(Request $request)
    {
      $ticket = $request->get('ticket_no');
      
      $getUser = User::query()
                    ->where('is_booked','=',1)
                    ->where("ticket_no", "LIKE", '%'.$ticket.'%')
                    ->update(["ticket_no" => DB::raw("REPLACE('ticket_no' , '.$ticket.',' ')")]);
      
      


      return Response::json($getUser);
    }
}
