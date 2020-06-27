<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\Thesis;
use App\Models\University;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Response;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }
    public function UniversityRegistration(){
        $categories= Category::all();
        return view('/users/auth/universityRegister');
    }

    function check(Request $request)
    {
        if ($request->uni_email) {
            $uni_email = $request->uni_email;
            $data = University::where('email', $uni_email)
                ->where('is_active',1)
                ->first(['id','name','email']);
            if ($data) {
                return Response::json(array('university' => $data,'message' => 'not_unique'));
            } else {
                return Response::json(array( 'message' => 'unique'));
            }
        }
    }
    public function InsertDept(Request $request){
        $validatedData = $request->validate([
            'dept_name' => 'required',
            'uni_id' => 'required',
        ]);
        $check=Department::where('dept_name',$request->dept_name)->where('uni_id',$request->uni_id)->first();
        if($check){
            return Response::json(array('message' => 'Already Added'    ));
        }
        $data=Department::insertGetId([
            'dept_name' => $request->dept_name,
            'uni_id' => $request->uni_id
        ]);
        if ($data) {
            return Response::json(array('dept_id' => $data, 'message' => 'success'));
        } else {
            return Response::json(array('message' => 'error'));
        }

    }
    public function UpdateUniversity(Request $request){
        $validatedData = $request->validate([
            'password' => 'required',
        ]);
        if($request->logo) {
            $imageName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);
        }
        else{
            $imageName='';
        }
        $abcd= User::where('email',$request->uni_email)->update([
            'password' => Hash::make($request->password)
        ]);
        $user = User::where('email',$request->uni_email)->with('roles')->first();
        $user->roles()->sync([2]);
        $data=University::where('id',$request->uni_id)
            ->update([
                'logo' => $imageName,
                'phone'=>$request->phone,
                'is_active' => 0
            ]);

        if($data){
            return redirect('/login');
        }
    }
    public function RemoveDept(Request $request){
        $index = $request->index;
        $data =Department::where('id',$index)->first()->delete();

        if ($data) {
            echo 'success';
        } else {
            echo 'error';
        }
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(strtolower(Auth::user()->roles()->first()->name)==='admin'){
            return view('admin/homePage');
        }
        else{
            $uni_id=Auth::user()->uni_id;
            $university = University::where('id',$uni_id)->first();
            $total_dept=$this->countAllDept($uni_id);
            $total_thesis=$this->countAllThesis($uni_id);
            $thesises=app('App\Http\Controllers\UniversityController')->getTheseList($uni_id);
            return view('users/home',compact('thesises','total_thesis','total_dept','university','thesises'));
        }

    }
    /**
     * Create University View for Admin
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public  function createUniversity(){
        return view('admin/university/create');
    }
    /**
     * Create University List for Admin
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public  function UniversityList(){
        $universities= University::all();
        return view('admin/university/uniList',compact('universities'));
    }
    /**
     * Create Admin Thesis List
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function ThesisList(){
        $thesises= app('App\Http\Controllers\UniversityController')->getTheseList();
        return view('admin/thesis/thesisList',compact('thesises'));
    }
    /**
     * Create Admin Thesis List
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public  function CatrgoryList(){
        $categories= Category::all();
        return view('admin/thesis/categoryList',compact('categories'));
    }
    /**
     * Create Admin Thesis Category Create
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public  function CreateCategory(){
//        $categories= Category::all();
        return view('admin/thesis/categoryCreate');
    }
    private function countAllThesis($uni_id=null){
        if($uni_id != null){
            return Thesis::where('uni_id',$uni_id)->count();
        }
        else{
            return Thesis::All()->count();
        }
    }

    private function countAllDept($uni_id=null){
        if($uni_id != null){
            return Department::where('uni_id',$uni_id)->count();
        }
        else{
            return Department::All()->count();
        }

    }
	public function allThesisList(){

    	$thesisList= Thesis::with(['catName','deptName','uniName'])->paginate(15);
    	return view('thesis',compact('thesisList'));
	}
	public function editCatrgory(Request $request,$id){
    	if($request->isMethod('post')){
    		Category::where(['id'=>$id])->update(['cat_name'=>$request->cat_name]);
		    Session::flash( 'success_message', 'Category Update Successfully' );
		    return redirect('/thesis/category-list');
	    }
    	$category= Category::where(['id'=>$id])->first();
		return view('admin/thesis/editCreate',compact('category'));

	}
	public function deleteCatrgory(Request $request,$id){
    	Category::where(['id'=>$id])->delete();
		Session::flash( 'success_message', 'Category Delete Successfully' );
		return redirect('/thesis/category-list');
	}

	public function download( $filename = '' )
	{
		// Check if file exists in app/storage/file folder
		$file_path = storage_path() . "/app/downloads/" . $filename;
		$headers = array(
			'Content-Type: pdf',
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

}
