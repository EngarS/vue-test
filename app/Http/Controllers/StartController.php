<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urlData = [
            array(
              'title' => 'Laravel',
              'url' => 'https://vuejs.org/'
            ),
            array(
                'title' => 'Vue JS',
                'url' => 'https://laravel.com/'
            )
        ];
        $data = [
            'urlData' => $urlData
        ];
        return view('start', $data);
    }

    public function getJson()
    {
        $data = [
            array(
                'title' => 'Laravel',
                'url' => 'https://laravel.com/'
            ),
            array(
                'title' => 'Vue JS',
                'url' => 'https://vuejs.org/'
            ),
            array(
                'title' => 'Bootstrap',
                'url' => 'https://getbootstrap.com'
            )

        ];

        return $data;
    }
}
