<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 5/24/2018
 * Time: 1:37 AM
 */

namespace App\Http\Controllers\API;

use App\Announcement;

class AnnouncementApiController
{
    public function index()
    {
        $announcements = Announcement::all();

        return $announcements;
    }

    public function show(Announcement $announcement)
    {
        return $announcement;
    }
}