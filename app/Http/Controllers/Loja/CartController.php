<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Http\Controllers\Loja;

use App\Services\CartServices;
use App\Repositories\CartRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Description of CartController
 *
 * @author mario
 */
class CartController extends Controller {
	private $service;
	private $repository;
	private $request;
	public function __construct(CartServices $service, CartRepository $cart, Request $request) {
		$this->service = $service;
		$this->repository = $cart;
		$this->request = $request;
	}
	
	/**
	 *
	 * @param type $id        	
	 * @return type
	 */
	public function addProductCart($id) {
		$this->service->add ( $id, 1 );
		
		$this->request;
		
		return redirect ( 'cart' );
	}
	
	/**
	 *
	 * @return type
	 */
	public function getCart() {
		$carrinho = $this->repository->all ();
		$total = $this->repository->total ();
		$totalItens = $this->repository->countItens ();
		return view ( 'loja::page.cart', compact ( 'carrinho', 'total', 'totalItens' ) );
	}
	
	/**
	 *
	 * @return type
	 */
	public function destroy() {
		$this->repository->destroy ();
		return redirect ( '/' );
	}
	
	/**
	 *
	 * @param unknown $idProduct        	
	 */
	public function remove($idProduct) {
		$this->repository->remove ( $idProduct );
		return redirect ()->back ();
	}
	
	/**
	 *
	 * @param unknown $idProduct        	
	 */
	public function updateQtd($idProduct, $tipo) {
		$product = $this->repository->find ( $idProduct );
		
		if ($tipo == "increment") {
			$value = ($product->qty + 1);
		} else if ($tipo == "decrement") {
			$value = ($product->qty - 1);
		}
		
		$this->repository->updateQtd ( $idProduct, $value );
		
		return redirect ()->back ();
	}
	/**
	 * 
	 * @return string[]|number[][]|string[][]
	 */
	public static function address() {
		$address = array (
				'postalCode' => '42833000',
				'street' => 'Bosque',
				'number' => '1077',
				'complement' => '',
				'district' => 'Barra do jAcuipe',
				'city' => 'Camaçri',
				'state' => 'BA',
				'country' => 'BRA' 
		);
		return $address;
	}
	
	/**
	 * 
	 * @param CartRepository $carrinho
	 * @return string[][]|NULL[][]
	 */
	public static function transformable($carrinho) {
		$array = array ();
		$i = 1;
		foreach ( $carrinho as $chave => $car ) {
			$array['itemId'. $i] = array (
					'itemId'. $i => "".$car->id."",
					'itemDescription'. $i => $car->name,
					'itemQuantity'. $i => "".$car->qty."",
					'itemAmount'. $i => "".$car->price."0",
					'itemWeight'. $i => "1",
					'itemShippingCost'. $i => null
			);
			$i++; 
		}
		
		return $array;
	}
	
	/**
	 */
	public function checkout() {
		$carrinho = $this->repository->all ();
		
		$dados = array (
				'items' => CartController::transformable ( $carrinho ),
				'address' => CartController::address (),
				'sender' => array (
						'senderName' => 'Mario sergio',
						'senderCPF' => '06566463577',
						'senderEmail' => 'mariosergio952@hotmail.com.br',
						'phone' => [ 
								'senderAreaCode' => 11,
								'senderPhone' => '9631-8199' 
						] 
				),
				'currency' => 'BRL' 
		);
		
		//dd ( $dados );
		
		$request = \PagSeguro::setRequest ( $dados );
		$request->sendRequest ();
		
		$code = $request->request->getCode ();
		return redirect ( "https://pagseguro.uol.com.br/v2/checkout/payment.html?code=" . $code );
	}
}
