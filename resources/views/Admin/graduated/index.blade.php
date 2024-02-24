@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')



 <h3 class="text-center text-primary mt-3">Graduated Student</h3>


 <div class="container">


 <div class="card">


 <div class="card-body">




 <div class="table-responsive">
                        <table id="datatable"  class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>College</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                                   
                            @foreach($students as  $student)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->college->name }}</td>
                                    <td>
                              


               

<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#Return_Student{{ $student->id }}" >ارجاع الطالب</button>
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Delete_Student{{ $student->id }}" >حذف الطالب</button>

@include('Admin.graduated.Delete_Student')
@include('Admin.graduated.Return_Student')


                                    </td>

                                        </div>

                                    </td>
                                </tr>
@endforeach


</table>


</div>

</div>


 </div>

 </div>





















 @include('footer')