<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function Dashboard(){
        //vista Home Admin
        return view('admin/SuperAdmin');
    }

}