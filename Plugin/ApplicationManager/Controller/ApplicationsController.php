<?php
App::uses('ApplicationManagerAppController', 'ApplicationManager.Controller');
/**
 * Applications Controller
 *
 */
class ApplicationsController extends ApplicationManagerAppController {

/**
 * Scaffold
 *
 * @var mixed
 */
    public $uses = array(
        'ApplicationManager.Application',
        'Country',
        'Course',
        'CourseType',
        'CourseProgramme',
        'Person',
		'Subject',
        'AcademicHistory',
        'Grade',
		'Referee',
		'Grade',
		'Institution',
		'ContactDetail',
		'Institution',
		'AcademicHistorySubject',
    );
	
    public $components = array('Wizard.Wizard');

    public $layout = 'bootstrap3';

    public function beforeFilter(){
        $this->Wizard->steps = array(
            'index',
            'biodata',
            'address',
            'courses',
            'uace',
            'uce',
<<<<<<< HEAD
            //'academic_qualifications',
=======
            'academic_history',
>>>>>>> 8dbcbdf147f34eb1cbb17fa41be63e4d53ec365e
            'employee_history',
            'career',
            'english_proficiency',
            'disabilities',
            'references',
            'feedback',
            'review'
        );
		$this->Wizard->roaming =true;
        $this->set('countries', $this->Country->find('list'));
        $this->set('courses', $this->Course->find('list'));
        $this->set('course_programmes', $this->CourseProgramme->find('list'));
        $this->set('course_types', $this->CourseType->find('list'));

        $this->set('title_for_layout', 'Application Manager');
		$this->set('subjects', $this->Subject->find('list'));
		$this->set('Agrades', $this->Grade->find('list', array('conditions' => array('Grade.level2' => "A"))));
    }

    public function index() {
        $this->redirect('wizard');
    }

    public function wizard($step = null) {
        $this->Wizard->process($step);
    }

/**
 * [Wizard Process Callbacks]
 */
    function _processIndex(){
      return true;
    }
    function _processBiodata(){
        $this->Person->set($this->data);
		$this->Person->University->set(array('id'=>0));
        if ($this->Person->validates()) {
            return true;
        }
        return false;
    }

    function _processAddress(){
        return true;
    }

    function _processCourses(){
        return true;
    }

    function _processUace(){
		$this->AcademicHistory->set($this->data);
		
		$examing_authority = $this->data['Institution']['name1'];
		
		$i1 = $this->Institution->create();
		$i1->name = $examing_authority;
		$i1->save();
		
		$name_of_school = $this->data['Institution']['name2'];
		
		$i2 = $this->Institution->create();
		$i2->name = $name_of_school;
		$i2->save();
		
		$this->Institution->set($this->data);
		
		$this->ContactDetail->set($this->data);

		$this->AcademicHistorySubject->set($this->data);
		
		
        return true;
    }

 function _processUce(){
      return true;
    }

    protected function _afterComplete() {
            $wizardData = $this->Wizard->read();
            extract($wizardData);
    }
<<<<<<< HEAD
	 function _processEmployeeHistory(){
		 pr($this->data);
		 exit;
	 // $emp = $this->EmployeeHistory->find('all', ('conditions' => array('Employee.name' => $this->data['staff_number'])));
	  $this->EmployeeHistory->set($this->data);
      return true;  
=======

	function _processAcademicHistory(){
		$this->Person->save();
		
		$person = $this->Person->read('id');
		
		$this->Institution->set($this->data);
		$this->AcademicHistory->set('person_id', $person['Person']['id']);
		$this->AcademicHistory->set($this->data);
		
		
		$this->Institution->save($this->data);
		$this->AcademicHistory->save($this->data);
	
		pr($this->data);
		exit;
        return true;
>>>>>>> 8dbcbdf147f34eb1cbb17fa41be63e4d53ec365e
    }
	



}
