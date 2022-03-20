<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Product;
class CounselorListController extends Controller
{
    public function index(Request $request)

    {
        request()->validate([

            'name' => 'required',
            'email' => 'required|email',
            'ph_no' => 'required',
            'category_name' => 'array',

        ]);
        $input = $request->all();
        $products['counselor']  = Product::latest()->paginate(5);
        $products['req_data']   =$input;
        return view('counselorlist.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}
