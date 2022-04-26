<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
          $title = 'Trang chủ';
          $content = "đặt hàng thành công";
          return view('clients.home', compact('title', 'content'));
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
          // validate($rules , $message )
          // $rules là 1 array trong đó key là các input-name và value là các rule mà chúng ta muốn ràng buộc
          // $message là 1 array nếu ko điền thì nó sẽ tự hiện thông báo mặc định 
          $request->validate([
                    'product-name' => 'required | min:6 | integer'
          ] , 
          [
               'product-name.required' => ':attribute bắt buộc phải nhập ',
               'product-name.min' => 'dữ liệu không được nhỏ hơn :min ký tự ',

          ]);
     
         // khi validate thành công thì sẽ cho dữ liệu vào database .....
         // các công việc khi validate thành công 
          
     } 

     public function putadd(Request $request){
          dd($request);
          
     } 

     public function getArray(){
          // 
          $arrayContent = [
               'name '=> 'laravel 8x',
               'lession' => 'khóa học lập trình laravel unicode',
          ];
               return $arrayContent;
     }

     public function dowloadImg(Request $request){
          if(!empty($request->img)){
               $img = trim($request->img);
               // dd($request->img);
               // khi sử dụng link ảnh từ bên ngoài k trong nội bộ thì chúng ta sử dụng hàm streamDownload
               // hàm này sẽ có 2 tham số 1 tham số là hàm ẩn danh , tham số còn lại là tên file chúng ta muốn đặt khi chúng ta download về máy

               // tạo ra tên ngẫu nhiên để đặt cho tên file khi tải về
               // $fileName = 'img_' . uniqid() . '.jpg';

               // giữ nguyên tên file tải về để lưu luôn vào máy
               $baseName = basename($img) ;
               // return response()->streamDownload(function() use ($img) {
               //      // đọc file 
               //      $imgContent = file_get_contents($img);

               //      echo $imgContent;
               // },$baseName);
               
               // khi chúng ta muốn định dạng type tải về thì bổ sung thêm $headers 
               $headers = [
                    'Content-Type' => 'application/pdf'
               ];
               // nếu ảnh trong nội bộ thì mới sử dụng hàm dowload 
               return response()->download($img , $baseName, $headers);
          }
     }
}
