@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')










<div class="container mt-5">

<form action="{{route('quizzes.store')}}" method="post" autocomplete="off">

@csrf


<div class="row">


<legend><span class="number">1</span> Write basic info</legend>

<div class="col-6">

<label > Name Quizze : <span class="text-danger">*</span></label>

<input type="text" name="name" >

</div>
<div class="col">
                                        <div class="form-group">
                                            <label > Subject : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="subject_id">
                                                <option selected disabled>Choose Subject  ...</option>
                                                @foreach($subjects as $subject)
                                                    <option  value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                @endforeach
                                            </select>
                </div>
        </div>






        <div class="col-12">



        <div class="form-group">
           <label > College : <span class="text-danger">*</span></label>
           <select class="custom-select mr-sm-2" name="college_id">
               <option selected disabled>Choose College...</option>
               @foreach($colleges as $college)
                   <option  value="{{ $college->id }}">{{ $college->name }}</option>
               @endforeach
              </select>

        </div>
</div>



<div class="col">
                                        <div class="form-group">
                                        <label for="classroom_id">classrooms : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="classroom_id">
                                       </select>
                                   </div>
                              </div>
                              <div class="col">
                                       <div class="form-group">
                                            <label for="section_id">section : </label>
                                            <select class="custom-select mr-sm-2" name="section_id">

                                            </select>
                                        </div>
                                    </div>






</div>




<button type="submit" class="btn btn-success">Save</button>

</form>








</div>








@include('footer')