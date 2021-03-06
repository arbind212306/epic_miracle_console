<?php
namespace App\Controller;
ob_start();
use App\Controller\AppController;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Network\Request;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

  public function index()
  {
    $this->viewBuilder()->layout('admin_layout');

  }


    public function clientAdd()
    {$value = 2;
      $this->viewBuilder()->layout('admin_layout');
      $service_lists = $this->getservices();
	   $time = Time::now();
  $client = TableRegistry::get('BusinessUnit');
        $result_client = $client->find('all', ['fields' => ['bu_name','id']]);
        $result = []; 
        foreach($result_client as $d){
            $result[] = $d->toArray();
        }  

    if($this->request->is('post')){

      $client_type = $this->request->data('client_type');
      $client_name = $this->request->data('client_name');
      $industry_name = $this->request->data('industry_name');
      $bu = $this->request->data('bu_id');
      $email_id = $this->request->data('email_id');
      $phone = $this->request->data('phone');

      $fax= $this->request->data('fax');
      $client_code = $this->request->data('client_code');
      $cp_name = $this->request->data('cp_name');
      $cp_mobile = $this->request->data('cp_mobile');
      $cp_email_id = $this->request->data('cp_email_id');
      $description = $this->request->data('description');
      $status = $this->request->data('status');
      $website = $this->request->data('website');

      $service_needed = $this->request->data('service_needed');
      $service_multiple=implode(",", $service_needed);
      $address1 = $this->request->data('address1');
      $address2 = $this->request->data('address2');
      $city = $this->request->data('city');
      $state = $this->request->data('state');

      $country = $this->request->data('country');
      $zip = $this->request->data('zip');
      $created_by = $this->request->data('created_by');
      $activation_date = $this->request->data('activation_date');
      $deactivation_date= $this->request->data('deactivation_date');
    $password= $this->request->data('password');
      $usersTable = TableRegistry::get('clientmaster');
      $temFilePath = $_FILES['logo']['tmp_name'];
      if ($temFilePath != '') {
                            //set our new file path
        $fileName[] = $_FILES['logo']['name'];
        $files = time() . "_" . str_replace("", "_", $_FILES['logo']['name']);
        $newFilePath = WWW_ROOT . DS . 'upload' . DS . $files;
      }
      move_uploaded_file($temFilePath, $newFilePath);
      
      $usersdata = $usersTable->newEntity();
      $usersdata->client_type = $client_type;
      $usersdata->client_name = $client_name;
      $usersdata->industry_name = $industry_name;
      $usersdata->bu = $bu;
      $usersdata->email_id = $email_id;
      $usersdata->phone = $phone;
      $usersdata->fax = $fax;
      $usersdata->client_code = $client_code;
      $usersdata->cp_name = $cp_name;
      $usersdata->cp_mobile = $cp_mobile;
      $usersdata->cp_email_id = $cp_email_id;
      $usersdata->description = $description;
      $usersdata->status = $status;
      $usersdata->website = $website;
      $usersdata->service_needed = $service_multiple;
      $usersdata->address1 = $address1;
      $usersdata->address2 = $address2;
      $usersdata->city = $city;
      $usersdata->created_on = $time;
      $usersdata->state = $state;
      $usersdata->country = $country;
      $usersdata->zip = $zip;
      $usersdata->created_by = $created_by;
      $usersdata->activation_date = $activation_date;
      $usersdata->deactivation_date = $deactivation_date;
      $usersdata->logo=  $files;
  $usersdata->password=  $password;
      //pr($usersdata);die;
      if( $usersTable->save($usersdata)){

        $message = "Record has been successfully insert";
        $this->Flash->set($message, ['element' => 'success']);

      }

    }

    $this->set(compact('service_lists','result','value'));
  }
  public function getservices()
  {
    // $this->autoRender = false;
    $services = TableRegistry::get('Services');
    $services_list = $services->find('all', array('fields' => array('product_name','id'), 'conditions' => array('status' => 1)))->toArray();
      // return $services_list;

    $html = '';
    foreach ($services_list as $key => $value) {
      $html .= '<option value="' . $value->id . '" >' . $value->product_name . '</option>';
    }

    return $html;
  }

  
  public function viewClients()
  { $value = 2;
    $this->viewBuilder()->setlayout('admin_layout');
    $client_details = TableRegistry::get('clientmasters');
    $client_list = $client_details->find('all',array('fields' => array('client_id','client_name','client_type','mobile','logo','status')))->toArray();
    $this->set(compact('client_list','value'));

  }

  public function editclient()
  {
    $this->autoRender = false;
    if($this->request->is('ajax'))
    {
            // var_dump($_POST);die();
      $id = $this->request->data('client_id');
      $client_detail = TableRegistry::get('clientmasters');
      $client_list = $client_detail->find('all')->where(['client_id' => $id])->toArray();
      echo(json_encode($client_list));
      
    }
  }

  public function deleteclient()
  {
    $this->autoRender = false;
    if($this->request->is('ajax')){
            // var_dump($_POST);die;
      $id = $this->request->data('client_id');
      $connection = ConnectionManager::get('default');
      $connection->delete('clientmaster', ['client_id' => $id]);
    }
  }

  public function updateclientdetails() {
   $this->autoRender = false;
   $type = $this->request->data('clienttype');
   $name = $this->request->data('clientname');
   $email = $this->request->data('clientemail');
   $address = $this->request->data('clientaddress');
   $state = $this->request->data('clientstate');
   $city = $this->request->data('clientcity');
   $clientid = $this->request->data('clientid');
   $tablename = TableRegistry::get("clientmaster");

   $conditions = array('client_id' => $clientid);
   $fields = array('client_type' => $type, 'client_name' => $name, 'city' => $city, 'address1' => $address, 'state' => $state, 'email_id' => $email);
   $tablename->updateAll($fields, $conditions);
 }



 public function enableuser()
 {
  $this->autoRender = false;
  $id = $this->request->data('id');
  $status = $this->request->data('confirmed');
  $tablename = TableRegistry::get("clientmaster");
  $conditions = array('client_id' => $id);
  $fields = array('status' => $status);
  $tablename->updateAll($fields, $conditions);

}
public function disableuser()
{
  $this->autoRender = false;
  $id = $this->request->data('id');
  $status = $this->request->data('confirmed');
  $tablename = TableRegistry::get("clientmaster");
  $conditions = array('client_id' => $id);
  $fields = array('status' => $status);
  $tablename->updateAll($fields, $conditions);

}

