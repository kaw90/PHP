<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Itens Controller
 *
 * @property \App\Model\Table\ItensTable $Itens
 *
 * @method \App\Model\Entity\Iten[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $itens = $this->paginate($this->Itens);

        $this->set(compact('itens'));
    }

    /**
     * View method
     *
     * @param string|null $id Iten id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iten = $this->Itens->get($id, [
            'contain' => [],
        ]);

        $this->set('iten', $iten);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iten = $this->Itens->newEntity();
        if ($this->request->is('post')) {
            $iten = $this->Itens->patchEntity($iten, $this->request->getData());
            if ($this->Itens->save($iten)) {
                $this->Flash->success(__('Cadastro Salvo Com Sucesso..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel cadastrar por favor tente novamente..'));
        }
        $this->set(compact('iten'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Iten id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iten = $this->Itens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iten = $this->Itens->patchEntity($iten, $this->request->getData());
            if ($this->Itens->save($iten)) {
                $this->Flash->success(__('Alterações Salvas com Sucesso..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel alterar por favor tente novamente..'));
        }
        $this->set(compact('iten'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Iten id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iten = $this->Itens->get($id);
        if ($this->Itens->delete($iten)) {
            $this->Flash->success(__('Excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel deletar por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
