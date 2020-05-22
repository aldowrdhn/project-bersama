<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ronaldoController extends Controller
{
    //
    public function Product(){
        $product=collect([
            [
                'nama'=> 'Fidi Company App',
                'content'=>'Solusi bagi perusahaan dalam mengelola informasi yang efektif dan
                efisien sesuai dengan kebutuhan perusahaan.',
                'img'=>'IMG/ronaldo/1.png'
            ],
            [
                'nama'=> 'Fidi Hotel Apps',
                'content'=>'Solusi bagi pihak pengelola Hotel dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan Hotel.',
                'img'=>'IMG/ronaldo/2.png'
            ],
            [
                'nama'=> 'Fidi Apartement Apps',
                'content'=>'Solusi bagi pihak pengelola apartment dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan Apartment',
                'img'=>'IMG/ronaldo/3.png'
            ],
            [
                'nama'=> 'Fidi Campus Apps',
                'content'=>'Solusi bagi pihak kampus dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan kampus',
                'img'=>'IMG/ronaldo/4.png'
            ],
            [
                'nama'=> 'Fidi Hospital Apps',
                'content'=>'Solusi bagi pihak pengelola Hospital dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan Hospital',
                'img'=>'IMG/ronaldo/5.png'
            ],
            [
                'nama'=> 'Fidi Pesantren Apps',
                'content'=>'Solusi bagi pihak pesantren dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan pesantren',
                'img'=>'IMG/ronaldo/6.png'
            ],
            [
                'nama'=> 'Fidi Profile Apps',
                'content'=>'Solusi bagi personal profile dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan personal profile',
                'img'=>'IMG/ronaldo/7.png'
            ],
            [
                'nama'=> 'Customizable',
                'content'=>'Morbi tempus lobortis nunc non commodo. Pellentesque habitant 
                morbi tristique senectus et netus et.',
                'img'=>'IMG/ronaldo/8.png'
            ],
            [
                'nama'=> 'Fidi Property Apps',
                'content'=>'solusi bagi perusahaan dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan perusahaan Property',
                'img'=>'IMG/ronaldo/9.png'
            ],
            [
                'nama'=> 'Fidi School Apps',
                'content'=>'Solusi bagi pihak sekolah dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan sekolah',
                'img'=>'IMG/ronaldo/10.png'
            ],
            [
                'nama'=> 'Fidi Training Center Apps',
                'content'=>'Solusi bagi perusahaan dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan Training Center',
                'img'=>'IMG/ronaldo/11.png'
            ],
            [
                'nama'=> 'Fidi Travel Agency Apps',
                'content'=>'Solusi bagi perusahaan travel agency dalam mengelola informasi yang efektif dan 
                efisien sesuai dengan kebutuhan perusahaan travel agency',
                'img'=>'IMG/ronaldo/12.png'
            ],
            
        ]);
        return view('Page.product',compact('product'));
    }
}
