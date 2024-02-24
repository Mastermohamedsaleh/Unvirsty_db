@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')



<div class="container mt-5">





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

<form action="{{route('questions.store')}}" method="post" autocomplete="off">




@csrf


<div class="row">



<legend><span class="number">1</span> Write New Question</legend>


<div class="col-12">
<label for="title">Name Question </label>
    <input type="text" name="title" id="input-name" autofocus>
    <input type="hidden" value="{{$quizz_id}}" name="quizz_id">
</div>


<div class="col-12">
<label for="title">Answers</label>
                                        <textarea name="answers"  id="exampleFormControlTextarea1"
                                                  rows="4"></textarea>
</div>




<div class="col-6">
      <label for="title"> Right Answer</label>
      <input type="text" name="right_answer" id="input-name"
            autofocus>
</div>











<div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">الدرجة : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="score">
                                                <option selected disabled> حدد الدرجة...</option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                        </div>
                                    </div>









</div>



<button type="submit" class="btn btn-success">Save</button>



</form>


</div>



@include('footer')
