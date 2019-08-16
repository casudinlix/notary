<?php

namespace Modules\Settings\Http\Controllers;

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
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $this->authorize('product.index');
        return view('settings::product.product');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    function product_list(Request $request)
    {
        $this->authorize('product.index');



        $product=DB::table('product_service')->join('users','users.uuid','=','product_service.created_by')
        ->select(['product_service.uuid','product_service.product_name','product_service.price','product_service.created_by','users.name','product_service.created_at'])
        ->where('product_service.created_by',Auth::user()->uuid)->orwhere('product_service.company_uuid',Auth::user()->company_uuid)
        ->get();;

        return Datatables::of($product)

        ->editColumn('price', function ($product) {
            return "Rp. ".number_format($product->price, 0);
        })
        ->editColumn('created_at', function ($product) {
            return tgl_akta($product->created_at);
        })
        ->addColumn('action', function ($product) {
            //return '<a href="' . route('product.delete',[$product->uuid]) . '" class="btn btn-xs btn-danger"><i class="material-icons">clear</i> Hapus</a>';
            //return '<a href="#" onclick="hapus('."'$product->uuid'".')">xxx</a>';
            return '<a class="waves-effect waves-light btn red" onclick="hapus('."'$product->uuid'".')"><i class="material-icons left">clear</i>Hapus</a>';
        })

        ->make(true);

    }
    public function create()
    {
        $this->authorize('product.create');
        return view('settings::product.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->authorize('product.create');
        DB::beginTransaction();

    try {
        DB::commit();
        DB::table('product_service')->insert(['uuid'=>unik(),'product_name'=>$request->product_name,'price'=>$request->price,'created_by'=>Auth::user()->uuid,
        'created_at'=>Carbon::now()]);
        toastr()->success('Data Berhasil Ditambahkan', 'Sukses!');
       return redirect()->route('product.index');
    } catch (\Exception $e) {
        DB::rollback();
        toastr()->error($e->getMessage(), 'Error');
        return redirect()->back();
    }
        //return $request->all();
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
        $this->authorize('product.delete');
        DB::beginTransaction();

    try {
        DB::commit();
        // all good
        DB::table('product_service')->where('uuid',$id)->delete();
        toastr()->success('Data Berhasil di hapus', 'Sukses!');

    } catch (\Exception $e) {
        DB::rollback();
        toastr()->error($e->getMessage(), 'Error');
        return redirect()->back();
    }
    }
}
