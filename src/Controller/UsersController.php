<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;
use Cake\Event\Event;

class UsersController extends AppController {
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('admin_layout');
    }
    
//    public function beforeFilter(Event $event){
//        if(in_array($this->request->action, ['getClientDeatils'])){
//            $this->getEventManager()->off($this->Csrf);
//        }
//    }
    
    public function dashboard() {
        
    }
    
    public function addService(){
        $client = TableRegistry::get('Clientmaster');
        $result_client = $client->find('all', ['fields' => ['client_id', 'client_name', 'client_type']]);
        $result = []; 
        foreach($result_client as $d){
            $result[] = $d->toArray();
        }
        $this->set(compact('result'));
    }
    
    public function getClientDetails(){
        if($this->request->is('ajax')){
            $this->autoRender = false;
            $id = $this->request->data('id');
            $client = TableRegistry::get('Clientmaster');
            $client_details = $client->find('all', ['fields' => ['client_name', 'client_type'], 
                'conditions' => ['client_id' => $id]]);
            $result = [];
            foreach ($client_details as $d){
                $result[] = $d->toArray();
            }
            if(!empty($result)){
                $result = json_encode($result);
            }
            echo $result;
        }
    }
    
    public function getProductDetails(){
        if($this->request->is('ajax')){
            $this->autoRender = false;
            $this->loadModel('Services');
            $result = $this->Services->getServiceDetails();
            $html = '';
            $html .= '<option selected="selected">- Select -</option>';
            foreach ($result as $value){
                $html .= '<option value="'.$value['id'].'">'.$value['product_name'].'</option>';
            }
            echo $html;
        }
    }
    
}