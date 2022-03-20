<?php 
namespace App\Repositories\Interfaces;

interface BookingRegisterInterface
{

    public function requestBooking($param);
    public function updateBooking($param);

}