@extends('theme.default')
    @section('head')
       
    <!-- Custom styles for this page -->
    <link href="{{asset('theme/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    @endsection
 @section('heading')
 عرض المستخدمسن
 @endsection

 @section('content')
 
 <div class="row">
    <div class="col-md-12">
     <table id="books-table" class="table table-striped table-borderd text-right " width="100%" cellspacing="0" >
     <thead>
        <tr>
            <th>العنوان</th>
            <th>البريد الالكتروني</th>
            <th>نوع المستخدم </th>
            <th>خيارات</th>

        </tr>
     </thead>
            <tbody>
             @foreach ($users as $user)
             <tr>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->isSuperAdmin()?'مدير عام':($user->isAdmin()? 'مستخدم':'مدير')}}</td>
               <td>
                  <form  class="ml-4 form-inline" method="POST" action="{{route('users.update' , $user)}}" style="display:inline-block">
                        @method('patch')
                        @csrf
                        <select class="form-control form-control-sm" name="adminstration_level" >
                             <option  selected disabled>اختر نوعا</option>
                             <option value="0 ">مستخدم</option>
                             <option value="1">مدير</option>
                             <option value="2">مدير عام </option>
                        </select>
                        <button type="submit" class="btn btn-info btn-sm"> <i class="fa fa-edit">تعديل</i></button>
                  </form>

                  <form  method="POST" action="{{route('users.destroy' , $user)}}" style="display:inline-block">
                  @method('delete')
                  @csrf
                  @if(auth()->user()!=$user)
                        <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('هل انت متاكد؟')"><i class="fa fa-trash"></i>حذف</button>
                  @else
                   <div class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i>حذف </div>
                  @endif
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