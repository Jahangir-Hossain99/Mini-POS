<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['categories'] = Category::all();

        return view('categories.categories',$this->data) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['headline'] = "Add new categories";

        return view('categories.form',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $formData = $request->all();
        if (Category::create($formData)) {
        Session::flash('message','Categroy Created Successfully');
        }
        
        return redirect()->to('categories');
    }

    /**
     * Display the specified resource.
     */
   
    public function edit(string $id)
    {
        $this->data['categories']=Category::findOrFail($id);
        $this->data['headline']='Update Information';
        return view('categories.form',$this->data) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = Category::find($id);

        $categories->tittle = $request->get('tittle');

        if ($categories->save()) {
        Session::flash('message','Category Updated Successfully');
        }
        
        return redirect()->to('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Category::find($id)->delete()) {
        Session::flash('message','Category Deleted Successfully');
        }
        
        return redirect()->to('categories');
    }
}