public function addDb()
{
  $this->viewBuilder()->layout('');

      if($this->request->is('post'))
      {
        // pr($_POST);die();
        $service_id = $this->request->data('service_id');
        $client_id = $this->request->data('client_id');
        $host_name = $this->request->data('host_name');
        $username = $this->request->data('username');
        $db_auth = $this->request->data('db_auth');
        $db_name = $this->request->data('db_name');
  
          $dbtable = TableRegistry::get('Dbconfiguration');
          $dbconfig = $dbtable->newEntity();
          $dbconfig->client_id = $client_id;
          $dbconfig->service_id = $service_id;
          $dbconfig->host_name = $host_name;
          $dbconfig->username = $username;
          $dbconfig->db_auth = $db_auth;
          $dbconfig->db_name = $db_name;

          if( $dbtable->save($dbconfig)){
                $sucessful = 'Database Configurations Added Sucessfully';
                $class = 'alert alert-success alert-dismissible fade in';
                $iclass = 'fa fa-check';
                $close = '&times';
      }

      }


        $client = TableRegistry::get('Clientmaster');
        $result_client = $client->find('all', ['fields' => ['client_id', 'client_name', 'client_type']]);
        $result = []; 
        foreach($result_client as $d){
            $result[] = $d->toArray();
        }
        $this->set(compact('result','sucessful','class','iclass','close'));
    }



  public function viewDb()
  {$value = 4;
    $this->viewBuilder()->setlayout('admin_layout');
    $db_details = TableRegistry::get('Dbconfiguration');
     $db_list = $db_details->find('all', array('order' => array('db_id' => 'desc')))->contain(['clientmasters'])->toArray();
    // $db_list = $db_details->find('all',array('fields' => array('db_id','client_id','service_id','db_name','host_name')))->toArray();
    $this->set(compact('db_list','value'));

  }

   public function editdb()
  {
    $this->autoRender = false;
    if($this->request->is('ajax'))
    {
      $id = $this->request->data('db_id');
      $db_detail = TableRegistry::get('Dbconfiguration');
      $db_list = $db_detail->find('all')->where(['db_id' => $id])->toArray();
      echo(json_encode($db_list));
      
    }

}

 public function updatedbdetails() {
   $this->autoRender = false;
       
        $db_id = $this->request->data('db_id');
        $host_name = $this->request->data('host_name');
        $username = $this->request->data('username');
        $db_auth = $this->request->data('db_auth');
        $db_name = $this->request->data('db_name');
   $tablename = TableRegistry::get("dbconfiguration");
   $conditions = array('db_id' => $db_id);
   $fields = array('db_id' => $db_id, 'host_name' => $host_name, 'username' => $username, 'db_auth' => $db_auth, 'db_name' => $db_name);
   $tablename->updateAll($fields, $conditions);
 }

}

