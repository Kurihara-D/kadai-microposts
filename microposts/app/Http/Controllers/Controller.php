<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function counts($user)
    {
        $count_microposts = $user->microposts()->count();

        return [
            'count_microposts' => $count_microposts,
        ];
    }
}


