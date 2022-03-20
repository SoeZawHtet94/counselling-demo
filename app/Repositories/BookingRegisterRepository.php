<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BookingRegisterInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;

/**
 * 
 * @author  SoeZawHtet
 * @create_date 2021-07-28
 */
class BookingRegisterRepository implements BookingRegisterInterface
{
    public function requestBooking($param){
        DB::table('bookings')->insert(
            ['user_email' => $param['user_email'],
             'user_name' => $param['user_name'],
             'ph_no' => $param['ph_no'],
             'category_name' => $param['category_name'],
             'counselor_id'=>$param['counselor_id'],
             'booking_date'=>$param['booking_date']
            ]
        );
        return response()->json([
            'message' => 'Successfully Insert'
        ]);
    }
    /** update booking  */
    public function updateBooking($param){
        DB::table('bookings')->where('id',$param['id'])->update(
            ['user_email' => $param['user_email'],
             'user_name' => $param['user_name'],
             'ph_no' => $param['ph_no'],
             'category_name' => $param['category_name'],
             'counselor_id'=>$param['counselor_id'],
             'booking_date'=>$param['booking_date']
            ]
        );
        return response()->json([
            'message' => 'Successfully UPdate'
        ]);
    }

}