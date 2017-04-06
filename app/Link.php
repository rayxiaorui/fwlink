<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    private $tempData = [
        ["id" => 1, 'url' => 'https://github.com'],
        ["id" => 2, 'url' => 'https://www.microsoft.com'],
        ["id" => 3, 'url' => 'https://www.google.com'],
        ["id" => 4, 'url' => 'https://www.apache.org'],
        ["id" => 5, 'url' => 'https://www.apple.com']
    ];

    public function getData()
    {
        return $this->tempData;
    }
}
