@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')






<h3 class="text-primary text-center">Quizze</h3>



@if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
@endif














<div class="container mt-3">







<a href="{{route('quizzes.create')}}" class="mb-2 btn btn-outline-primary btn-sm">Add New Quizze</a>















<div class="table-responsive">
                        <table id="datatable"  class="table table-hover table-bordered">


                        <thead>
                        <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name Doctor</th>
                                <th>College</th>
                                <th>Classroom</th>
                                <th>Section</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i= 1  ?>
             @foreach($quizzes as $quizze)
                            <tr>
                            <td> {{$i++}} </td>
                      <td>{{$quizze->name}}</td>
                      <td>{{$quizze->doctor->name}}</td>
                      <td>{{$quizze->college->name}}</td>
                      <td>{{$quizze->classroom->name}}</td>
                      <td>                    
                                  <?php
                                 if($quizze->section_id){
                                  echo $quizze->section->name;
                                 }else{
                                echo 'no Section';
                                 }
                                ?>
                            </td>
                
                            <td>
<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Delete_quizze{{ $quizze->id }}" >  <i class="fas fa-trash"></i></button>
<a href="{{route('quizzes.show',$quizze->id)}}" class="mb-2 btn btn-outline-primary btn-sm"><i class="fa-solid fa-circle-question"></i></a>


<a href="{{route('student.quizze',$quizze->id)}}"
                                                       class="btn btn-primary btn-sm" title="عرض الطلاب المختبرين" role="button" aria-pressed="true"><i
                                                            class="fa fa-street-view"></i></a>
@include('Doctor.Quizzes.delete')

                            </td>
                    </tr>
               @endforeach
               </tbody>

</table>

</div>

</div>





@include('footer')