<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ongs Controller
 *
 * @property \App\Model\Table\OngsTable $Ongs
 *
 * @method \App\Model\Entity\Ong[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OngsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ongs = $this->paginate($this->Ongs);

        $this->set(compact('ongs'));
    }

    /**
     * View method
     *
     * @param string|null $id Ong id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ong = $this->Ongs->get($id, [
            'contain' => []
        ]);

        $this->set('ong', $ong);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ong = $this->Ongs->newEntity();
        if ($this->request->is('post')) {
            $ong = $this->Ongs->patchEntity($ong, $this->request->getData());
            if ($this->Ongs->save($ong)) {
                $this->Flash->success(__('The ong has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ong could not be saved. Please, try again.'));
        }
        $this->set(compact('ong'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ong id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ong = $this->Ongs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ong = $this->Ongs->patchEntity($ong, $this->request->getData());
            if ($this->Ongs->save($ong)) {
                $this->Flash->success(__('The ong has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ong could not be saved. Please, try again.'));
        }
        $this->set(compact('ong'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ong id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ong = $this->Ongs->get($id);
        if ($this->Ongs->delete($ong)) {
            $this->Flash->success(__('The ong has been deleted.'));
        } else {
            $this->Flash->error(__('The ong could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
