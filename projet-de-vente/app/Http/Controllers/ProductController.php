<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(2);
        return view('products.index',compact('products'));
     
        }
        public function create()
        {
        return view('products.create');
        }


        //******************************************************************
        public function store(Request $request)
        {
        $request->validate([
            
        'nomproduit' => 'required',
        'designiation'  => 'required',
        'quantite' => 'required',
        'pourcentageprod' => 'required',
        'image' => 'required',

        'prixUT' => 'required',
        'type' => 'required',
        ]);
        
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('\imagesproduit'), $imageName);
        $formData = $request->all();
        $formData['image'] =  $imageName;
        Product::create($formData);
        return redirect()->route('products.index')
            ->with('success', 'product crèe avec sucess.');

    }

        //*************************************************************************
        public function show(Product $product)
        {
        return view('products.show',compact('product'));
        }
        public function edit(Product $product)
        {
        return view('products.edit',compact('product'));
        }



        //****************************************************************************
        public function update(Request $request, Product $product)
        {
       $request->validate([
            'nomproduit'=>'required','designiation'=>'required','image' =>'required' , 'quantite'=>'required','pourcentageprod'=>'required','prixUT'=>'required','type'=>'required'
        ]);

       
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','Produit modifiè avec sucess');
     
   }
    

        //****************************************************************
        public function destroy(Product $product)
        {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Produit supprimè avec success');
        }
        }