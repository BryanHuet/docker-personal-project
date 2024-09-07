<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * House Controller
 *
 * @property \App\Model\Table\HouseTable $House
 */
class HouseController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->House->find();
        $house = $this->paginate($query);

        $this->set(compact('house'));
    }

    /**
     * View method
     *
     * @param string|null $id House id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $house = $this->House->get($id, contain: []);
        $this->set(compact('house'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $house = $this->House->newEmptyEntity();
        if ($this->request->is('post')) {
            $house = $this->House->patchEntity($house, $this->request->getData());
            if ($this->House->save($house)) {
                $this->Flash->success(__('The house has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The house could not be saved. Please, try again.'));
        }
        $this->set(compact('house'));
    }

    /**
     * Edit method
     *
     * @param string|null $id House id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $house = $this->House->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $house = $this->House->patchEntity($house, $this->request->getData());
            if ($this->House->save($house)) {
                $this->Flash->success(__('The house has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The house could not be saved. Please, try again.'));
        }
        $this->set(compact('house'));
    }

    /**
     * Delete method
     *
     * @param string|null $id House id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $house = $this->House->get($id);
        if ($this->House->delete($house)) {
            $this->Flash->success(__('The house has been deleted.'));
        } else {
            $this->Flash->error(__('The house could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
