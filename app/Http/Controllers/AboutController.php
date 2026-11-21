<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About Me';
        $nama = 'Giga Wahyu Aditya';
        $kelas = 'XI PPLG 1';
        $hobby = 'Bermain Game';
        $repository = 'Akun repository : ';

        return view('admin.about', [
            'title' => $title,
            'nama' => $nama,
            'kelas' => $kelas,
            'hobby' => $hobby,
            'repository' => $repository,
        ]);
    }
}