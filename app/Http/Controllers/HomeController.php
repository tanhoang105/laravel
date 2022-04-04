<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
          $title = 'Trang chủ';
          return view('clients.home', compact('title'));
     }

     public function products(){
          $title = 'Sản phẩm';
          return view('clients.products', compact('title'));
     }

     public function getadd(){
          $title = 'Thêm sản phẩm';
          $data =  '';
          return view('clients.add' , compact('title'));
     }

     public function postadd(Request $request){
          dd($request);
          
     } 

     public function putadd(Request $request){
          dd($request);
          
     } 
}
