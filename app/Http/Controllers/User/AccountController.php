<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Session;


class AccountController extends UserController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ################
        # table
        ################
        $table[ 'header' ]  = [ 
            'account_id'  => 'id Akun',
            'username' => 'Username',
            'full_name'  => 'Nama',
            'profile_pic_url'  => 'foto',
         ];
        $table[ 'number' ]  = 1;
        $table[ 'rows' ]    = [];//PriceList::all() ;
        $table[ 'action' ]  = [
            "modal_form" => [
                "modalId"       => "edit",
                "dataParam"     => "id",
                "modalTitle"    => "Edit Price List",
                "formUrl"       => url('pricelists'),
                "formMethod"    => "post",
                "buttonColor"   => "primary",
                "formFields"    => [
                    '_method' => [
                        'type' => 'hidden',
                        'value'=> 'PUT'
                    ],
                    'id' => [
                        'type' => 'hidden',
                    ],
                    'name' => [
                        'type' => 'text',
                        'label' => 'Produk',
                        'placeholder' => 'Ex. Plastik',
                    ],
                    'price' => [
                        'type' => 'number',
                        'label' => 'Harga',
                    ],
                    'unit' => [
                        'type' => 'text',
                        'label' => 'Satuan',
                        'placeholder' => 'Ex. Kg',
                    ],
                ],
            ],//modal_form
            "modal_delete" => [
                "modalId"       => "delete",
                "dataParam"     => "id",
                "modalTitle"    => "Hapus",
                "formUrl"       => url('pricelists'),
                "formMethod"    => "post",
                "buttonColor"   => "danger",
                "formFields"    => [
                    '_method' => [
                        'type' => 'hidden',
                        'value'=> 'DELETE'
                    ],
                    'id' => [
                        'type' => 'hidden',
                    ],
                ],
            ],//modal_delete
        ];
        $table = view('layouts.templates.tables.plain_table', $table);

        $this->data[ 'contents' ]            = $table;

        $this->data[ 'message_alert' ] = Session::get('message');
        $this->data[ 'page_title' ]          = 'Akun';
        $this->data[ 'header' ]              = 'Daftar Akun';
        $this->data[ 'sub_header' ]          = '';
        return $this->render(  );
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
