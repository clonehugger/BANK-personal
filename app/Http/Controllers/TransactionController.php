<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TransactionController extends Controller
{
  public function __construct(){

    $this -> middleware('auth',['except'=> 'index'] );
  }

  public function index(){
    $transactions = Transaction:: latest('created_at')->created()->get();
    return view('transactions.index', compact('transactions'));
  }

  public function show($id){
    $transaction = Transaction::findOrFail($id);

    return view ('transactions.show', compact('transactions'));

  }

  public function create(){
    if(\Auth::guest()){
      return redirect('home');

    }
    return view('transactions.create');
  }

  public function store(Requests\TransactionRequest $request){
    \Auth::user()->transactions()->save(new Transaction($request->all()));

    return redirect('transactions');
  }

  public function edit($id){
    if(\Auth::guest()){
      return redirect('transactions');

    }
    $transaction = Transaction::findOrFail($id);
    return view('transactions.edit', compact('transaction'));
  }

  public function update($id, Requests\TransactionRequest $request){
    $transaction = Transaction::findOrFail($id);
    $transaction->update($request->all());
    return redirect('transactions');
  }//
}
