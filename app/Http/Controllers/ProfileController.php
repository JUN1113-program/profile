<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use App\Icon;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(["index"]);
    }

    public function index(){
        $profile = Profile::find(1);

        return view("profile/index", compact("profile"));
    }

    public function create(){
        $profile = new Profile();
        $submit = "新規登録";
        $action = "/profile";
        return view("profile/create",compact("profile", "submit", "action"));
    }

    public function store(Request $request){
        $inputData = [  "age" => $request->age,
                        "introduction" => $request->introduction,
                        "career" => $request->career,
                        "certification" => $request->certification,
                        "skill" => $request->skill,
                        "goal" => $request->goal,
                        "user_id" => Auth::user()->id];

        Profile::create($inputData);
        Auth::user()->icon()->create(["image" => $request->icon]);

        return redirect("/home");
    }

    public function edit($id){
        $profile = Profile::find($id);
        $submit = "更新する";
        $action = "/profile/{$id}";
        return view("profile/create", compact("profile", "submit", "action"));
    }

    public function update(Request $request, $id){
        $inputData = [  "age" => $request->age,
                        "introduction" => $request->introduction,
                        "career" => $request->career,
                        "certification" => $request->certification,
                        "skill" => $request->skill,
                        "goal" => $request->goal,
                        "user_id" => Auth::user()->id];
        $profile = Profile::find($id);
        $profile->update($inputData);
        Auth::user()->icon()->update(["image" => $request->icon]);
        return redirect("/home");
    }

    public function destroy($id){
        Profile::destroy($id);
        return redirect("/home");
    }

}
