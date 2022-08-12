<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\admin\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){
        $category= Categort::all();
        return view('admin.category.index',compact('category'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request){
        $data=$request->validated();
        $category=new Category;
        $category->name=$data['name'];
        $category->slug=$data['slug'];
        $category->description=$data['description'];
        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('/uploads/category/',$filename);
            $category->image=$filename;

        }
        $category->navbar_status=$request->navbar_status==true ? '1':'0';
        $category->status=$request->status==true ? '1':'0';
        $category->created_by=Auth::user()->id;
        $category->save();

            return redirect(admin/category)->with('message','Data submitted successfully');
    }
}
