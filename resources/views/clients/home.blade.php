{{-- gọi tới layout muốn kế thừa --}}
@extends('layouts.client')
{{-- code thao tác với giao diện  --}}
{{-- đặt tên section giống như tên cảu yield đặt ở bên layout --}}

@section('title')
     {{$title}}
@endsection


@section('sidebar')
     {{-- kết thừ từ layout cha và bổ sung thêm thành phần con --}}
     @parent 
     <h3>Home sidebar</h3>
@endsection 

@section('content')
     <h1>Trang chủ</h1>  
@endsection 

@section('js')
    
@endsection