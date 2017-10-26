<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Request $request)
    {
        /*if (php_sapi_name() != 'cli')
        {
            view()->share('currentRoute',$request->route()->getName());
            view()->share('menu',Category::orderBy('order')->whereActive(true)->get());
            view()->share('category_id',null);
            view()->share('tags',Tag::getJsonTags());
            view()->share('borderTop',true);
            view()->share('RetinaImage',RetinaImage::class);
        }*/
    }

}
