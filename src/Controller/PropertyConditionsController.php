<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropertyConditions Controller
 *
 * @property \App\Model\Table\PropertyConditionsTable $PropertyConditions
 */
class PropertyConditionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RentalProperties']
        ];
        $this->set('propertyConditions', $this->paginate($this->PropertyConditions));
        $this->set('_serialize', ['propertyConditions']);
    }

    /**
     * View method
     *
     * @param string|null $id Property Condition id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propertyCondition = $this->PropertyConditions->get($id, [
            'contain' => ['RentalProperties']
        ]);
        $this->set('propertyCondition', $propertyCondition);
        $this->set('_serialize', ['propertyCondition']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propertyCondition = $this->PropertyConditions->newEntity();
        if ($this->request->is('post')) {
            $propertyCondition = $this->PropertyConditions->patchEntity($propertyCondition, $this->request->data);
            if ($this->PropertyConditions->save($propertyCondition)) {
                $this->Flash->success('The property condition has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The property condition could not be saved. Please, try again.');
            }
        }
        $rentalProperties = $this->PropertyConditions->RentalProperties->find('list', ['limit' => 200]);
        $this->set(compact('propertyCondition', 'rentalProperties'));
        $this->set('_serialize', ['propertyCondition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Property Condition id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propertyCondition = $this->PropertyConditions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertyCondition = $this->PropertyConditions->patchEntity($propertyCondition, $this->request->data);
            if ($this->PropertyConditions->save($propertyCondition)) {
                $this->Flash->success('The property condition has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The property condition could not be saved. Please, try again.');
            }
        }
        $rentalProperties = $this->PropertyConditions->RentalProperties->find('list', ['limit' => 200]);
        $this->set(compact('propertyCondition', 'rentalProperties'));
        $this->set('_serialize', ['propertyCondition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Property Condition id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propertyCondition = $this->PropertyConditions->get($id);
        if ($this->PropertyConditions->delete($propertyCondition)) {
            $this->Flash->success('The property condition has been deleted.');
        } else {
            $this->Flash->error('The property condition could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
