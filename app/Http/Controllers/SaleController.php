<?php

namespace App\Http\Controllers;


use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
use App\Models\Sale;
use App\Models\Client;
use App\Models\Product;
use Auth;
use Carbon\Carbon;


class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sales = sale::all();
        return view('admin.sale.index', compact('sales'));
    }
    public function create()
    {
        $clients = Client::all();
        $products = Product::all();

        return view('admin.sale.create', compact('clients', 'products'));
    }

    public function store(StoreRequest $request)
    {
        $sale = sale::create($request->all() + [
            'user_id' => Auth::user()->id,
            'sale_date' => Carbon::now('America/Argentina/Buenos_Aires')
        ]);

        foreach ($request->product_id as $key => $product) {
            $results[] = array(
                'product_id' => $request->product_id[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key],
                'discount' => $request->discount[$key]
            );
        }

        $sale->saleDetails()->createMany($results);

        return redirect()->route('sales.index');
    }

    public function show(sale $sale)
    {
        $saleDetails = $sale->saleDetails;
        $subTotal = 0;
        foreach ($saleDetails as $detail) {
            $subTotal += $detail->quantity * $detail->price - (($detail->quantity * $detail->price)*$detail->discount/ 100); 
        }
        // foreach ($saleDetails as $detail) {
        //     $subTotal = $detail->product->sell_price * $detail->quantity;
        //     $descuento = $detail->discount;
        // }

        //faltan los mensajes del REquest Storage & Update
        return view('admin.sale.show', compact('sale', 'saleDetails', 'subTotal'));
    }

    public function edit(sale $sale)
    {
        $clients = Client::get();

        return view('admin.sale.show', compact('sale'));
    }

    public function update(UpdateRequest $request, sale $sale)
    {
        //$sale->update($request->all());
        //return redirect()->route('sale.index'); 
    }

    public function destroy(sale $sale)
    {
        //$sale->delete();
        //return redirect()->route('sale.index'); 
    }
}
