<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendas Controller
 *
 * @property \App\Model\Table\VendasTable $Vendas
 *
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $vendas = $this->paginate($this->Vendas);

        $this->set(compact('vendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => [],
        ]);

        $this->set('venda', $venda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venda = $this->Vendas->newEntity();
        if ($this->request->is('post')) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('Venda Salva Com Sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ops, nao foi possivel realizar esta ação, tente mais uma vez.'));
        }
        $this->set(compact('venda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('Alterações Salvas com Sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel alterar o cadastro por favor tente novamente.'));
        }
        $this->set(compact('venda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('Excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel deletar por favor tente novamente..'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
