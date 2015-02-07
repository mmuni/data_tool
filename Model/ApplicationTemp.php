<?php
App::uses('AppModel', 'Model');
App::uses('Person', 'Model');
App::uses('Country', 'Model');
App::uses('Address', 'Model');
App::uses('Courses', 'Model');
App::uses('UceSubject', 'Model');
/**
 * ApplicationsTemp Model
 *
 */
class ApplicationTemp extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'phone_number' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

    public function getIdByPhoneNumber() {
        $row = $this->find('first', array(
            'fields' => array('ApplicationTemp.id'),
            'conditions' => array('ApplicationTemp.phone_number' => $this->data['ApplicationTemp']['phone_number'])
        ));
        if(isset($row['ApplicationTemp']['id'])) {
            return $row['ApplicationTemp']['id'];
        }
        return 0;
    }

    public function getPersonData($id) {
        return $this->getJsonData($id, 'Person', 'Personalbiodata_json');
    }

    public function savePersonData($id, $data) {
        $this->saveJsonData($id, 'Personalbiodata_json', $data);
    }

    public function getAddressData($id) {
        return $this->getJsonData($id, 'Address', 'address_json');
    }

    public function saveAddressData($id, $data) {
        $this->saveJsonData($id, 'address_json', $data);
    }
	 public function saveCourseData($id, $data) {
        $this->saveJsonData($id, 'courses_json', $data);
    }
	 public function getCourseData($id) {
        return $this->getJsonData($id, 'Courses', 'courses_json');
    }
	
	 public function saveDisabilitiesData($id, $data) {
        $this->saveJsonData($id, 'disabilities_json', $data);
    }
	 public function getDisabilitiesData($id) {
        return $this->getJsonData($id, 'Disability', 'disabilities_json');
    }
	 public function saveRefereeData($id, $data) {
        $this->saveJsonData($id, 'referee_json', $data);
    }
	 public function getRefereeData($id) {
        return $this->getJsonData($id, 'Referee', 'referee_json');
    }
	 public function saveUceData($id, $data) {
        $this->saveJsonData($id, 'uce_json', $data);
    }
	 public function getUceData($id) {
        return $this->getJsonData($id, 'Uce', 'uce_json');
    }
	public function saveUaceData($id, $data) {
        $this->saveJsonData($id, 'uace_json', $data);
    }
	 public function getUaceData($id) {
        return $this->getJsonData($id, 'Uace', 'uace_json');
    }
	

    function getJsonData($id, $model, $field){
        $this->read($field, $id);
        return array($model => json_decode($this->data['ApplicationTemp'][$field], true));
    }

    function saveJsonData($id, $field, $data) {
        $this->read($field, $id);
        $this->set($field, json_encode($data));
        $this->save();
    }

    public function savePermanent($id){
        $person = new Person();
        $person->save($this->getPersonData($id));
        $address = new Address();
        $address->set($this->getAddressData($id));
        $address->data['Address']['person_id'] = $person->id;
        $address->data['Address']['type'] = 'home';
        $address->save();
        $this->delete();
    }
}
