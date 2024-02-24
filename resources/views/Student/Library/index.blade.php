@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')




<div class="container">

<h3 class="text-center text-primary mt-3">My Course</h3>


<table   class="table table-hover table-bordered">


<thead>
<tr>

  <td>#</td>
  <td>Title</td>
  <td>Course</td>
  <td>Doctor</td>
  <td>View</td>
  
</tr>
</thead>

<tbody>

<?php  $i = 0 ; ?>
@foreach($libraries as $library)
<tr>
    <td>{{++$i}}</td>
    <td>{{$library->title}}</td>
    <td>{{$library->course->name}}</td>
    <td>{{$library->doctor->name}}</td>
    <td>
        <a href="{{route('viewcourse',$library->id)}}" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></a>

        <a href="#" title="تحميل الكتاب" class="btn btn-outline-warning" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
    </td>
</tr>

@endforeach

</tbody>



</table>

</div>




@include('footer')
