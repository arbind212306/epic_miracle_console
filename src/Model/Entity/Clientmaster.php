<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Clientmaster Entity
 *
 * @property int $client_id
 * @property string $client_type
 * @property int $bu
 * @property int $industry_name
 * @property string $client_code
 * @property string $client_name
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property int $zip
 * @property string $email_id
 * @property string $phone
 * @property string $mobile
 * @property string $fax
 * @property string $website
 * @property string $description
 * @property string $logo
 * @property string $cp_name
 * @property string $cp_email_id
 * @property string $cp_mobile
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $activation_date
 * @property \Cake\I18n\FrozenTime $deactivation_date
 * @property int $status
 * @property string $service_needed
 *
 * @property \App\Model\Entity\Email $email
 * @property \App\Model\Entity\CpEmail $cp_email
 */
class Clientmaster extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    
}
