<?php

namespace App\Http\Controllers;

use App\Repositories\TransactionsRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @var TransactionsRepository $transactionsRepository*/
    private $transactionsRepository;

    /**
     * Create a new controller instance.
     * @param TransactionsRepository $transactionsRepo
     * @return void
     */
    public function __construct(TransactionsRepository $transactionsRepo)
    {
        $this->middleware('auth');
        $this->transactionsRepository = $transactionsRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_transactions = $this->transactionsRepository->model()::count();
        return view('home')->with(['total_transactions' => $total_transactions]);
    }
}
