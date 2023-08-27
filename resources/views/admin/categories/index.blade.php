@extends('theme.default')
    @section('head')
       
    <!-- Custom styles for this page -->
    <link href="{{asset('theme/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    @endsection
 @section('heading')
 عرض التصنيفات
 @endsection

 @section('content')
 <a  class="btn btn-primary" href="{{route('categories.create')}}"><i class="fas fa-plus">اضف تصنيفا جديدا !</i></a>
 <hr>
 <div class="row">
    <div class="col-md-12">
     <table id="books-table" class="table table-striped table-borderd text-right " width="100%" cellspacing="0" >
     <thead>
        <tr>
            <th>العنوان</th>
            <th>الوصف</th>
            <th>خيارات</th>

        </tr>
     </thead>
            <tbody>
            @foreach($categories as $category)
                 <tr>
                    <td >{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a  class="btn btn-info btn-sm" href="{{route('categories.edit' , $category)}}"> <i class="fa fa-edit">تعديل</i></a>
                        <form method="POST" action="{{ route('categories.destroy', $category)}}" class="d-inline-block">
                             @method('delete')
                             @csrf
                             <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل انت متاكد؟')"><i class="fa fa-trash">حذف</i></button>
                        </form>
                    </td>
                 </tr>
            @endforeach
            </tbody>
     </table>  
    </div>
 </div>
 @endsection
 @section('script')
    
    <script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#books-table').DataTable({
                 "language" : {
                    "url":"//cdn.datatables.net/plug-ins/1.13.1/i18n/ar.json"
                 }
            });
        });
    </script>
 @endsection