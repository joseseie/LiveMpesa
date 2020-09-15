<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    public function pay(Request $request)
    {

        $product = Product::find($request->product_id);
        $phone = $request->phone;

        return $this->makePayment($phone, $product->price);

    }

    public function makePayment ($phone, $amount) {

        $mpesa = new \Karson\MpesaPhpSdk\Mpesa();

        $mpesa->setApiKey(env('MPESA_API_KEY', ''));
        $mpesa->setPublicKey(env('MPESA_PUBLIC_KEY', ''));
        $mpesa->setEnv('test');// 'live' production environment

        $shortcode = env('MPESA_SERVICE_PROVIDER_CODE', ''); //Código da instituição atribuida pelo MPesa, nunca mude o 171717.  input_ServiceProviderCode
        $invoice_id = env('MPESA_INITIATOR_IDENTIFIER', ''); // Id da transação entre cliente e empresa, só pode se usar uma vez ou input_TransactionReference

        $phone_number = '258' . $phone; // contacto, ou input_CustomerMSISDN.

        $strRand = rand(0, 100);

        $reference_id = 'LiveLaravelProduct' . $strRand; // referência da transação (não pode ter espaços).

        $result = $mpesa->c2b($invoice_id, $phone_number, $amount, $reference_id, $shortcode);

        if ($result->status == "200" OR $result->status == "201"){

            return response()->json(['message' => 'Transação feita com sucesso'], $result->status);

        } else {

            return response()->json(['message' => 'Infelizmente, ocorreu um erro, o pagamento ainda não foi feito, tenta novamente!'], $result->status);

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO: Por implementar a adição
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO: Por implementar a busca de detalhes específicos.
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
        //TODO: Por implementar a actualização
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO: Por implementar a remoção
    }
}
