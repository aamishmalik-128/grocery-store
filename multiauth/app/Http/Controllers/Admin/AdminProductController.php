<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    public function index(){
        $products=Product::get();
        return view ('admin.product.index',compact('products'));
    }
    public function create(){
        $product_categories=ProductCategory::orderBy('name','asc')->get();
        return view('admin.product.create',compact('product_categories'));
    }
    public function store(Request $request){
     
   

        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            
            'short_description'=>'required',
            
            
        ]);
        $products =new Product();
        if($request->photo){
            $request->validate([
                'photo'=>'image|mimes:jpeg,jpg,gif,png,svg|max:2048',
            ]);
            $final_name='product_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads/'),$final_name);
            $products->photo=$final_name;
        }
           //random password
 


        
        $products->name=$request->name;
        $products->slug=$request->slug;
        $products->short_description=$request->short_description;
        $products->description=$request->description;
        $products->product_category=$request->product_category;
        $products->show_on_home=$request->show_on_home;
        $products->save();



        return redirect()->route('admin_product_index')->with('success','Product created successfully');
    }

    public function edit($id)
    {
        $products =Product::where('id',$id)->first();
        $product_categories=ProductCategory::orderBy('name','asc')->get();
        return view('admin.product.edit',compact('products','product_categories'));
    }


    public function update($id, Request $request){
         $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description'=>'required',
            'description'=>'required'
            
        ]);

        $products = Product::where('id',$id)->first();

         if($request->photo){
            $request->validate([
                'photo'=>'image|mimes:jpeg,jpg,gif,png,svg|max:2048',
            ]);
            $final_name='user_'.time().'.'.$request->photo->extension();
            if($products->photo != '' && File::exists(public_path('uploads/'.$products->photo))){
                File::delete(public_path('uploads/'.$products->photo));
            }

            $request->photo->move(public_path('uploads/'),$final_name);
            $products->photo=$final_name;
        }
        $products->name=$request->name;
        $products->slug=$request->slug;
        $products->short_description=$request->short_description;
        $products->description=$request->description;
        $products->product_category=$request->product_category;
        $products->show_on_home=$request->show_on_home;
        $products->save();


        return redirect()->route('admin_product_index')->with('success','Product updated successfully');

    }


    public function delete($id){
        $products =Product::where('id',$id)->first();
        if($products){
            if($products->photo != '' && File::exists(public_path('uploads/'.$products->photo))){
                File::delete(public_path('uploads/'.$products->photo));
            }
            $products->delete();
            return redirect()->route('admin_product_index')->with('success','User deleted successfully');
        }
        else{
            return redirect()->route('admin_product_index')->with('error','User not found');
        }
    }


    public function product_variation($id){
    $product = Product::where('id', $id)->first();
    $product_variations = ProductVariation::where('product_id', $id)->orderBy('sort_order', 'asc')->get();
    return view('admin.product.variation', compact('product', 'product_variations'));
    }

    public function product_variation_store(Request $request, $id){
        $request->validate([
        'label'=>'required',
        'sales_price'=>'required|numeric',
        'regular_price'=>'numeric',
        'stock'=>'required|integer',
        'sort_order'=>'integer|nullable'
        ]);

        $product_variation =new ProductVariation();
        $product_variation->product_id = $id;
        $product_variation->label = $request->label;
        $product_variation->sale_price = $request->sales_price;
        $product_variation->regular_price = $request->regular_price;
        $product_variation->stock = $request->stock;
        $product_variation->sort_order = $request->sort_order;
        $product_variation->save();

        return redirect()->back()->with('success','Product Variation Added successfully');
    }
    public function product_variation_delete($id){
        $product_variation= ProductVariation::where('id',$id)->first();
        $product_variation->delete();
        return redirect()->back()->with('success',' Product variation deleted successfully');
    }


    public function product_variation_update(Request $request, $id){
        $request->validate([
        'label'=>'required',
        'sales_price'=>'required|numeric',
        'regular_price'=>'numeric',
        'stock'=>'required|integer',
        'sort_order'=>'integer|nullable'
        ]);

        $product_variation =ProductVariation::where('id',$id)->first();
        $product_variation->product_id = $id;
        $product_variation->label = $request->label;
        $product_variation->sale_price = $request->sales_price;
        $product_variation->regular_price = $request->regular_price;
        $product_variation->stock = $request->stock;
         $product_variation->sort_order = $request->sort_order;
        $product_variation->save();

        return redirect()->back()->with('success','Product Variation Added successfully');
    }

}