<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $empid
 * @property bool $confirmed
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $bu
 * @property string $department
 * @property string $city
 * @property string $work_location
 * @property string $policy_agreed
 * @property int $first_access
 * @property int $last_access
 * @property string $lastip
 * @property bool $status
 */
class Clientmaster extends Entity
{

    // Make all fields mass assignable except for primary key field "id".
     protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    // ...

}
