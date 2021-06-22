<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comprador Controller
 *
 * @property \App\Model\Table\CompradorTable $Comprador
 *
 * @method \App\Model\Entity\Comprador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompradorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $comprador = $this->paginate($this->Comprador);

        $this->set(compact('comprador'));
    }

    /**
     * View method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comprador = $this->Comprador->get($id, [
            'contain' => [],
        ]);

        $this->set('comprador', $comprador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comprador = $this->Comprador->newEntity();
        if ($this->request->is('post')) {
            $comprador = $this->Comprador->patchEntity($comprador, $this->request->getData());
            if ($this->Comprador->save($comprador)) {
                $this->Flash->success(__('Cadastro Salvo Com Sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ops, nao foi possivel cadastrar, tente mais uma vez.'));
        }
        $this->set(compact('comprador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comprador = $this->Comprador->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comprador = $this->Comprador->patchEntity($comprador, $this->request->getData());
            if ($this->Comprador->save($comprador)) {
                $this->Flash->success(__('Alterações Salvas com Sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel alterar o cadastro por favor tente novamente.'));
        }
        $this->set(compact('comprador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comprador = $this->Comprador->get($id);
        if ($this->Comprador->delete($comprador)) {
            $this->Flash->success(__('Cadastro excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível excluir o cadastro atual.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
