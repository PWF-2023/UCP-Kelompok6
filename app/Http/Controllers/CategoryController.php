<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        
       
        return view('category.index');
        
    }

    public function create()
    {
        
       
        return view('category.create');
        
    }

    public function store()
    {
        
       
        return view('category.store');
        
    }

    public function edit()
    {
        
       
        return view('category.edit');
        
    }

    public function update()
    {
        
       
        return view('category.update');
        
    }
    
    public function destroy()
    {
        
       
        return view('category.destroy');
        
    }

    
}
