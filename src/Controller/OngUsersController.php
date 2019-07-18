<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OngUsers Controller
 *
 * @property \App\Model\Table\OngUsersTable $OngUsers
 *
 * @method \App\Model\Entity\OngUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OngUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ongUsers = $this->paginate($this->OngUsers);

        $this->set(compact('ongUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Ong User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ongUser = $this->OngUsers->get($id, [
            'contain' => []
        ]);

        $this->set('ongUser', $ongUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ongUser = $this->OngUsers->newEntity();
        if ($this->request->is('post')) {
            $ongUser = $this->OngUsers->patchEntity($ongUser, $this->request->getData());
            if ($this->OngUsers->save($ongUser)) {
                $this->Flash->success(__('The ong user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ong user could not be saved. Please, try again.'));
        }
        $this->set(compact('ongUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ong User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ongUser = $this->OngUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ongUser = $this->OngUsers->patchEntity($ongUser, $this->request->getData());
            if ($this->OngUsers->save($ongUser)) {
                $this->Flash->success(__('The ong user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ong user could not be saved. Please, try again.'));
        }
        $this->set(compact('ongUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ong User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ongUser = $this->OngUsers->get($id);
        if ($this->OngUsers->delete($ongUser)) {
            $this->Flash->success(__('The ong user has been deleted.'));
        } else {
            $this->Flash->error(__('The ong user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
