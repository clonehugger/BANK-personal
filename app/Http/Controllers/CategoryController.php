<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Auth;

class CategoryController extends Controller
{
    //

    public function __construct(){

      $this -> middleware('auth',['except'=> 'index'] );
    }

    public function index(){
      $categories = Category:: latest('created_at')->created()->get();
      return view('categories.index', compact('categories'));
    }

    public function show($id){
      $category = Category::findOrFail($id);

      return view ('categories.show', compact('categories'));

    }

    public function create(){
      if(\Auth::guest()){
        return redirect('home');

      }
      return view('categories.create');
    }

    public function store(Requests\CategoryRequest $request){
      \Auth::user()->categories()->save(new Category($request->all()));

      return redirect('categories');
    }

    public function edit($id){
      if(\Auth::guest()){
        return redirect('categories');

      }
      $category = Category::findOrFail($id);
      return view('categories.edit', compact('category'));
    }

    public function update($id, Requests\CategoryRequest $request){
      $category = Category::findOrFail($id);
      $category->update($request->all());
      return redirect('categories');
    }
}
