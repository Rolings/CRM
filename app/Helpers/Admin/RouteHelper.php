<?php


namespace App\Helpers\Admin;


class RouteHelper
{

    public static function getRedirect($request,$id,$route,$message = [])
    {
        return redirect(
            $request->get('action') == 'continue'
                ? route($route.'.edit',$id)
                : route($route.'.index')
        )->with('success',$message);
    }
}