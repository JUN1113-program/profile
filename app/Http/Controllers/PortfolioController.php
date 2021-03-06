<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(["index"]);
    }

    public function index(){
        $portfolios = Portfolio::all();

        return view("portfolio/index", compact("portfolios"));
    }

    public function create(){
        $portfolio = new Portfolio;
        $submit = "新規登録";
        $action = "/portfolio";
        return view("portfolio/create",compact("portfolio", "submit", "action"));
    }

    public function store(Request $request){
        $inputData = [  "title" => $request->title,
                        "explanation" => $request->explanation,
                        "env" => $request->env,
                        "url" => $request->url,
                        "src" => $request->src,
                        "user_id" => Auth::user()->id];
        $portfolio = Portfolio::create($inputData);
        $portfolio->image()->create(["image" => $request->image]);

        return redirect("/home");
    }

    public function edit($id){
        $portfolio = Portfolio::find($id);
        $submit = "更新する";
        $action = "/portfolio/{$id}";
        return view("portfolio/create", compact("portfolio", "submit", "action"));
    }

    public function update(Request $request, $id){
        $inputData = [  "title" => $request->title,
                        "explanation" => $request->explanation,
                        "env" => $request->env,
                        "url" => $request->url,
                        "src" => $request->src,
                        "user_id" => Auth::user()->id];
        $portfolio = Portfolio::find($id);
        $portfolio->update($inputData);
        $portfolio->image()->update(["image" => $request->image]);
        return redirect("/home");
    }

    public function destroy($id){
        Portfolio::destroy($id);
        return redirect("/home");
    }
}
