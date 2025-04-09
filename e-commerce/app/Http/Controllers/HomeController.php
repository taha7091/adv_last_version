<?php
namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve the banners, categories, featured products, and popular brands
        $banners = Banner::all(); // You might want to limit it or show only active banners
        $categories = Category::all(); // Retrieve all categories
        $featuredProducts = Product::where('is_featured', true)->take(8)->get(); // Example of featured products
        $brands = Brand::all(); // Retrieve all brands

        // Pass the data to the view
        return view('home.index', compact('banners', 'categories', 'featuredProducts', 'brands'));
    }
}
