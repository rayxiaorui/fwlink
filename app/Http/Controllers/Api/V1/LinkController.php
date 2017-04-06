<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use App\Link;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    public function index()
    {
        $link = new Link();
        return $link->getData();
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $url = $request->input('url');

        return ['id' => $id, 'url' => $url];
    }

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

    public function update(Request $request, $id)
    {
        $id = $request->input('id');
        $url = $request->input('url');

        return ['id' => $id, 'url' => $url];
    }

    public function destroy($id)
    {
        return ['delete'];
    }
}
