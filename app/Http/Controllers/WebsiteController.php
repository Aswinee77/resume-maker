<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Detail;
use App\Models\Certification;
use App\Models\Course;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;

use Session;
use Crypt;

class WebsiteController extends Controller
{
  public function login(Request $request){
     $message=null;
        if(isset($request->username)){
         $is_valid=User::where("user_name",$request->username)->where('password',$request->password)->count();
            if($is_valid > 0){
                Session::put('user',$request->username);
                $data=User::where("user_name",$request->username)->where('password',$request->password)->first();
                return redirect('dashboard');  
            }else{
                $message = "Invalid Login  credential";
            }
        }
    return view('website.login',compact('message'));
  }

  public function register(Request $request){

     $message=null;
     if(isset($request->username)){
       $request->validate([
            'username' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ],
        [ 
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 digit or characters.',
            ]);
       $add= new User();
       $add->user_name=trim($request->username);
       $add->password=trim($request->password);
       $add->save();
       $message=" Registertation Successful You can  Login Now !";
       return redirect('/')->with('message', $message);
     } 
    return view('website.register');
  }

  public function dashboard(Request $request){
    if(Session::get('user') == '' || Session::get('user') == null){
        return redirect('/');
    }
    $message=null;
    $user=User::where('user_name',Session::get('user'))->first();
    $user_id=$user->id;
    if(isset($request->name)){

        if(isset($request->file)){
            $_FILES['file']['name'] = time().$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], public_path()."/uploads/".$_FILES['file']['name']);
        }

       
        $add=new Detail();
        $add->user_id=$user_id;
        $add->name=trim($request->name);
        $add->email=trim($request->email);
        $add->phone_number=trim($request->number);
        $add->github_link=trim($request->github);
        $add->linkdln_link=trim($request->linkedin);
        $add->portfolio_link=trim($request->portfolio);
        $add->summary=trim($request->summary);
        $add->current_position=trim($request->position);
        $add->address=trim($request->address);
        $add->photo=@$_FILES['file']['name'];
        $add->save();

         /////education/////
        $degrees = $request->degree;
        $st_names = $request->st_name;
        $ul_names = $request->ul_name;
        $cldates = $request->cldate;
        $cltodates = $request->cltodate;
        ///////////////////////////////////

        for ($i = 0; $i < count($degrees); $i++) {
          
          $add=new Education();
          $add->user_id=$user_id;
          $add->degree_name=$degrees[$i];
          $add->stream_name=$st_names[$i];
          $add->uni_col_name=$ul_names[$i];
          $add->from_date=$cldates[$i];
          $add->to_date=$cltodates[$i];
          $add->save();
        }

        // Save work experience details
        $organizationnames = $request->organizationname;
        $or_addresses = $request->or_address;
        $oldates = $request->oldate;
        $oltodates = $request->oltodate;
        $roles = $request->role;
        $work_descriptions = $request->work_description;

        for ($i = 0; $i < count($organizationnames); $i++) {
            $experience = new Experience();
            $experience->user_id = $user_id;
            $experience->organization_name = $organizationnames[$i];
            $experience->organization_address = $or_addresses[$i];
            $experience->from_date = $oldates[$i];
            $experience->to_date = $oltodates[$i];
            $experience->role = $roles[$i];
            $experience->description = $work_descriptions[$i];
            $experience->save();
        }

        // Save course details
        $coursenames = $request->coursename;
        $course_u_i_names = $request->course_u_i_name;
        $course_descriptions = $request->course_description;

        for ($i = 0; $i < count($coursenames); $i++) {
            $course = new Course();
            $course->user_id = $user_id;
            $course->course_name = $coursenames[$i];
            $course->uni_address= $course_u_i_names[$i];
            $course->details = $course_descriptions[$i];
            $course->save();
        }


        // Save certification details
        $certificationnames = $request->certificationname;
        $certification_u_i_names = $request->certification_u_i_name;
        $certification_descriptions = $request->certification_description;

        for ($i = 0; $i < count($certificationnames); $i++) {
            $certification = new Certification();
            $certification->user_id = $user_id;
            $certification->certification_name = $certificationnames[$i];
            $certification->u_address = $certification_u_i_names[$i];
            $certification->c_details = $certification_descriptions[$i];
            $certification->save();
        }

        // Save skills details
        $skillnames = $request->skillname;

        for ($i = 0; $i < count($skillnames); $i++) {
            $skill = new Skill();
            $skill->user_id = $user_id;
            $skill->skill_name = $skillnames[$i];
            $skill->save();
        }

        // Save project details
        $projectnames = $request->projectname;
        $project_g_d_links = $request->project_g_d_link;
        $project_descriptions = $request->project_description;

        for ($i = 0; $i < count($projectnames); $i++) {
            $project = new Project();
            $project->user_id = $user_id;
            $project->project_name = $projectnames[$i];
            $project->git_domain_link = $project_g_d_links[$i];
            $project->project_details = $project_descriptions[$i];
            $project->save();
        }
        $message=" <font color=green>Info Saved Successfully You can logout now !</font>";
    }
    return view('website.dashboard',compact('message'));
  }
  /////////////////////////////////////////////
  public function logout(){
      Session::flush('user');
    return redirect('/');
    }
  ///////////////////////////////////////
    public function viewall(){
      
      $datas=Detail::orderby('id','desc')->get();
    return view('website.viewall',compact('datas'));
    }
    ///////////////////////////////
    public function view($id,Request $request){

     $id=Crypt::decrypt($id);

     $details=Detail::where('user_id',$id)->first();
     $education=Education::where('user_id',$id)->get();
     $experiences=Experience::where('user_id',$id)->get();
     $courses=Course::where('user_id',$id)->get();
     $certifications=Certification::where('user_id',$id)->get();
     $skills=Skill::where('user_id',$id)->get();
     $projects=Project::where('user_id',$id)->get();

    return view('website.view',compact('details','education','experiences','certifications','courses','skills','projects'));
    }

}
