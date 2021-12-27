<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 *
 * @method \App\Model\Entity\Paciente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PacientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pacientes = $this->paginate($this->Pacientes);

        $this->set(compact('pacientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => [],
        ]);

        $this->set('paciente', $paciente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paciente = $this->Pacientes->newEntity();
        if ($this->request->is('post')) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->getData());
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('The paciente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paciente could not be saved. Please, try again.'));
        }
        $this->set(compact('paciente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->getData());
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('The paciente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paciente could not be saved. Please, try again.'));
        }
        $this->set(compact('paciente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->success(__('The paciente has been deleted.'));
        } else {
            $this->Flash->error(__('The paciente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function eliminar()
    {
        if ($this->request->is('ajax')) {
            $this->viewBuilder()->setLayout('ajax');
            $this->autoRender = false;
            /** */
            $id = $this->request->getData('id');

            $paciente = $this->Pacientes->get($id);
            $mensaje = '';

            if ($this->Pacientes->delete($paciente)) {
                $mensaje = 'The patient #'.$id.' has been deleted.';
            } else {
                $mensaje = 'The patient #'.$id.' could not be deleted. Pleasse. Try again.';
            }
            /** */
            echo json_encode($mensaje);
            //echo json_encode($id);
        }
    }

    public function agregar()
    {
        if ($this->request->is('ajax')) {
            $paciente = $this->Pacientes->newEntity();
            
            if ($this->request->is('post')) {
                $paciente = $this->Pacientes->patchEntity($paciente, $this->request->getData());
                if ($this->Pacientes->save($paciente)) {
                    $this->Flash->success(__('The paciente has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }else{
                    $this->Flash->error(__('The paciente could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('paciente'));
        }
    }

    public function editar($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->getData());
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('The paciente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paciente could not be saved. Please, try again.'));
        }
        $this->set(compact('paciente'));
    }
}
