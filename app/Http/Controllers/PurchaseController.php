<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Models\Purchase;
use App\Models\Provider;
use App\Models\Product;
use Auth;
use Carbon\Carbon;



class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $purchases = Purchase::all();
        return view('admin.purchase.index', compact('purchases'));
    }
    public function create()
    {
        $providers = Provider::all();
        $products = Product::all();
        return view('admin.purchase.create', compact('providers', 'products'));
    }

    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all() + [
            'user_id' => Auth::user()->id,
            'purchase_date' => Carbon::now('America/Argentina/Buenos_Aires')
        ]);


        foreach ($request->product_id as $key => $product) {
            $results[] = array(
                'product_id' => $request->product_id[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key]
            );

            // Obtener el producto
            $product = Product::find($request->product_id[$key]);
            // Actualizar la cantidad en stock
            $product->stock += $request->quantity[$key];
            // Guardar los cambios en la base de datos
            $product->save();
        }

        $purchase->purchaseDetails()->createMany($results);

        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        $subTotal = 0;

        $purchaseDetails = $purchase->purchaseDetails;

        foreach ($purchaseDetails as $detail) {
            $subTotal = $detail->product->sell_price * $detail->quantity;
        }

        return view('admin.purchase.show', compact('purchase', 'purchaseDetails', 'subTotal'));
    }

    public function edit(Purchase $purchase)
    {
        $providers = Provider::all();
        $products = Product::all();

        return view('admin.purchase.show', compact('purchase', 'providers', 'products'));
    }

    public function update(UpdateRequest $request, Purchase $purchase)
    {
        //$purchase->update($request->all());
        //return redirect()->route('purchase.index'); 
    }

    public function destroy(Purchase $purchase)
    {
        //$purchase->delete();
        //return redirect()->route('purchase.index'); 
    }
}
