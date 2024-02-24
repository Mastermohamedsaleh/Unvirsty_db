@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')







<div class="container">




<h3 class="text-center text-primary">Update Course</h3>


 
@if ($errors->any())
                    <div class="alert alert-danger" style="width:500px;   margin: 0 auto ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:500px;   margin: 0 auto ">{{ Session::get('message') }}</p>
@endif



<div class="card">



<div class="card-body">



<form action="{{route('course.update',$course->id)}}" method="post">

@csrf
@method('PUT')
<div class="row">




<div class="col">

<label>Name: <span class="text-danger">*</span> </label>

<input type="text" name="name" value="{{$course->name}}">
<!-- end col -->
</div>


<div class="col-4">


<label>Collge: <span class="text-danger">*</span> </label>

<select name="college_id" >
<option value="" >Choose College</option>
@foreach($colleges as $college)
<option value="{{$college->id}}" >{{$college->name}}</option>
@endforeach
</select>



<!-- end col -->
</div>
<div class="col-4">


<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id" >
       
 </select>



<!-- end col -->
</div>
<div class="col-4">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" >
 
</select>




<!-- end col -->
</div>




<div class="col-6">


<label>Doctor: <span class="text-danger">*</span> </label>


<select name="doctor_id" >
    <option value="" >Choose Doctor</option>
@foreach($doctors as $doctor)
  <option value="{{$doctor->id}}" {{$doctor->id == $course->doctor_id ? 'selected':"" }}>{{$doctor->name}}</option>
@endforeach
</select>


<!-- end col -->
</div>




<div class="col">


<div style="margin:auto">
<button type="submit" class="btn btn-primary mt-4" >Update</button>
</div>

<!-- end col -->
</div>





<!-- end row -->
</div>

</form>



<!-- end card body -->
</div>








<!-- end card -->
</div>















<!-- end Container -->
</div>








 @include('footer')