<?php
namespace App\Controller;

use App\Controller\AppController;





class VagasController extends AppController {

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
        $this->loadModel('ResponsavelVaga');

    }


    public function index(){


        $vagas = $this->Vagas->find('all');


        $this->set(compact('vagas'));
       // $this->set(compact('funcionarios'));

    }

    /**
     * Método para Inserir uma nova Vaga.
     *
     */

    public function add(){

        $this->loadModel('Funcionario');

        $funcionarios = $this->Funcionario->find('all');




        $vaga = $this->Vagas->newEntity();


        if($this->request->is('post')){


           $dados = $this->request->getData();

           $responsaveis = $dados['responsaveis'];




           $data =$dados['data_criacao'];
           $data_criacao = $this->formataData($data);


           $vaga->titulo= $dados['titulo'];
           $vaga ->nome_cliente = $dados['nome_cliente'];
           $vaga ->data_criacao = $data_criacao;
           $vaga->prazo_fechamento =$dados['prazo_fechamento'];



          if ($this->Vagas->save($vaga)) {

            $id_vaga= 0;

            $vaga_id = $this->Vagas->find()->select(['idvagas'])->limit(1)->orderDesc('idvagas');

            foreach($vaga_id as $item){
               $id_vaga = $item['idvagas'];
            }

            /**
             * Inclusão dos responsáveis pela vaga
            */
            for ($i=0; $i < count($responsaveis); $i++) {

               $resp = ['id_funcionario'=>$responsaveis[$i],'id_vaga'=>$id_vaga];

               $this->insertResponsavel($resp);


            }

            $this->Flash->success(__('Vaga incluída com Sucesso.'));
            return $this->redirect(['action' => 'index']);
           }
        $this->Flash->error(__('Não foi possível incluir a Vaga.'));

        }

        $this->set('vaga', $vaga);
        $this->set('funcionarios', $funcionarios);

    }

     /**
     * Método para  Visualizar uma  Vaga.
     *
     */
    public function view($id = null ){

        $vaga = $this->Vagas->get($id);
        $this->set(compact('vaga'));

    }

    /**
     * Método para excluir Vaga   */

    public function delete($id){

        $this->request->allowMethod(['post','delete']);

        $vaga = $this->Vagas->get($id);

        $responsavel = $this->ResponsavelVaga->find()->where(['id_vaga'=>$id]);

        foreach($responsavel as $resp){
            $this->deleteResponsavel($resp);
        }

         if ( $this->Vagas->delete($vaga)) {
            $this->Flash->success(__('Vaga: {0} foi excluída com sucesso.', h($vaga->titulo)));
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

    /**
     * Método para inclusão dos responsáveis pela Vaga
     */
    protected function insertResponsavel($dados){



        $responsavel_vaga = $this->ResponsavelVaga->newEntity();
        $this->ResponsavelVaga->patchEntity($responsavel_vaga,$dados);
        $this->ResponsavelVaga->save($responsavel_vaga);


    }

    /**
     * Método para exclusão de responsáveis
     */

    protected function deleteResponsavel($responsavel){

        $this->ResponsavelVaga->delete($responsavel);



    }

}
