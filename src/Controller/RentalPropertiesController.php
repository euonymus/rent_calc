<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RentalProperties Controller
 *
 * @property \App\Model\Table\RentalPropertiesTable $RentalProperties
 */
class RentalPropertiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('rentalProperties', $this->paginate($this->RentalProperties));
        $this->set('_serialize', ['rentalProperties']);
    }

    /**
     * View method
     *
     * @param string|null $id Rental Property id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rentalProperty = $this->RentalProperties->get($id, [
            'contain' => ['PropertyConditions']
        ]);
        $this->set('rentalProperty', $rentalProperty);
        $this->set('_serialize', ['rentalProperty']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rentalProperty = $this->RentalProperties->newEntity();
        if ($this->request->is('post')) {
            $rentalProperty = $this->RentalProperties->patchEntity($rentalProperty, $this->request->data);
            if ($this->RentalProperties->save($rentalProperty)) {
                $this->Flash->success('The rental property has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rental property could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rentalProperty'));
        $this->set('_serialize', ['rentalProperty']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rental Property id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rentalProperty = $this->RentalProperties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rentalProperty = $this->RentalProperties->patchEntity($rentalProperty, $this->request->data);
            if ($this->RentalProperties->save($rentalProperty)) {
                $this->Flash->success('The rental property has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rental property could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rentalProperty'));
        $this->set('_serialize', ['rentalProperty']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rental Property id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rentalProperty = $this->RentalProperties->get($id);
        if ($this->RentalProperties->delete($rentalProperty)) {
            $this->Flash->success('The rental property has been deleted.');
        } else {
            $this->Flash->error('The rental property could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
