<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Requisition Controller
 *
 * @property \App\Model\Table\RequisitionTable $Requisition
 * @method \App\Model\Entity\Requisition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequisitionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $requisition = $this->paginate($this->Requisition);

        $this->set(compact('requisition'));
    }

    /**
     * View method
     *
     * @param string|null $id Requisition id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requisition = $this->Requisition->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('requisition'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requisition = $this->Requisition->newEmptyEntity();
        if ($this->request->is('post')) {
            $requisition = $this->Requisition->patchEntity($requisition, $this->request->getData());
            if ($this->Requisition->save($requisition)) {
                $this->Flash->success(__('The requisition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisition could not be saved. Please, try again.'));
        }
        $this->set(compact('requisition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requisition id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requisition = $this->Requisition->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requisition = $this->Requisition->patchEntity($requisition, $this->request->getData());
            if ($this->Requisition->save($requisition)) {
                $this->Flash->success(__('The requisition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisition could not be saved. Please, try again.'));
        }
        $this->set(compact('requisition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requisition id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requisition = $this->Requisition->get($id);
        if ($this->Requisition->delete($requisition)) {
            $this->Flash->success(__('The requisition has been deleted.'));
        } else {
            $this->Flash->error(__('The requisition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
