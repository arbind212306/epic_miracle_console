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
        $client = TableRegistry::get('BusinessUnit');
        $result_client = $client->find('all', ['fields' => ['bu_name','id']]);
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
        
        
            $client = TableRegistry::get('Industry');
            $client_details = $client->find('all', ['fields' => ['id', 'industry_name'], 
                'conditions' => ['bu_id' => $id]])->toArray();
           
            
            $result = '';
            foreach ($client_details as $key => $d){
              
        $result .= '<option value="' . $d->id . '" >' . $d->industry_name . '</option>';
         
    
    
               
            
            }
        header('Content-Type: application/json');
        echo  json_encode(  $result);
            
           
        }
    }
    

public function clientname(){
        if($this->request->is('ajax')){
            $this->autoRender = false;
            $id = $this->request->data('id');
            $client = TableRegistry::get('clientmaster');
            $client_details = $client->find('all', ['fields' => ['client_id', 'client_name'], 
                'conditions' => ['industry_name' => $id]])->toArray();
           
            $result = '';
            foreach ($client_details as $key => $d){
              
        $result .= '<option value="' . $d->client_id . '" >' . $d->client_name . '</option>';
                }
        header('Content-Type: application/json');
        echo  json_encode(  $result);
                     
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
    
    public function getproductcode()
    {
        if($this->request->is('ajax')){
            $this->autoRender = false;
            // var_dump($_POST);die();
            $id = $this->request->data('id');
            $service = TableRegistry::get('Services');
             $service_details = $service->find('all',array('fields' => array('product_id')))->where(['id' => $id]);
             $result = [];
            foreach ($service_details as $service_details){
                $result[] = $service_details->toArray();
            }
            if(!empty($result)){
                $result = json_encode($result);
            }
            echo $result;
           

        }
    }

}