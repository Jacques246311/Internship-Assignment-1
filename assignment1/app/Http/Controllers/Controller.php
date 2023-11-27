<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Custom method to do something.
     *
     * @return \Illuminate\Http\Response
     */
    public function customMethod()
    {
        // Your custom logic goes here
        return response('This is a custom response.');
    }
}
