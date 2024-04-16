<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class Products extends BaseController
{   
    protected $productModel;
    protected $session;

    public function __construct()
    {
        $this->productModel = new \App\Models\ProductsModel();
        $this->session = service('session');
    }   

    // List all products
    public function index()
    {
        $data['title'] = 'Manage Products';
        $data['products'] = $this->productModel->findAll();
        $data['msg'] = $this->session->getFlashData('msg');
        $data['msgType'] = null;

        $this->smartyView('products', $data);
    }

    // Add a new product
    public function add()
    {
        $data['msg'] = '';
        $data['msgType'] = '';
        $data['errors'] = []; // Model errors

        if($this->request->getPost()){
            try {
                if($this->productModel->insert($this->request->getPost())){
                    $data['msg'] = 'Product added successfully.';
                    $data['msgType'] = 'success';
                }
                else{
                    // Validation errors
                    $data['msg'] = 'Error at add product: ';
                    $data['msgType'] = 'danger';
                    $data['errors'] = $this->productModel->errors();
                }
            }
            catch(Exception $e){
                // Execution errors
                $data['msg'] = 'Error at add product: ';
                $data['msgType'] = 'danger';
                $data['errors'][] = $e->getMessage();
            }
        }

        $data['title'] = 'Add Product';
        $this->smartyView('products_form', $data);
    }

    // Update a product by it's id
    public function update($id = null)
    {
        if(is_null($id)){
            return redirect()->to('/products')->with('msg', '#ID is invalid');
        }

        $data['msg'] = '';
        $data['msgType'] = '';
        $data['errors'] = []; // Model errors

        if($this->request->getPost()){
            try{
                if($this->productModel->update($this->request->getPost('id'), $this->request->getPost())){
                    $data['msg'] = 'Product updated successfully';
                    $data['msgType'] = 'success';
                }
                else {
                    $data['msg'] = 'Error at update product: ';
                    $data['msgType'] = 'danger';
                    $data['errors'] = $this->productModel->errors();
                }
            }
            catch(Exception $e){
                $data['msg'] = 'Error at update product: ';
                $data['msgType'] = 'danger';
                $data['errors'][] = $e->getMessage();
            }
        }

        // Load the product info by id
        $product = $this->productModel->find($id);
        if(!$product){
            return redirect()->to('/products')->with('msg', '#ID is invalid to update');
        }

        $data['title'] = 'Update Product';
        $data['product'] = $product;
        $this->smartyView('products_form', $data);
    }

    // Deletes a product by it's id
    public function delete($id = null)
    {
        if(is_null($id)){
            return redirect()->to('/products')->with('msg', '#ID is invalid to delete');
        }
        $msg = '';
        try{
            $this->productModel->delete($id);
            $msg = 'Product # ' . $id . ' delete successfully';
        }
        
        catch(Exception $e){
            $msg = 'Error at delete product';
        }

        return redirect()->to('/products')->with('msg', $msg);
    }
}