<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
<<<<<<< HEAD
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;
=======
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()  :void
    {

    }

    public function mange() :string
    {
                return "bojour";

    }
>>>>>>> a181553 (new secrets)
}
