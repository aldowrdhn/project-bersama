<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aldowardanaController extends Controller
{
    public function Home(){
        return view('index');
    }

    public function Portfolio(){
        $button = collect([
            [
                'judul' =>'All Project',
            ],
            [
                'judul' =>'Fidi School App',
            ],
            [
                'judul' =>'Fidi  Cafe and Resto App',
            ],
            [
                'judul' =>'Fidi Profile App',
            ],
            [
                'judul' =>'Fidi Campany App',
            ],
        ]);
        
        $title = collect([
            [
                'keterangan' => 'SPECTRA',
                'IMG'=>'IMG/aldowardana/port-1.png'
            ],
            [
                'keterangan' => 'Black Campaign',
                'IMG'=>'IMG/aldowardana/port-2.png'
                
            ],
            [
                'keterangan' => 'Anik Hidayati',
                'IMG'=>'IMG/aldowardana/port-3.png'
            ],
            [
                'keterangan' => 'SMPI Ibnu Majah Bekasi',
                'IMG'=>'IMG/aldowardana/port-4.png'
            ],
            [
                'keterangan' => 'Nderes Aplikasi',
                'IMG'=>'IMG/aldowardana/port-5.png'
            ],
            [
                'keterangan' => 'Susanto',
                'IMG'=>'IMG/aldowardana/port-1.png'
            ],
        ]);

        return view('Page.Portfolio',compact('button','title'));

    }
}