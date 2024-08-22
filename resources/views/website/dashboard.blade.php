<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Resume Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/themea2/assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{url('/')}}/themea2/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{url('/')}}/themea2/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('/')}}/themea2/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('/')}}/themea2/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper" class="m-20px">

        <div class="container-fluid" style="padding: 40px;">
            @if(isset($message))
           <div class="alert alert-success" role="alert">
            {!! $message !!}
           </div>
           @endif
            <div class="row">
              <form enctype="multipart/form-data" action="" method="post">
                {{csrf_field()}}
                 <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header ">
                            <div class="d-flex align-items-center justify-content-end flex-wrap">
                            <div>    
                            <h4>Make A Stand Out Resume</h4>
                            <p class="card-title-desc">Create a standout resume that highlights your skills, experience, and accomplishments in a clear and concise manner. Use powerful action verbs and quantifiable achievements to demonstrate your impact. Tailor your resume to the specific job you are applying for, ensuring it aligns with the job requirements and company values.</p>
                            </div>
                            <div>
                                <a class="btn btn-danger" type="button" href="{{url('/')}}/logout">Logout</a>
                            </div>
                            </div>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                        <a class="nav-link mb-2 active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">Personal Details</a>

                                        <a class="nav-link mb-2" id="v-pills-education-tab" data-bs-toggle="pill" href="#v-pills-education" role="tab" aria-controls="v-pills-education" aria-selected="false">Education</a>

                                        <a class="nav-link mb-2" id="v-pills-work-tab" data-bs-toggle="pill" href="#v-pills-work" role="tab" aria-controls="v-pills-work" aria-selected="false">Work Experience</a>

                                        <a class="nav-link mb-2" id="v-pills-course-tab" data-bs-toggle="pill" href="#v-pills-course" role="tab" aria-controls="v-pills-course" aria-selected="false">Course</a>

                                        <a class="nav-link  mb-2" id="v-pills-certification-tab" data-bs-toggle="pill" href="#v-pills-certification" role="tab" aria-controls="v-pills-certification" aria-selected="false">Certification</a>

                                        <a class="nav-link mb-2" id="v-pills-skills-tab" data-bs-toggle="pill" href="#v-pills-skills" role="tab" aria-controls="v-pills-skills" aria-selected="false">Skills</a>

                                        <a class="nav-link mb-2" id="v-pills-project-tab" data-bs-toggle="pill" href="#v-pills-project" role="tab" aria-controls="v-pills-project" aria-selected="false">Project</a>

                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-10">
                                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                                        <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h3>Personal Details</h3>
                                                    <div class="row col-md-12">
                                                        <div class="form-group col-md-4 mb-2">
                                                         <label for="name">Enter Your Name  <i class="text-danger" style="font-weight: bolder" >*</i></label>
                                                         <input type="text" name="name"  id="name" class="form-control" placeholder="Enter Your Name" required>
                                                        </div>
                                                        <div class="form-group col-md-4 mb-2">
                                                         <label for="email">Enter Your Email <i class="text-danger" style="font-weight: bolder" >*</i></label>
                                                         <input type="email" name="email"  id="email" class="form-control"  placeholder="Enter Your Email" required>
                                                        </div>
                                                        <div class="form-group col-md-4 mb-2">
                                                         <label for="number">Enter Your Phone Number<i class="text-danger" style="font-weight: bolder" >*</i></label>
                                                         <input type="number" name="number"  id="number" class="form-control"  placeholder="Enter Your Phone Number"  required>
                                                        </div>
                                                        <div class="form-group col-md-4 mb-2">
                                                         <label for="github">Enter Your Github Link </label>
                                                         <input type="text" name="github"  id="github" class="form-control" placeholder="Enter Your Github Link " >
                                                        </div>
                                                        <div class="form-group col-md-4 mb-2">
                                                         <label for="Linkedin">Enter Your Linkdln Profile Link </label>
                                                         <input type="text" name="linkedin"  id="Linkedin" class="form-control" placeholder="Enter Your Linkedin Profile Link">
                                                        </div>
                                                        <div class="form-group col-md-4 mb-2">
                                                         <label for="portfolio">Enter Your Portfolio Link</label>
                                                         <input type="text" name="portfolio"  id="portfolio" class="form-control" placeholder="Enter Your Portfolio Link">
                                                        </div>
                                                        <div class="col-md-6 form-group mb-2">
                                                            <label for="summary"> Enter Profile Summary<i class="text-danger" style="font-weight: bolder" >*</i></label>
                                                            <textarea id="summary" name="summary" class="form-control" rows="5" required></textarea>
                                                        </div>
                                                        <div class="col-md-6 form-group mb-2">
                                                            <div class="row col-md-12 mb-2">
                                                                <label for="position">Enter Current Position</label>
                                                                <input type="text" name="position"  id="position" class="form-control" placeholder="Enter Your Current Position">
                                                           </div>
                                                            <div class="row col-md-12 mb-2">
                                                                <label for="file">Upload Photo</label>
                                                                <input type="file" name="file"  id="file" class="form-control"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 form-group mb-2">
                                                            <label for="address">Enter Your Address <i class="text-danger" style="font-weight: bolder" >*</i></label>
                                                            <input type="text" name="address"  id="address" class="form-control" placeholder="Enter Your Address" required>
                                                        </div>
                                                    </div>
                                                    <button type="button" id="pdbtn" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                      <span class="d-none d-sm-inline-block me-2">Proceed</span><i class="mdi mdi-arrow-right float-end"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h3>Education Details</h3>
                                                    <div id="education-details">
                                                        <!-- Template row, initially hidden -->
                                                        <div class="education-row form-row mb-2  row col-md-12">
                                                            <div class="form-group col-md-4">
                                                                <label for="degree">Select Degree</label>
                                                                <select name="degree[]" id="degree1" class="form-select" >
                                                                    <option value="" selected>---select---</option>
                                                                    <option value="B.tech">B.tech</option>
                                                                    <option value="BCA">BCA</option>
                                                                    <option value="M.tech">M.tech</option>
                                                                    <option value="MCA">MCA</option>
                                                                    <option value="ITM">ITM</option>
                                                                    <option value="Bsc">B.sc</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="st_name">Stream Name</label>
                                                                <input type="text" name="st_name[]" id="st_name1" class="form-control" placeholder="Stream Name" >
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="ul_name">University / College Name</label>
                                                                <input type="text" name="ul_name[]" id="ul_name1" class="form-control" placeholder="University or College Name" >
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cldate">From Date</label>
                                                                <input type="date" name="cldate[]"id="cldate1" class="form-control" >
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cltodate">To Date</label>
                                                                <input type="date" name="cltodate[]" id="cltodate1" class="form-control" >
                                                            </div>
                                                            <div class="form-group col-md-4 mt-4">
                                                                <button class=" btn btn-icon btn-outline-primary add-row" type="button"><span class="tf-icons bx bx-plus"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" id="cdback" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                        <span class="d-none d-sm-inline-block me-2">Back</span>
                                                        <i class="mdi mdi-arrow-left float-start"></i>
                                                    </button>
                                                    <button type="button" id="pdbtn1" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                      <span class="d-none d-sm-inline-block me-2">Proceed</span><i class="mdi mdi-arrow-right float-end"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-work" role="tabpanel" aria-labelledby="v-pills-work-tab">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h3>Work Experience Details</h3>
                                                    
                                                    <div id="experience-details">
                                                        <div class="experience-row form-row mb-2  row col-md-12">
                                                         <div class="form-group col-md-6 mb-2">
                                                             <label for="organizationname">Organization Name </label>
                                                             <input type="text" name="organizationname[]"  id="organizationname1" class="form-control" placeholder="Organization Name">
                                                         </div>
                                                         <div class="form-group col-md-6 mb-2">
                                                             <label for="or_address"> Organization Address</label>
                                                             <input type="text" name="or_address[]"  id="or_address1" class="form-control"  placeholder="Organization Address">
                                                         </div>
                                                         <div class="form-group col-md-6 mb-2">
                                                             <label for="oldate">From Date</label>
                                                             <input type="date" name="oldate[]"  id="oldate1" class="form-control"  >
                                                         </div>
                                                         <div class="form-group col-md-6 mb-2">
                                                             <label for="oltodate">To date</label>
                                                             <input type="date" name="oltodate[]"  id="oltodate1" class="form-control" >
                                                         </div>
                                                         <div class="form-group col-md-6 mb-2">
                                                             <label for="role">Your Role</label>
                                                             <input type="text" name="role[]"  id="role1" class="form-control"placeholder="Your Role" >
                                                         </div>
                                                         <div class="col-md-6 form-group mb-2">
                                                            <label for="work_description"> Work Description </label>
                                                            <textarea id="work_description1" name="work_description[]" class="form-control" rows="5"></textarea>
                                                        </div>
                                                        <div class="form-group col-md-3 mt-4">
                                                            <button class=" btn btn-icon btn-outline-primary add-row1" type="button"><span class="tf-icons bx bx-plus"></span></button>
                                                        </div>

                                                    </div>
                                                </div> 

                                                <button type="button" id="cdback1" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                    <span class="d-none d-sm-inline-block me-2">Back</span>
                                                    <i class="mdi mdi-arrow-left float-start"></i>
                                                </button>
                                                <button type="button" id="pdbtn2" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                  <span class="d-none d-sm-inline-block me-2">Proceed</span><i class="mdi mdi-arrow-right float-end"></i>
                                                 </button>
                                          </div>
                                        </div>
                                    </div>


                                        <div class="tab-pane fade" id="v-pills-course" role="tabpanel" aria-labelledby="v-pills-course-tab">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h3>Course Details</h3>
                                                    <div id="course-details">
                                                        <div class="course-row form-row mb-2 row col-md-12">
                                                            <div class="form-group col-md-6 mb-2">
                                                         <label for="coursename">Course Name </label>
                                                         <input type="text" name="coursename[]"  id="coursename1" class="form-control" placeholder="Course Name">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                         <label for="course_u_i_name">Univercity / Institute Name</label>
                                                         <input type="text" name="course_u_i_name[]"  id="course_u_i_name1" class="form-control"  placeholder="Univercity / Institute Name">
                                                        </div>
                                                        <div class="col-md-12 form-group mb-2">
                                                            <label for="course_description"> Course Details </label>
                                                            <textarea id="course_description1" name="course_description[]" class="form-control" rows="5"></textarea>
                                                        </div>
                                                        <div class="form-group col-md-3 mt-4">
                                                         <button class=" btn btn-icon btn-outline-primary add-row2" type="button"><span class="tf-icons bx bx-plus"></span></button>
                                                        </div>

                                                        </div> 
                                                    </div>  
                                                     <button type="button" id="cdback2" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                       <span class="d-none d-sm-inline-block me-2">Back</span>
                                                       <i class="mdi mdi-arrow-left float-start"></i>
                                                    </button>
                                                    <button type="button" id="pdbtn3" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                      <span class="d-none d-sm-inline-block me-2">Proceed</span><i class="mdi mdi-arrow-right float-end"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-certification" role="tabpanel" aria-labelledby="v-pills-certification-tab">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h3>Certification Details</h3>
                                                    <div id="certification-details">
                                                        <div class="certification-row form-row mb-2  row col-md-12">

                                                             <div class="form-group col-md-6 mb-2">
                                                         <label for="certificationname">Certification Name </label>
                                                         <input type="text" name="certificationname[]"  id="certificationname1" class="form-control" placeholder="Certification Name">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                         <label for="certification_u_i_name"> Univercity / Institute Name</label>
                                                         <input type="text" name="certification_u_i_name[]"  id="certification_u_i_name1" class="form-control"  placeholder="Univercity / Institute Name">
                                                        </div>
                                                        <div class="col-md-12 form-group mb-2">
                                                            <label for="certification_description"> Certification Details </label>
                                                            <textarea id="certification_description1" name="certification_description[]" class="form-control" rows="5"></textarea>
                                                        </div>
                                                        <div class="form-group col-md-3 mt-4">
                                                          <button class=" btn btn-icon btn-outline-primary add-row3" type="button"><span class="tf-icons bx bx-plus"></span></button>
                                                        </div>

                                                        </div>
                                                    </div>       

                                                    <button type="button" id="cdback3" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                            <span class="d-none d-sm-inline-block me-2">Back</span>
                                                            <i class="mdi mdi-arrow-left float-start"></i>
                                                    </button>
                                                    <button type="button" id="pdbtn4" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                      <span class="d-none d-sm-inline-block me-2">Proceed</span><i class="mdi mdi-arrow-right float-end"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-skills" role="tabpanel" aria-labelledby="v-pills-skills-tab">
                                          <div class="card mb-3">
                                            <div class="card-body">
                                                <h3>Skills Details</h3>
                                                <div id="skills-details">
                                                    <div class="skills-row form-row mb-2 row col-md-12">

                                                        <div class="form-group col-md-4 mb-2">
                                                           <label for="skillname">Add Skill </label>
                                                           <input type="text" name="skillname[]"  id="skillname1" class="form-control" placeholder="Add  Skill">
                                                       </div>
                                                       <div class="form-group col-md-3 mt-4">
                                                                <button class="btn btn-icon btn-outline-primary add-row4" type="button"><span class="tf-icons bx bx-plus"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                             <button type="button" id="cdback4" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                <span class="d-none d-sm-inline-block me-2">Back</span>
                                                <i class="mdi mdi-arrow-left float-start"></i>
                                               </button>
                                              <button type="button" id="pdbtn5" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                              <span class="d-none d-sm-inline-block me-2">Proceed</span><i class="mdi mdi-arrow-right float-end"></i>
                                              </button>
                                            </div>
                                         </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-project" role="tabpanel" aria-labelledby="v-pills-project-tab">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h3>Project Details</h3>
                                                    <div id="project-details">
                                                        <div class="project-row form-row mb-2 row col-md-12">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="projectname">Project Name </label>
                                                                <input type="text" name="projectname[]" class="form-control" placeholder="Project Name">
                                                            </div>
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="project_g_d_link">Github / Domain Link</label>
                                                                <input type="text" name="project_g_d_link[]" class="form-control" placeholder="Github / Domain Link">
                                                            </div>
                                                            <div class="col-md-12 form-group mb-2">
                                                                <label for="project_description"> Project Description </label>
                                                                <textarea name="project_description[]" class="form-control" rows="5"></textarea>
                                                            </div>
                                                            <div class="form-group col-md-3 mb-2">
                                                                <button class="btn btn-icon btn-outline-primary add-row5" type="button"><span class="tf-icons bx bx-plus"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" id="cdback5" class="btn btn-primary chat-send w-md waves-effect waves-light">
                                                        <span class="d-none d-sm-inline-block me-2">Back</span>
                                                        <i class="mdi mdi-arrow-left float-start"></i>
                                                    </button>
                                                    <button type="submit" class="btn btn-success chat-send w-md waves-effect waves-light">
                                                        <span class="d-none d-sm-inline-block me-2">Submit</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--  end col -->
                            </div><!-- end row -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                 </div>
               </form>
            </div>   
        </div>
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{url('/')}}/themea2/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/themea2/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/themea2/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{url('/')}}/themea2/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{url('/')}}/themea2/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{url('/')}}/themea2/assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="{{url('/')}}/themea2/assets/libs/pace-js/pace.min.js"></script>

    <script src="{{url('/')}}/themea2/assets/js/app.js"></script>
    <script>
    $(document).ready(function(){
        $('#pdbtn').click(function(){
        var activeTab = $('.nav-link.active').attr('href');
        var isValid = true;
        var errorMessage = "";

        $(activeTab + ' input[required], ' + activeTab + ' textarea[required]').each(function() {
            if ($.trim($(this).val()) === '') {
                isValid = false;
                var labelText = $(this).prev('label').text().replace('*', '').trim(); // Get the label text without the asterisk
                errorMessage += labelText + " is required.\n";
            }
        });

        if (!isValid) {
            alert("Please fill out the following fields:\n" + errorMessage);
            return false; 
        }
        $('#v-pills-education-tab').tab('show'); 
        });

        $('#pdbtn1').click(function(){

            $('#v-pills-work-tab').tab('show'); 
        });

        $('#pdbtn2').click(function(){
            $('#v-pills-course-tab').tab('show'); 
        });
        $('#pdbtn3').click(function(){
            $('#v-pills-certification-tab').tab('show'); 
        });
        $('#pdbtn4').click(function(){
            $('#v-pills-skills-tab').tab('show'); 
        });
        $('#pdbtn5').click(function(){
            $('#v-pills-project-tab').tab('show'); 
        });
        
        $('#cdback').click(function(){
            $('#v-pills-personal-tab').tab('show'); 
        });
        $('#cdback1').click(function(){
            $('#v-pills-education-tab').tab('show'); 
        });
        $('#cdback2').click(function(){
            $('#v-pills-work-tab').tab('show'); 
        });
         $('#cdback3').click(function(){
            $('#v-pills-course-tab').tab('show'); 
        });
         $('#cdback4').click(function(){
            $('#v-pills-certification-tab').tab('show'); 
        });
       $('#cdback5').click(function(){
            $('#v-pills-skills-tab').tab('show'); 
        });
    });
