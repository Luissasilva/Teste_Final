<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacao;
use App\Models\Comentario;
use App\Models\Like;
use App\Models\Deslike;


class PublicacaoController extends Controller
{
    public function index()
    {
        $publicacoes = Publicacao::all();
        $likes_quant = Like::count();
        $deslikes_quant = Deslike::count();
        $likes_quant_user = Like::where('user_id', auth()->id())->count();
        $deslikes_quant_user = Deslike::where('user_id', auth()->id())->count();
        
        return view('index', compact('publicacoes', 'likes_quant', 'deslikes_quant' ,'likes_quant_user', 'deslikes_quant_user'));
    }

    
    public function like(Publicacao $publicacao)
    {
        $user = auth()->user();
        if ($publicacao->likes()->where('user_id', $user->id)->exists()) {
            $publicacao->likes()->where('user_id', $user->id)->delete();
        } else {
            if ($publicacao->deslikes()->where('user_id', $user->id)->exists()) {
                $publicacao->deslikes()->where('user_id', $user->id)->delete();
            }
            $publicacao->likes()->create(['user_id' => $user->id]);
        }



        return back();
    }

    public function deslike(Publicacao $publicacao)
    {
        $user = auth()->user();
        if ($publicacao->deslikes()->where('user_id', $user->id)->exists()) {
            $publicacao->deslikes()->where('user_id', $user->id)->delete(); // remove deslike
        } else {
            if ($publicacao->likes()->where('user_id', $user->id)->exists()) {
                $publicacao->likes()->where('user_id', $user->id)->delete();
            }
            $publicacao->deslikes()->create(['user_id' => $user->id]);
        }

        return back();
    }

}

