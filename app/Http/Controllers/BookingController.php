<?php

namespace App\Http\Controllers;
use App\Repositories\Interfaces\BookingRegisterInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BookingController extends Controller
{
    public function __construct(BookingRegisterInterface $BookginRegRepo)
    {
        $this->BookginRegRepo = $BookginRegRepo;
    }
    /**
     * Insert user booking for counselor
     * 
     */
    public function store(Request $request)
    {
        /**
         * check validate
         */
        $request->validate([
            'user_email' => 'required|string|email',
            'ph_no' => 'required|string',
            'category_name' => 'required',
            'counselor_id' => 'required|integer',
            'booking_date' => 'required'
        ]);        
        $credentials = $request->all();
        /** call insert function  */
        return $this->BookginRegRepo->requestBooking($credentials);
    }
    /**
     * update booking
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'user_email' => 'required|string|email',
            'ph_no' => 'required|string',
            'category_name' => 'required',
            'counselor_id' => 'required|integer',
            'booking_date' => 'required'
        ]);        
        $credentials = $request->all();
        return $this->BookginRegRepo->updateBooking($credentials);
    }

}
