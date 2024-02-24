  
      <aside id="sidebar" class="js-sidebar"><!-- side bar content-->
        <div class="h-100">
            <div class="sidebar-logo">
            <a class="navbar-brand ms-4" href="#"
          ><img
            src="{{ URL::asset('Assets/images/logo2.png') }}" 
            alt="Smart Academy logo"
            class="w-75 h-75"
        /></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Admin elements
                </li>


                <li class="sidebar-item">
                    <a href="{{url('dashboard/admin')}}" class="sidebar-link"><i class="fa-solid fa-list"></i>Dashboard</a>
                </li>

                @if(auth()->user()->status == 0)

                <li class="sidebar-item">
                    <a href="{{route('admins.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-lock"></i>Admins</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('colleges.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-building-columns"></i>Colleges</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('classrooms.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0"  class="fa-solid fa-graduation-cap"></i>Classroom</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('sections.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-section"></i>Sections</a>
                </li>
            
    


                <li class="sidebar-item">
                    <a href="{{url('adminprofile')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-user"></i>MyProfile </a>
                </li>

              <li class="sidebar-item">
                    <a href="{{url('setting')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-gears"></i>Setting</a>
                </li>
      @else


                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-graduation-cap"></i> Students <i class="fa-solid fa-chevron-down float-end"></i> </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{route('students.index')}}" class="sidebar-link">All Student</a>
                            <a href="{{route('students.create')}}" class="sidebar-link">Add Student</a>
                            <a href="{{route('promotion.create')}}" class="sidebar-link">Promotion Students</a>
                            <a href="{{route('promotion.index')}}" class="sidebar-link">Mangment Promotion Students</a>
                            <a href="{{route('graduated.index')}}" class="sidebar-link">Graduated Students</a>
                            <a href="{{route('graduated.create')}}" class="sidebar-link">Add Graduated Students</a>
                        </li>
                    </ul>
                </li>



              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-person-chalkboard"></i> Doctors <i class="fa-solid fa-chevron-down float-end"></i></a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{route('doctors.index')}}" class="sidebar-link">All Doctors</a>
                          <a href="{{route('doctors.create')}}" class="sidebar-link">Add Doctor</a>
                          <a href="{{route('doctors_college.index')}}" class="sidebar-link">Doctor With College</a>
                      </li>
                  </ul>
              </li>
        


              <li class="sidebar-item">
                    <a href="{{route('course.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-section"></i>Course</a>
                </li>
  
                <!-- <li class="sidebar-item">
                    <a href="" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-clipboard-user"></i></a>
                </li> -->



                
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#Schedule" data-bs-toggle="collapse" area-expanded="false"><i style="padding: 0 10px 0  0" class="fa-solid fa-clipboard-user"></i> Schedule <i class="fa-solid fa-chevron-down float-end"></i></a>
                  <ul id="Schedule" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                       <a href="{{route('studyschedule.index')}}" class="sidebar-link"> StudySchedule</a>  
                       <a href="{{route('examsschedule.index')}}" class="sidebar-link"> ExamSchedule</a>              
                      </li>
                  </ul>
              </li>


                <li class="sidebar-item">
                    <a href="{{url('adminprofile')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-user"></i>MyProfile </a>
                </li>
        

         @endif



                   




            </ul>
        </div>    
    </aside>