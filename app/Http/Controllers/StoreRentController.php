<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MoviesRented;
use Inertia\Inertia;
use DateTime;

class StoreRentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            $next_date = new DateTime(now());
            $next_date = $next_date->modify('+48 hours')->format('Y-m-d H:i:s');

            DB::beginTransaction();
            $news = MoviesRented::create([
                'movie_id' => $request->movie_id,
                'user_id' => $request->user_id,
                'expiration_date' => $next_date,
                'movie_name' => $request->movie_name,
            ]);
            DB::commit();

            $return = response()->json([
                'error' => false,
                'message' => "O aluguel do titulo foi concluido com sucesso",
            ], 200);
            return Inertia::render('Dashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            $return = response()->json([
                'error' => true,
                'message' => "Não foi possivel cadastrar a alugar este titulo. Por favor entre em contato com o administrador do sistema.",
                "serve_error_message" => $e->getMessage()
            ], 402);
            return Inertia::render('Dashboard');
        }
        
    }
}
