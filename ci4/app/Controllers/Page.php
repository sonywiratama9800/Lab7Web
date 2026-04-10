<?php

namespace App\Controllers;


class Page extends BaseController
{
   public function about()
    {
        return view ('about', [
            'title' => 'halaman about',
            'content' =>'ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
         ]);
    }

    public function contact()
    {
        echo "ini halaman contact";
    }

    public function faqs()
    {
        echo "ini halaman faqs";
    }

     public function tos()
    {
        echo "ini halaman terms of Sevices";
    }
}
