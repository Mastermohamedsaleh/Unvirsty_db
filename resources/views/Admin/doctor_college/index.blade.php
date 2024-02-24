@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')




<div class="container mt-3">
 
<a href="{{route('doctors_college.create')}}" class="mb-2 btn btn-outline-primary btn-sm">Add doctor to class</a>





<div class="card">


<div class="card-body">




<table id="datatable" class="table table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">


                                           <tr>
                                                   <th>#</th>
                                                   <th>name Doctor</th>
                                                   <th>Email Doctor</th>
                                                   <th>View</th>
                                           </tr>
                                          <?php    $i = 0 ; ?>
                                       @foreach($doctors as $doctor)
                                           <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$doctor->name}}</td>
                                            <td>{{$doctor->email}}</td>
                                            <td>
<a href="{{route('doctors_college.show',$doctor->id)}}" class="mb-2 btn btn-outline-success btn-sm"> <i class="fa-solid fa-eye"></i></a>

                                            </td>
                                           </tr>
                                    @endforeach


                                           <table>





</div>








</div>






 </div>
 







 @include('footer')
