<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerPedido extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dados = DB::select('SELECT c.nome,c.preco from usuarios u,cardapios c,pedido_cardapio pc,pedidos p WHERE p.id_usuario = u.id and pc.id_pedido = p.id and pc.id_cardapio = c.id ');
        $dados = DB::select('select p.id, u.nome,p.total,p.status from usuarios u,pedidos p where p.id_usuario=u.id order by p.id desc');

        return view('pedido.list',compact('dados'));
       // return $dados;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cardapio = $this->buscarcardapio();

        return view('pedido.create',compact('cardapio'));
        //return $cardapio;
    }

    public function buscarcpf(Request $request)
    {
        if($request->post('cpf') == null ){
            flash("Cpf não existe!")->error();
            return redirect()->route('pedido.create');
        }else {
            $dado = Usuario::all()->where('cpf', $request->post('cpf'))->values();
            if (sizeof($dado)==0){
                flash("Cpf não existe!")->error();
                return redirect()->route('pedido.create');
            }
            $dado = $dado[0];
            $cardapio = $this->buscarcardapio();
            $busca = DB::select('SELECT p.id from pedidos p,usuarios u WHERE p.id_usuario = u.id and u.cpf= :cpf and p.status = :status', ['cpf' => $request->post('cpf'), 'status' => 'Aberto']);
            if (sizeof($busca) != 0) {
                $pedido = DB::select("select c.id,c.nome,c.preco, COUNT(c.id) as 'quant' from cardapios c,pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and pc.id_pedido= :id GROUP by c.id
", ['id' => $busca[0]->id]);
                $total = DB::select('select p.total from pedidos p where id=?', [$busca[0]->id]);
                $total = $total[0]->total;
                return view('pedido.create', compact('dado', 'cardapio', 'pedido', 'total'));
            }
            return view('pedido.create', compact('dado', 'cardapio'));
            //return $dado[0];
        }

    }
    public function buscarcardapio()
    {
        $cardapio = Cardapio::all()->values();
        return $cardapio;

    }
    public function adicionarPedido(Request $request)
    {
        $id_usuario = $request->post('id_usuario');
        $dado = $this->buscarUsuarioId($id_usuario);

        $cardapio = $this->buscarcardapio();
        $busca = DB::select('SELECT p.id from pedidos p,usuarios u WHERE p.id_usuario = u.id and u.id= :id and p.status = :status',['id'=>$id_usuario,'status'=>'Aberto']);
        if (sizeof($busca)==0){

            DB::insert('insert into pedidos(id_usuario,total,status) values (?,?,?)',[$id_usuario,0,'Aberto']);
            $id_pedido = DB::select('select p.id from pedidos p,usuarios u where u.id =? and p.status=?',[$id_usuario,'Aberto']);
            $id_pedido=$id_pedido[0]->id;
        }else{
            $id_pedido = $busca[0]->id;
        }
        DB::insert('insert into pedido_cardapio(id_pedido,id_cardapio) values (?,?)',[$id_pedido,$request->post('id_cardapio')]);
        $valor = DB::select('select preco from cardapios where id=?',[$request->post('id_cardapio')]);
        $total = DB::select('select total from pedidos where id = ?',[$id_pedido]);
        $total = $total[0]->total + $valor[0]->preco;
        DB::update('update pedidos set total=? where id=?',[$total,$id_pedido]);
        $pedido = DB::select("select c.id,c.nome,c.preco, COUNT(c.id) as 'quant' from cardapios c,pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and pc.id_pedido= :id GROUP by c.id",['id'=>$id_pedido]);
        $total = DB::select('select p.total from pedidos p where id=?',[$id_pedido]);
        $total = $total[0]->total;

        return view('pedido.create',compact('pedido','dado','cardapio','total','id_pedido'));



    }
    public function adicionarPedidoEditar(Request $request)
    {
        $id_usuario = $request->post('id_usuario');
        $dado = $this->buscarUsuarioId($id_usuario);

        $cardapio = $this->buscarcardapio();
        $busca = DB::select('SELECT p.id from pedidos p,usuarios u WHERE p.id_usuario = u.id and u.id= :id and (p.status = :status or p.status = :status1 )',['id'=>$id_usuario,'status'=>"Aberto",'status1'=>"Encaminhado"]);

        $id_pedido = $busca[0]->id;

        DB::insert('insert into pedido_cardapio(id_pedido,id_cardapio) values (?,?)',[$id_pedido,$request->post('id_cardapio')]);
        $valor = DB::select('select preco from cardapios where id=?',[$request->post('id_cardapio')]);
        $total = DB::select('select total from pedidos where id = ?',[$id_pedido]);
        $total = $total[0]->total + $valor[0]->preco;
        DB::update('update pedidos set total=? where id=?',[$total,$id_pedido]);
        $pedido = DB::select("select c.id,c.nome,c.preco, COUNT(c.id) as 'quant' from cardapios c,pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and pc.id_pedido= :id GROUP by c.id
",['id'=>$busca[0]->id]);
        $total = DB::select('select p.total from pedidos p where id=?',[$busca[0]->id]);
        $total = $total[0]->total;
        return view('pedido.edit',compact('pedido','dado','cardapio','total','id_pedido'));



    }
    public function buscarUsuarioId($id){
        $dado = Usuario::all()->where('id',$id)->values();
        $dado = $dado[0];
        return $dado;
    }

    public function finalizar(Request $request)
    {

        $busca = DB::select('select p.id,p.total from pedidos p,cardapios c,usuarios u where p.id = :id and u.id = :id_usuario',[$request->post('id_pedido'),'id_usuario'=>$request->post('id_usuario')]);
       // if($busca[0]->total==0){
           // DB::update('update pedidos set status = :status where id = :id',['status'=>'Cancelado','id'=>$busca[0]->id]);
           // flash("Pedido cancelado!")->error();
       if (sizeof($busca)==0){
           DB::update('update pedidos set status = :status where id_usuario = :id and status = :status1',['status'=>'Cancelado','status1'=>'Aberto','id'=>$request->post('id_usuario')]);
           flash("Pedido cancelado!")->error();
        }
        else{
            DB::update('update pedidos set status = :status where id = :id',['status'=>'Encaminhado','id'=>$busca[0]->id]);
            flash("Pedido encaminhado!")->important();
        }
        return redirect()->route('pedido.index');
        //return $request->post('id_pedido');
    }
    public function salvar(Request $request)
    {

        $busca = DB::select('select p.id,p.total from pedidos p,cardapios c,usuarios u where p.id = :id and u.id = :id_usuario limit 1',[$request->post('id_pedido'),'id_usuario'=>$request->post('id_usuario')]);
      if($busca[0]->total==0){
            DB::update('update pedidos set status = :status where id = :id',['status'=>'Cancelado','id'=>$busca[0]->id]);
            flash("Pedido cancelado!")->error();
        }else{
            DB::update('update pedidos set status = :status where id = :id',['status'=>'Encaminhado','id'=>$busca[0]->id]);
            flash("Pedido encaminhado!")->important();
        }
        return redirect()->route('pedido.index');
       // return $request->post('id_pedido');

    }
    public function entregar(Request $request)
    {
        $id_pedido = $request->post('id_pedido');
        $r = DB::select('select status from pedidos where id = :id and (status = :status or status = :status1)',['id'=>$id_pedido,'status'=>"Entregue",'status1'=>"Cancelado"]);
        if (sizeof($r)==0){
            DB::update('update pedidos set status = :status where id = :id',['status'=>'Entregue','id'=>$id_pedido]);
            flash("O pedido foi entregue!")->success();
        }

        return redirect()->route('pedido.index');

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
        $dados1 = DB::select('SELECT u.nome,u.sobrenome,u.cpf,u.telefone,u.cidade,u.bairro,u.rua,u.numero,p.total,p.status from usuarios u,pedidos p where p.id_usuario = u.id and p.id ='.$id);
        $dados2 = DB::select('SELECT c.nome as "nome_c",c.preco as "preco_c",COUNT(c.nome) as "quant" from cardapios c, pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and p.id = :id group by c.nome',['id'=>$id]);

        $dado = array('nome'=>$dados1[0]->nome,'sobrenome'=>$dados1[0]->sobrenome,'cpf'=>$dados1[0]->cpf,'telefone'=>$dados1[0]->telefone,
            'cidade'=>$dados1[0]->cidade,'bairro'=>$dados1[0]->bairro,'rua'=>$dados1[0]->rua,'numero'=>$dados1[0]->numero,'status'=>$dados1[0]->status,'total'=>$dados1[0]->total,'itens'=>$dados2);
        return view('pedido.view',compact('dado'));

      // return $dado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_usuario = DB::select('select id_usuario from pedidos where id= :id',['id'=>$id]);
        $dado = DB::select('select * from usuarios where id = :id',['id'=>$id_usuario[0]->id_usuario]);
        $dado = $dado[0];
        $cardapio = $this->buscarcardapio();

        $id_pedido = $id;

            $pedido = DB::select("select c.id,c.nome,c.preco, COUNT(c.id) as 'quant' from cardapios c,pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and pc.id_pedido= :id GROUP by c.id
",['id'=>$id]);
            $total = DB::select('select p.total from pedidos p where id=?',[$id]);
            $total = $total[0]->total;
            $id_pedido = $id;
            return view('pedido.edit',compact('dado','cardapio','pedido','total','id_pedido'));


       // return $dado;
        return view('pedido.edit',compact('pedido','dado','cardapio','total','id_pedido'));

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

    public function excluirItem(Request $request)
    {
        $busca = DB::select('select p.id,p.total,c.preco,pc.id as "id_pc" from pedidos p,cardapios c,pedido_cardapio pc,usuarios u where pc.id_cardapio = c.id and pc.id_pedido = p.id and p.id= :id and u.id = :id_usuario LIMIT 1',['id'=>$request->post('id_pedido'),'id_usuario'=>$request->post('id_usuario')]);
        $total = $busca[0]->total - $busca[0]->preco;
        DB::update('update pedidos set total= :total where id= :id',[$total,$busca[0]->id]);
        DB::delete('delete from pedido_cardapio where id = :id',['id'=>$busca[0]->id_pc]);

        $pedido = DB::select("select c.id,c.nome,c.preco, COUNT(c.id) as 'quant' from cardapios c,pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and pc.id_pedido= :id GROUP by c.id
",['id'=>$busca[0]->id]);

        $id_usuario = $request->post('id_usuario');
        $dado = $this->buscarUsuarioId($id_usuario);

        $cardapio = $this->buscarcardapio();
        return view('pedido.create',compact('pedido','dado','cardapio','total'));

        //return $request['id_pedido'];
    }
    public function excluirItemEditar(Request $request)
    {
        $busca = DB::select('select p.id,p.total,c.preco,pc.id as "id_pc" from pedidos p,cardapios c,pedido_cardapio pc,usuarios u where pc.id_cardapio = c.id and pc.id_pedido = p.id and p.id= :id and u.id = :id_usuario LIMIT 1',['id'=>$request->post('id_pedido'),'id_usuario'=>$request->post('id_usuario')]);
        $total = $busca[0]->total - $busca[0]->preco;
        DB::update('update pedidos set total= :total where id= :id',[$total,$busca[0]->id]);
        DB::delete('delete from pedido_cardapio where id = :id',['id'=>$busca[0]->id_pc]);

        $pedido = DB::select("select c.id,c.nome,c.preco, COUNT(c.id) as 'quant' from cardapios c,pedido_cardapio pc,pedidos p where pc.id_cardapio = c.id and pc.id_pedido = p.id and pc.id_pedido= :id GROUP by c.id
",['id'=>$busca[0]->id]);

        $id_usuario = $request->post('id_usuario');
        $dado = $this->buscarUsuarioId($id_usuario);
        $id_pedido = $request->post('id_pedido');
        $cardapio = $this->buscarcardapio();
        return view('pedido.edit',compact('pedido','dado','cardapio','total','id_pedido'));

        //return $request['id_pedido'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

    }
}
