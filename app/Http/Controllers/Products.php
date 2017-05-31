<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = App\Products::get();
        $meats = App\Products::where('cat_id', 1)->get();
        $vegetables = App\Products::where('cat_id', 2)->get();
        $fruits = App\Products::get()->where('cat_id', 5);
        $fishs = App\Products::get()->where('cat_id', 3);
        $dairy = App\Products::get()->where('cat_id', 4);
        $liquids = App\Products::get()->where('cat_id', 6);
        $others = App\Products::get()->where('cat_id', 7);

        return view('fridge', compact('products', 'meats', 'vegetables', 'fruits', 'fishs', 'dairy', 'liquids', 'others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $meats = request('fridge_select_00');
        $vegetables = request('fridge_select_02');
        $fishs = request('fridge_select_03');
        $diary = request('fridge_select_04');
        $liquids = request('fridge_select_05');
        $fruits = request('fridge_select_06');
        $others = request('fridge_select_07');
        $arr = ' (';
        $val = array();


        for ($i = 0; $i < count($meats); $i++) {
            $val[] = $meats[$i];
        }

        for ($i = 0; $i < count($vegetables); $i++) {
            $val[] = $vegetables[$i];

        }
        for ($i = 0; $i < count($fishs); $i++) {
            $val[] = $fishs[$i];

        }
        for ($i = 0; $i < count($diary); $i++) {
            $val[] = $diary[$i];

        }
        for ($i = 0; $i != count($liquids); $i++) {
            $val[] = $liquids[$i];
        }
        for ($i = 0; $i != count($fruits); $i++) {
            $val[] = $fruits[$i];
        }
        for ($i = 0; $i < count($others); $i++) {
            $val[] = $others[$i];
        }

        for ($i = 0; $i < count($val); $i++) {
            $arr .= $val[$i];
            if ($i < (count($val) - 1)) {
                $arr .= ', ';
            }
        }
        $arr .= ") ";


        $query = \DB::table('recipes')->where(function ($query)use ($val){
                $query->whereIn('element1', $val)->orWhere(function ($query) {
                $query->whereNull('element1');
                });
            })
            ->where(function ($query)use($val){
                $query->whereIn('element2', $val)->orWhere(function ($query) {
                    $query->whereNull('element2');
                });
            })
            ->where(function ($query)use($val){
                $query->whereIn('element3', $val)->orWhere(function ($query) {
                    $query->whereNull('element3');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element4', $val)->orWhere(function ($query) {
                    $query->whereNull('element4');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element5', $val)->orWhere(function ($query) {
                    $query->whereNull('element5');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element6', $val)->orWhere(function ($query) {
                    $query->whereNull('element6');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element7', $val)->orWhere(function ($query) {
                    $query->whereNull('element7');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element8', $val)->orWhere(function ($query) {
                    $query->whereNull('element8');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element9', $val)->orWhere(function ($query) {
                    $query->whereNull('element9');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element10', $val)->orWhere(function ($query) {
                    $query->whereNull('element10');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element11', $val)->orWhere(function ($query) {
                    $query->whereNull('element11');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element12', $val)->orWhere(function ($query) {
                    $query->whereNull('element12');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element13', $val)->orWhere(function ($query) {
                    $query->whereNull('element13');
                });
            })
            ->where(function ($query)use( $val){
                $query->whereIn('element14', $val)->orWhere(function ($query) {
                    $query->whereNull('element14');
                });
            })
            ->where(function ($query)use($val){
                $query->whereIn('element15', $val)->orWhere(function ($query) {
                    $query->whereNull('element15');
                });
            })
            ->get();
        return view('recipe' , compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }

    public
    function find(Request $request)
    {



    }
}
