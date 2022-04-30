<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function delete()
    {
        if (\Gate::allows('isAdmin')) {

            dd('Admin allowed');

        } else {

            dd('You are not Admin');

        }
    }


    public function update()
    {
        $this->authorize('isManager');
    }

    public function create()
    {
        $this->authorize('isUser');
    }
}
