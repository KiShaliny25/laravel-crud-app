<?php

namespace App\Http\Controllers;

use App\Models\Product; // Product Model-ஐ உள்ளே கொண்டுவருகிறோம்
use Illuminate\Http\Request; // Form தரவுகளைப் பெற Request Class-ஐக் கொண்டுவருகிறோம்

class ProductController extends Controller
{
    // 1. எல்லா பொருட்களையும் பட்டியலிட்டுக் காட்ட (READ)
    public function index()
    {
        $products = Product::all(); // டேட்டாபேஸில் உள்ள எல்லா பொருட்களையும் எடுக்கும்
        return view('products.index', compact('products'));
    }

    // 2. புதிய பொருள் சேர்க்கும் Form பக்கத்தைக் காட்ட (CREATE)
    public function create()
    {
        return view('products.create');
    }

    // 3. Form-ல் டைப் செய்த தரவை டேட்டாபேஸில் சேமிக்க (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'weight' => 'required|numeric',
            'price' => 'required|numeric|max:999999',
        ]);

        Product::create($request->all()); // டேட்டாபேஸில் புது பொருளைச் சேமிக்கும்

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // 4. ஒரு குறிப்பிட்ட பொருளின் விவரங்களை மட்டும் தனியாகக் காட்ட (SHOW)
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // 5. ஒரு பொருளை எடிட் செய்வதற்கான Form பக்கத்தைக் காட்ட (EDIT)
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // 6. திருத்தப்பட்ட புதிய தரவை டேட்டாபேஸில் புதுப்பிக்க (UPDATE)
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'weight' => 'required|numeric',
            'price' => 'required|numeric|max:999999',
        ]);

        $product->update($request->all()); // டேட்டாபேஸில் பழைய தரவை மாற்றி புதுப்பிக்கும்

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // 7. ஒரு பொருளை டேட்டாபேஸிலிருந்து அழிக்க (DELETE)
    public function destroy(Product $product)
    {
        $product->delete(); // டேட்டாபேஸிலிருந்து அந்த பொருளை அழிக்கும்

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
