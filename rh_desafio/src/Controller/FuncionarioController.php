<?php
namespace App\Controller;

use App\Controller\AppController;



class FuncionarioController extends AppController {

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');

    }


    public function index(){


        $funcionarios = $this->Funcionario->find('all');

        $this->set(compact('funcionarios'));
    }

    /**
     * Método para Inserir um novo Funcionário.
     *
     */

    public function add(){

        $funcionario = $this->Funcionario->newEntity();




        if($this->request->is('post')){

            $dados = $this->request->getData();

            $funcionario->nome =$dados['nome'];

            $data =$dados['data_nascimento'];
            $data_nascimento = $this->formataData($data);
            $funcionario->data_nascimento =$data_nascimento;

            $funcionario->cpf=$dados["cpf"];


           if ($this->Funcionario->save($funcionario)) {
            $this->Flash->success(__('Funcionário incluído com Sucesso.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Não foi possível incluir o Funcionário.'));

        }

        $this->set('funcionario', $funcionario);

    }

     /**
     * Método para  Visualizar um  Funcionário.
     *
     */
    public function view($id = null ){

        $funcionario = $this->Funcionario->get($id);
        $this->set(compact('funcionario'));

    }

    /**
     * Método para excluir Funcionário
    */

    public function delete($id){

        $this->request->allowMethod(['post','delete']);

        $funcionario = $this->Funcionario->get($id);

        if ($this->Funcionario->delete($funcionario)) {
            $this->Flash->success(__('Funcionario: {0} foi excluído com sucesso.', h($funcionario->nome)));
            return $this->redirect(['action' => 'index']);
        }

    }

    protected function formataData($data){

        $data = str_replace('/', '', $data);
        $dia = substr($data, 0, 2);
        $mes = substr($data, 2, 2);
        $ano = substr($data, 4, 4);
        $data = $ano . '-' . $mes . '-' . $dia;
        return $data;
    }



}
