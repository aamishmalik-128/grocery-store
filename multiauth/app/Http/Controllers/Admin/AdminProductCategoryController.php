<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

use Illuminate\Http\Request;


class AdminProductCategoryController extends Controller
{
    public function index(){
        $product_categories =ProductCategory::orderBy('name','asc')->get();
        return view ('admin.product_category.index',compact('product_categories'));
    }
    public function create(){
        return view('admin.product_category.create');
    }
    public function store(Request $request){
     
   

        $request->validate([
            'name'=>'required',
        ]);
        $product_categories =new ProductCategory();

        $product_categories->name=$request->name;
        $product_categories->show_on_home=$request->show_on_home;

        $product_categories->save();


        return redirect()->route('admin_product_category_index')->with('success','Product created successfully');
    }

    public function edit($id)
    {
        $product_categories =ProductCategory::where('id',$id)->first();
        return view('admin.product_category.edit',compact('product_categories'));
    }


    public function update($id, Request $request){
         $request->validate([
            'name'=>'required',
            
        ]);

        $product_categories = ProductCategory::where('id',$id)->first();

      
        $product_categories->name=$request->name;
        $product_categories->show_on_home=$request->show_on_home;

        $product_categories->save();


        return redirect()->route('admin_product_category_index')->with('success','User updated successfully');

    }


public function delete($id)
{
    $product_category = ProductCategory::find($id);

    if (!$product_category) {
        return redirect()->route('admin_product_category_index')
            ->with('error', 'Product category not found');
    }

    $product_category->delete();

    return redirect()->route('admin_product_category_index')
        ->with('success', 'Product deleted successfully');
}

}
