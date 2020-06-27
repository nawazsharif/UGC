<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\University;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Session;

class UniversityController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function UniversityCreate(Request $request)
    {
        $request->name=ucfirst($request->name);
        $validatedData = $request->validate([
            'name' => 'required|unique:universities',
            'email' => 'required|unique:universities',
        ]);
        $uni_name = $request->name;
        $uni_email=$request->email;
        $id=DB::table('universities')->insertGetId([
            'name' => $uni_name,
            'email' => $uni_email
        ]);

        $user_id=DB::table('users')->insertGetId([
            'name' => $uni_name,
            'uni_id'=> $id,
            'email' => $request->email
        ]);
//        User::find($user_id)->first()->roles()->sync([2]);

        return redirect('/university/university-list');
    }
    public function CreateCategory(Request $request){
        $validatedData = $request->validate([
            'cat_name' => 'required|unique:categories',
        ]);
        DB::table('categories')->insert([
            'cat_name' => $request->cat_name
        ]);
        return redirect('/thesis/category-list');
    }
    public function CreateThesisPage(){
        $uni_id=Auth::user()->uni_id;
        $thesis_categories=Category::all();
        $university = University::where('id',$uni_id)->first();
            $departments=Department::where('uni_id',$uni_id)->get();
        return view('/users/createThesis',compact('departments','thesis_categories','university'));
    }
    public function CreateThesis(Request $request){
        $uni_id= Auth::user()->uni_id;

        $validatedData = $request->validate([
            'toppic' => 'required',
            'category_id' => 'required',
            'dept_id' => 'required',
            'publish_date' => 'required',
            'thesis' => 'required',
        ]);

        if($request->thesis) {
            $imageName = time().'.'.$request->thesis->extension();
            $request->thesis->move(public_path('images/thesis'), $imageName);
        }

        DB::table('theses')->insert([
            'topic' => $request->toppic,
            'cat_id' => $request->category_id,
            'dept_id' => $request->dept_id,
            'uni_id' => $uni_id,
            'publish_date' => $request->publish_date,
            'file' => $imageName
        ]);

        return redirect()->back()->with('success', ['your message,here']);
    }
    public function download( $filename = '' )
    {

        $file_path = public_path() . "/images/thesis/" . $filename;

        $headers = array(
            'Content-Type: png',
            'Content-Disposition: attachment; filename='.$filename,
        );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        }
    }
    public function getTheseList($uni_id=null){
        if($uni_id!=null){
            $theses_list=DB::table('theses')
                ->leftJoin('departments', 'departments.id', '=', 'theses.dept_id')
                ->leftJoin('categories', 'categories.id', '=', 'theses.cat_id')
                ->leftJoin('users', 'users.id', '=', 'theses.uni_id')
                ->whereIn('theses.uni_id' ,[$uni_id])
                ->get(['theses.topic','theses.publish_date','users.name','departments.dept_name','categories.cat_name as cat_name','theses.file']);
        }
        else{
            $theses_list=DB::table('theses')
                ->leftJoin('departments', 'departments.id', '=', 'theses.dept_id')
                ->leftJoin('categories', 'categories.id', '=', 'theses.cat_id')
                ->leftJoin('universities', 'universities.id', '=', 'theses.uni_id')
                ->get(['theses.topic','theses.publish_date','universities.name','departments.dept_name','categories.cat_name as cat_name','theses.file']);
        }
        return $theses_list;
    }
    public function UserThesisList(){
        $uni_id=Auth::user()->uni_id;
        $thesises =$this->getTheseList($uni_id);
        $university = University::where('id',$uni_id)->first();
        return view('/users/userThesesList',compact('thesises','university'));

    }
    public function UserDepartmrnt(){
        $uni_id=Auth::user()->uni_id;
        $university = University::where('id',$uni_id)->first();
        return view('/users/createDept',compact('university'));
    }
    public function DepartmrntList(){
        $uni_id=Auth::user()->uni_id;
        $university = University::where('id',$uni_id)->first();
        $departments= Department::where('uni_id',$uni_id)->get();
        return view('/users/DeptList',compact('university','departments'));
    }
    public function CreateDepartmrnt(Request $request){
        $uni_id=Auth::user()->uni_id;
        $validatedData = $request->validate([
            'dept_name' => 'required',
        ]);
        DB::table('departments')->insert([
            'dept_name' => $request->dept_name,
            'uni_id'=>$uni_id
        ]);
	    Session::flash( 'success_message', 'Department Create Successfully' );
        return redirect('/thesis/department-list');
    }
    public function UserProfile(){
        $uni_id=Auth::user()->uni_id;
        $university = University::where('id',$uni_id)->first();
        $departments= Department::where('uni_id',$uni_id)->get();
        return view('/users/profile',compact('university','departments'));
    }
    public function profileSetings(Request $request){
	    $uni_id=Auth::user()->uni_id;
	    $university = University::where('id',$uni_id)->first();
	    $departments= Department::where('uni_id',$uni_id)->get();
	    return view('/users/setings',compact('university','departments'));
    }
    public function editDepartmrnt(Request $request, $id){
	    $uni_id=Auth::user()->uni_id;
	    $university = University::where('id',$uni_id)->first();
    	if($request->isMethod('post')){
		    Department::where(['id'=>$id])->update(['dept_name' => $request->dept_name]);
		    Session::flash( 'success_message', 'Department Update Successfully' );
    		return redirect('/thesis/department-list');
	    }
    	$dept=Department::where(['id'=>$id])->first();
    	return view('/users/editDepartment',compact('dept','university'));
    }
    public function deleteDepartmrnt(Request $request,$id){
    	Department::where(['id'=>$id])->delete();
	    Session::flash( 'success_message', 'Department Delete Successfully' );
	    return redirect('/thesis/department-list');
    }
    public function uploadLogo(Request $request){
	    if($request->logo) {
		    $imageName = time().'.'.$request->logo->extension();
		    $request->logo->move(public_path('images'), $imageName);
	    }
	    else{
		    $imageName=$request->uni_prev_logo;
	    }
	    University::where('id',$request->uni_id)
		    ->update([
			    'logo' => $imageName,
			    'phone'=>$request->phone
		    ]);

	    Session::flash( 'success_message', 'Profile Update Successfully' );
    	return redirect('/setings');
    }

}
