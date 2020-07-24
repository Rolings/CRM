<?php


namespace App\Helpers\Admin;


use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserHelper
{
    public static function saveUserAvatar($request, $model, $id)
    {
        $old =  $model->find($id);
        if ($old  && !empty($old->avatar)){
          Storage::disk('public')->delete( User::PATCH.$old->avatar);
        }

        $filenameWithExt = $request->file('avatar')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('avatar')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $request->file('avatar')->storeAs('public/' . User::PATCH.$id.'/', $fileNameToStore);
        return $model->update(['avatar' => $id.'/'.$fileNameToStore], $id);
    }

}