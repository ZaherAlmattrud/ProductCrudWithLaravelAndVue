<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{

    private $productService ;

    function __construct(ProductService $productService){

        $this->productService =  $productService ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return  $this->productService->getAllProducts();
    }

 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        return  $this->productService->createProduct( $request->all() ) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        return  $this->productService->getById($id);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return  $this->productService->updateProduct($id , $request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        return  $this->productService->deleteProduct( $id);
    }
}
