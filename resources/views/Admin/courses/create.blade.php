@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')


 <h3 class="text-primary text-center">Add Course</h3>


 <div class="container mt-5">

 <div class="card">

<div class="card-body">




 
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


<form action="{{route('course.store')}}" method="post">

@csrf
 <div class="row">





 <div class="col-4">
    <label>Collge: <span class="text-danger">*</span> </label>

    <select name="college_id" >
    <option value="" >Choose College</option>
@foreach($colleges as $college)
  <option value="{{$college->id}}">{{$college->name}}</option>
@endforeach
</select>

    </div>



    

    <div class="col-4">


    <div class="form-group">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id" >
 <option value="" disabled>Choose Classroom</option>
       
 </select>


</div> 
    

    </div>

    <div class="col-4">

    <div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" >
        <option value="" disabled>Choose Classroom</option>
 
 </select>


</div>
    </div>


<hr class="mt-3">



<div class="create" id="create"></div>
       
      



<!-- end Row -->

</div>



<a href="javascript:void(0)" class="btn btn-danger addrow mt-3" id="addrow">+</a>



<button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
</form>
<!-- end card-body -->


</div>

<!-- end card -->

</div>

 <!-- end container -->
 </div>


 @include('footer')

<script>
$(document).ready(function(){
  $(".addrow").click(function(){
    var row = `
    <div class="row mt-2">
    <div class="col">
    <input type="text" name="name[]" >
    </div>
    <div class="col">
    <select name="doctor_id[]" >
    <option value="" >Choose Doctor</option>
@foreach($doctors as $doctor)
  <option value="{{$doctor->id}}">{{$doctor->name}}</option>
@endforeach
</select>

    </div>
    <div class="col">
    <a hreg="javascript:void(0)" class="btn btn-danger deleteRow" >-</a>
    </div>
    </div>
      `
     $('.create').append(row);

     $(".deleteRow").click(function(){

      $(this).parent().parent().remove();
           
     });


  });
});
</script>
