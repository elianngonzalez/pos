<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;
use App\Models\Product;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {   colocando esta funcion en cualquier controlador 
        el usuario debera logearse antes de acceder a cualquier funcion 
        
        $this->middleware('auth');

    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $today_sales = DB::table('sales')
            ->select(DB::raw('SUM(total) as total_sales'))
            ->whereDate('sale_date', Carbon::today())
            ->first();
        $yesterday_sales = DB::table('sales')
            ->select(DB::raw('SUM(total) as total_salesy'))
            ->whereDate('sale_date', Carbon::yesterday())
            ->first();
        //dd($yesterday_sales);

        //dd($difference);
        return view('admin.index');
    }

    public function earnByMonth()
    {
        $monthlyProfits = DB::table('sales')
            ->select(DB::raw('MONTHNAME(sale_date) as month'), DB::raw('ROUND(SUM(total - (total * tax/100)), 2) as total_profit'))
            ->where('status', 'VALID')
            ->whereYear('sale_date', Carbon::now('America/Argentina/Buenos_Aires')->year)
            ->groupBy(DB::raw('MONTHNAME(sale_date)'))
            ->orderBy(DB::raw('MONTH(sale_date)'), 'ASC')
            ->get();

        $formattedData = [];
        foreach ($monthlyProfits as $profit) {
            $formattedData[] = [
                'month' => $profit->month,
                'total_profit' => $profit->total_profit
            ];
        }

        return response()->json($formattedData);
    }

    public function ProductByMont()
    {
        $mostSoldProducts = Product::withCount(['saleDetails as sales_count'])
            ->join('sale_details', 'sale_details.product_id', '=', 'products.id')
            ->join('sales', 'sales.id', '=', 'sale_details.sale_id')
            ->whereMonth('sales.sale_date', Carbon::now('America/Argentina/Buenos_Aires')->month)
            ->orderBy('sales_count', 'desc')
            ->limit(10)
            ->get();

        $formattedData = [];
        foreach ($mostSoldProducts as $profit) {
            $formattedData[] = [
                'month' => $profit->month,
                'total_profit' => $profit->total_profit
            ];
        }

        return response()->json($formattedData);
    }

    public function SalesByDay()
    {
        $salesPerHour = Sale::whereDate('sale_date', today('America/Argentina/Buenos_Aires'))
            ->selectRaw('count(id) as sales_count, DATE_FORMAT(sale_date, "%H") as hour')
            ->groupBy('hour')
            ->get();

        $formattedData = [];
        foreach ($salesPerHour as $sale) {
            $formattedData[] = [
                'hour' => $sale->hour,
                'sales_count' => $sale->sales_count
            ];
        }


        return response()->json($formattedData);
    }

    public function ProductsOfDay()
    {
        $productOfDay = Product::select('products.name', DB::raw('SUM(sale_details.quantity) as quantity_sold'))
            ->join('sale_details', 'sale_details.product_id', '=', 'products.id')
            ->join('sales', 'sale_details.sale_id', '=', 'sales.id')
            ->whereDate('sales.sale_date', '=', Carbon::today('America/Argentina/Buenos_Aires'))
            ->groupBy('products.name')
            ->orderBy('quantity_sold', 'desc')
            ->limit(6)
            ->get();

        $formattedData = [];
        foreach ($productOfDay as $item) {
            $formattedData[] = [
                'name' => $item->name,
                'quantity_sold' => $item->quantity_sold
            ];
        }

        return $formattedData;
    }


    public function test()
    {
        $products = DB::table('sale_details')
            ->join('sales', 'sales.id', '=', 'sale_details.sale_id')
            ->join('products', 'products.id', '=', 'sale_details.product_id')
            ->select(DB::raw('SUM(sale_details.quantity) as quantity'), 'products.name', DB::raw("DATE_FORMAT(sales.sale_date, '%W') as day"))
            ->whereBetween('sales.sale_date', [Carbon::now()->subWeek(), Carbon::now()])
            ->groupBy('products.name', 'day')
            ->orderBy('day', 'asc')
            ->get();

        $groupedProducts = [];
        foreach ($products as $product) {
            $day = $product->day;
            if (!array_key_exists($day, $groupedProducts)) {
                $groupedProducts[$day] = [];
            }
            array_push($groupedProducts[$day], $product);
        }
        dd($groupedProducts);
        return $groupedProducts;
    }
}


/*
$products = SaleDetail::join('sales', 'sales.id', '=', 'sale_details.sale_id')
    ->join('products', 'products.id', '=', 'sale_details.product_id')
    ->selectRaw('products.name, SUM(sale_details.quantity) as total_sold, DATE(sales.sale_date) as date')
    ->where('sales.sale_date', '>=', Carbon::now()->subWeek())
    ->groupBy('products.id', 'date')
    ->orderBy('date', 'ASC')
    ->orderBy('total_sold', 'DESC')
    ->get();
*/