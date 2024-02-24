
<!-- Modal -->
<div class="modal fade" id="editsection{{$section->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Section</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('sections.update',$section->id)}}" autocomplete="off" >
      @method('PUT')
      @csrf

      <div class="row">
      <div class="col-6">
      <div class="form-group">
        <label>Name: </label>
        <input type="text"  value="{{$section->name}}" name="name" class="form-control" >
        </div>
      </div>

     
  <input type="hidden" name="id" value="{{$section->id}}">
  <input type="hidden" id="college_id" name="college_id" value="{{$section->college_id}}">

      <div class="col-6">
      <label>Classroom: </label>
               <select name="classroom_id" class="form-select">
               <option value="" disable>Choose Classroom</option>
                       @foreach($classrooms as $classroom) 
             
                       <option value="{{$classroom->id}}" {{ $classroom->id == $section->classroom_id ? 'selected' : '' }} >{{$classroom->name}}</option>
                       @endforeach
               </select>
      </div>





      <div class="col">


<label>Status: </label>
<select name="status" class="form-select">
<option value="" disable>Choose Status</option>
<option value="1" >able</option>
<option value="0" >Disable</option>
</select>
 

</div>




      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary button-mode" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary button-mode">Udpate</button>
      </div>
      </form>
    </div>
  </div>
</div>









        

              