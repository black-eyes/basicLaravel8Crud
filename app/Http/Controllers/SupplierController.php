<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        //
        $da = Supplier::all()->sortByDesc("id");
        //var_dump($da);

        return view('supplier.index')->with('da', $da);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'supplier_name' => 'required',
            'supplier_phone_no' => 'required',
            'supplier_email_no' => 'required',
            'supplier_address' => 'required',
            'supplier_pincode' => 'required',
            'status' => 'required',
        ]);





        Supplier::create($request->all());
        return redirect()->route('index')
            ->with('success','Supplier created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $supplier = Supplier::find($id);
        $request->validate([
            'supplier_name' => 'required',
            'supplier_phone_no' => 'required',
            'supplier_email_no' => 'required',
            'supplier_address' => 'required',
            'supplier_pincode' => 'required',
            'status' => 'required',
        ]);


        $supplier->update($request->all());

        if($supplier != null)
        {
            $supplier->update($request->all());
            return redirect()->route('index')
                ->with('success','Supplier Updated successfully');
        }else
            {
                return redirect()->route('index')
                    ->with('error','Supplier not updated successfully');
            }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Supplier = Supplier::find($id);
        if($Supplier!=null)
        {
             $Supplier->delete();
            return redirect()->route('index')
                ->with('success','Supplier deleted successfully');
        }else
        {
            return redirect()->route('index')
                ->with('error','Supplier not deleted successfully');
        }


    }


    public function editView(Supplier $supplier,$id)
    {
        //exit("on the controller");
        $supplier = Supplier::find($id);

       // var_dump($supplier);
      //  exit();
        return view('supplier.edit',compact('supplier'));

    }

}
