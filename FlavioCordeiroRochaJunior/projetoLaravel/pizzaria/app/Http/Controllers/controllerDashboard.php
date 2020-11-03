<?php
namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerDashboard extends Controller
{
    public function index(){
        $total_usuario = DB::select('select COUNT(id) as "total" from usuarios');
        $total_usuario = $total_usuario[0];
        $total_cardapio = DB::select('select COUNT(id) as "total" from cardapios');
        $total_cardapio = $total_cardapio[0];
        $total_pedido = DB::select('select COUNT(id) as "total" from pedidos');
        $total_pedido = $total_pedido[0];
        $total_pedido_aberto = DB::select('SELECT COUNT(id) as "total" from pedidos where (status = :status or status = :status1)',['status'=>"Aberto",'status1'=>"Encaminhado"]);
        $total_pedido_aberto = $total_pedido_aberto[0];
        $total_pedido_entregue = DB::select('SELECT COUNT(id) as "total" from pedidos where status = :status',['status'=>"Entregue"]);
        $total_pedido_entregue = $total_pedido_entregue[0];
        return view('dashboard',compact('total_usuario','total_cardapio','total_pedido','total_pedido_aberto','total_pedido_entregue'));
    }
}
