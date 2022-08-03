<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(PeopleRequest $request)
    {
        $people = People::create($this->helper($request->only('user-data')));

        return back()->with([
            'people' => $people,
        ]);
    }

    private function helper($str) {
        $str = strtoupper($str['user-data']);
        $result = preg_split('/\d/', $str);
        preg_match_all('/\d+/', $str, $matches);
        $name = $result[0];
        $age = $matches[0][0];
        $city = trim(preg_replace('/(TAHUN)|(THN)|(TH)/','' , $result[2]));
        
        return [
            'name' => $name,
            'age' => $age,
            'city' => $city,
        ];
    }
}
