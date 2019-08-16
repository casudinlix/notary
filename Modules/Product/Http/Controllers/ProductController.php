<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Illuminate\Routing\Controller;
use Nwidart\Modules\Routing\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Modules\Product\Entities\ProductModel;
use spatie\Permission\Models\Role;
use App\User;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $this->authorize('product.index');
        return view('product::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    function product_list(Request $request)
    {
        $this->authorize('product.index');
        $cek=User::find(Auth::user()->id) ;
        $roles = $cek->getRoleNames();
        $result = array();

        foreach($roles as $inner) {
            $result[] = $inner;
        }
        if (in_array('Super Users',$result) ) {
            $product=ProductModel::all();
        } else {
            $product=ProductModel::where('created_by',Auth::user()->uuid)->orwhere('company_uuid'.Auth::user()->company_uuid);
        }


        return Datatables::of($product)
        ->addColumn('action', function ($product) {
            return '<a href="#edit-'.$product->uuid.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })
            ->make(true);

    }
    public function create()
    {
        $this->authorize('product.create');
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
