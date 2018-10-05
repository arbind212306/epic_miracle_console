<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ServicesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setTable('services');
        $this->setPrimaryKey('id');
        /*$this->hasMany('Departments', [
            'className' => 'DepartmentsTable',
            'foreignKey' => 'business_unit_id',
            'propertyName' => 'type'
        ]);*/
    }
    
    public function getServiceDetails(){
        $query = $this->find('all');
        $result = [];
        foreach ($query as $d){
            $result[] = $d->toArray();
        }
       return $result;
    }

    
    
}
