<?php

namespace App\Http\Controllers;

use App\Link;

class LinkController extends Controller
{
    public function show($id)
    {
        $url = "";

        $link = new Link();
        foreach ($link->getData() as $value)
        {
            if ($id == $value['id']) {
                $url = $value['url'];
            }
        }

        return ["url" => $url];
    }
}
