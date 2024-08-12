<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-08-12 14:57:54
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\GoogleTagManager\Http\Controllers\Api;

use Illuminate\Foundation\Validation\ValidatesRequests;

class ExampleController extends Controller
{
    public function demo() {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "success";
        return response()->json($data);
    }
}