</script>
<script>
    $(document).ready(function(){

    $(document).on('click', '.add-row', function() {
        var $lastRow = $('#education-details .education-row').last();
        var $newRow = $lastRow.clone();

                
        $newRow.find('input, textarea, select').val('');
        $('#education-details').append($newRow);
       
        $newRow.find('.btn-outline-primary')
        .removeClass('add-row')
        .addClass('remove-row1')
        .html('<span class="tf-icons bx bx-minus"></span>');
    });

    // Remove row
    $(document).on('click', '.remove-row1', function() {
        if ($('#education-details .education-row').length > 1) {
            $(this).closest('.education-row').remove();
        } else {
            alert('You must have at least one row.');
        }
    });

    $(document).on('click', '.add-row1', function() {
        var $lastRow = $('#experience-details .experience-row').last();
        var $newRow = $lastRow.clone();

                
        $newRow.find('input, textarea').val('');
        $('#experience-details').append($newRow);
       
        $newRow.find('.btn-outline-primary')
        .removeClass('add-row1')
        .addClass('remove-row2')
        .html('<span class="tf-icons bx bx-minus"></span>');
    });

    $(document).on('click', '.remove-row2', function() {
        if ($('#experience-details .experience-row').length > 1) {
            $(this).closest('.experience-row').remove();
        } else {
            alert('You must have at least one row.');
        }
    });

    $(document).on('click', '.add-row2', function() {
        var $lastRow = $('#course-details .course-row').last();
        var $newRow = $lastRow.clone();

                
        $newRow.find('input, textarea').val('');
        $('#course-details').append($newRow);
       
        $newRow.find('.btn-outline-primary')
        .removeClass('add-row2')
        .addClass('remove-row3')
        .html('<span class="tf-icons bx bx-minus"></span>');
    });

    $(document).on('click', '.remove-row3', function() {
        if ($('#course-details .course-row').length > 1) {
            $(this).closest('.course-row').remove();
        } else {
            alert('You must have at least one row.');
        }
    });

    $(document).on('click', '.add-row3', function() {
         var $lastRow = $('#certification-details .certification-row').last();
        var $newRow = $lastRow.clone();

                
        $newRow.find('input, textarea').val('');
        $('#certification-details').append($newRow);
       
        $newRow.find('.btn-outline-primary')
        .removeClass('add-row3')
        .addClass('remove-row4')
        .html('<span class="tf-icons bx bx-minus"></span>');
    });

    $(document).on('click', '.remove-row4', function() {
        if ($('#certification-details .certification-row').length > 1) {
            $(this).closest('.certification-row').remove();
        } else {
            alert('You must have at least one row.');
        }
    });



    $(document).on('click', '.add-row4', function() {
        var $lastRow = $('#skills-details .skills-row').last();
        var $newRow = $lastRow.clone();

                
        $newRow.find('input, textarea').val('');
        $('#skills-details').append($newRow);
       
        $newRow.find('.btn-outline-primary')
        .removeClass('add-row4')
        .addClass('remove-row5')
        .html('<span class="tf-icons bx bx-minus"></span>');
    });

    $(document).on('click', '.remove-row5', function() {
        if ($('#skills-details .skills-row').length > 1) {
            $(this).closest('.skills-row').remove();
        } else {
            alert('You must have at least one row.');
        }
    });




    $(document).on('click', '.add-row5', function() {
        var $lastRow = $('#project-details .project-row').last();
        var $newRow = $lastRow.clone();

              
        $newRow.find('input, textarea').val('');
        $('#project-details').append($newRow);

                
        $newRow.find('.btn-outline-primary')
        .removeClass('add-row5')
        .addClass('remove-row6')
        .html('<span class="tf-icons bx bx-minus"></span>');
    });

    $(document).on('click', '.remove-row6', function() {
        if ($('#project-details .project-row').length > 1) {
            $(this).closest('.project-row').remove();
        } else {
            alert('You must have at least one row.');
        }
    });


    });
</script>

</body>
</html>
