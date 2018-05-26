<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 5/24/2018
 * Time: 1:37 AM
 */

namespace App\Http\Controllers\API;

use App\Announcement;
use App\UserAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AnnouncementApiController extends Controller
{
    public function index()
    {
        if(UserAccount::where('UserAccount_Id', Auth::guard('api')->id())->get()){
            return response()->json(Announcement::all());
        }

    }

    public function show($id)
    {
        if(UserAccount::where('UserAccount_Id', Auth::guard('api')->id())->get()){
            return response()->json(Announcement::findOrFail($id));
        }
    }
}