<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        Tag::create([
            'name' => "Php"
        ]);

        Tag::create([
            'name' => "Laravel"
        ]);

        Tag::create([
            'name' => "Javascript"
        ]);

        Tag::create([
            'name' => "Python"
        ]);

        Tag::create([
            'name' => "AI"
        ]);
    }
}
