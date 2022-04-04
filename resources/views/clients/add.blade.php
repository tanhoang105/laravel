  {{-- gọi tới layout muốn kế thừa --}}
@extends('layouts.client')
{{-- code thao tác với giao diện  --}}
{{-- đặt tên section giống như tên cảu yield đặt ở bên layout --}}

@section('title')
     {{$title}}
@endsection


@section('sidebar')
     {{-- kết thừ từ layout cha và bổ sung thêm thành phần con --}}
    
     <h3>Thêm sản phẩm</h3>
@endsection 

@section('content')
    <form action="" method="post">
         <div class="form-group">
           <label for="">Tên sản phẩm</label>
           {{-- <input type="hidden"name="_token" value="{{csrf_token}}" > --}}
           @csrf
           @method('PUT')
           <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
         </div>
         <br>
         <button class="btn btn-success">Thêm</button>
    </form>
@endsection 

@section('js')
    
@endsection