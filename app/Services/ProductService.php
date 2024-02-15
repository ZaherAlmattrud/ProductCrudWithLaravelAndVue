<?php

namespace App\services;
use App\Models\Product;
use Illuminate\Http\Request;




 

class ProductService  
{

    private $model ;

    function __construct( Product $product){

        $this->model =  $product ;
    }

    public function getAllProducts(){

        return $this->model->all();
    }

    public function createProduct( $data ){

       $product = new $model([

        'name'=> array_key_exists('name' , $data) ? $data['name'] : null ,
        'detail'=> array_key_exists('detail' , $data) ? $data['detail'] : null ,

       ]);

       $product->save();

       return response()->json("Product Created");

    }

    public function getById($id){

        $product = $model::find($id);
        return response()->json($product);
    }

    public function updateProduct($id , $data){
        $product = $model::find($id);
        $product->update($data);
        return response()->json("Product Updated");
    }

     public function delete($id){

        $product = $model::find($id);
        $product->delete();
        return response()->json("Product Deleted");
     }

}