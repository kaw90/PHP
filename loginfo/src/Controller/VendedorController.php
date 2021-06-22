<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendedor Controller
 *
 * @property \App\Model\Table\VendedorTable $Vendedor
 *
 * @method \App\Model\Entity\Vendedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VendedorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $vendedor = $this->paginate($this->Vendedor);

        $this->set(compact('vendedor'));
    }

    /**
     * View method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendedor = $this->Vendedor->get($id, [
            'contain' => [],
        ]);

        $this->set('vendedor', $vendedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendedor = $this->Vendedor->newEntity();
        if ($this->request->is('post')) {
            $vendedor = $this->Vendedor->patchEntity($vendedor, $this->request->getData());
            if ($this->Vendedor->save($vendedor)) {
                $this->Flash->success(__('Cadastro Salvo Com Sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ops, nao foi possivel cadastrar, tente mais uma vez.'));
            
        }
        $this->set(compact('vendedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendedor = $this->Vendedor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendedor = $this->Vendedor->patchEntity($vendedor, $this->request->getData());
            if ($this->Vendedor->save($vendedor)) {
                $this->Flash->success(__('Alterações Salvas com Sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel alterar o cadastro por favor tente novamente.'));
        }
        $this->set(compact('vendedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendedor = $this->Vendedor->get($id);
        if ($this->Vendedor->delete($vendedor)) {
            $this->Flash->success(__('Cadastro excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível excluir o cadastro atual.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
}
