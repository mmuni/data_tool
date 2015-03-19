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
		'AcademicHistoriesSubject',
		'User',
		'Role',
		'Employee_history',
		'Disability',
		'Feedback',
		'Address',
		
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
            'academic_history',
            'employee_history',
            'english_proficiency',
            'disabilities',
            'referee',
            'feedback',
            'review'
        );
		//$this->Wizard->roaming =true;
        $this->set('countries', $this->Country->find('list'));
        $this->set('courses', $this->Course->find('list'));
        $this->set('course_programmes', $this->CourseProgramme->find('list'));
        $this->set('course_types', $this->CourseType->find('list'));

        $this->set('title_for_layout', 'Application Manager');
		$this->set('subjects', $this->Subject->find('list'));
		$this->set('disabilities', $this->Disability->find('list'));
		$this->set('Agrades', $this->Grade->find('list', array('conditions' => array('Grade.level2' => "A"))));
		$this->set('Ogrades', $this->Grade->find('list', array('conditions' => array('Grade.level1' => "O"))));
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
		
        if ($this->Person->validates()) {
            return true;
        }
        return false;
    }

    function _processAddress(){
	 $this->Address->set($this->data);
        return true;
    }

    function _processCourses(){
	$this->ApplicationCourse->set($this->data);
        return true;
    }

    function _processUace(){

				

		$this->AcademicHistory->set($this->data);


		//$examing_authority = $this->data['Institution']['name1'];

		//$i1 = $this->Institution->create();
		//$i1->name = $examing_authority;
		

		//$name_of_school = $this->data['Institution']['name2'];

		//$i2 = $this->Institution->create();
		//$i2->name = $name_of_school;
		//$i2->save();

		
		$this->AcademicHistory->set($this->data);		
		$this->Institution->set($this->data);		


		$this->Institution->set($this->data);


		$this->ContactDetail->set($this->data);
		//$this->AcademicHistorySubject->set($this->data);

		
			
		//$this->Institution->save($this->data);		
		//$this->ContactDetail->save($this->data);
		//$this->AcademicHistoriesSubject->save($this->data);
		
		

        return true;
    }

 function _processUce(){  
	//$this->Uce->set($this->data);
	 return true;
	 
    }

   
	 

	//function _processAcademicHistory(){
		//$this->Person->save();
      //return true;
     //}

	function _processAcademicHistory(){
		//$this->Person->save();
		//$person = $this->Person->read('id');

		//$this->Institution->set($this->data);
		$this->AcademicHistory->set('person_id', $person['Person']['id']);
		$this->AcademicHistory->set($this->data);


		//$this->Institution->save($this->data);
		

		
        return true;
    }
	
	function _processEmployeeHistory(){
		
	  
	  
      return true; 
	  }
	  
	  
	  function _processCareer(){
		
	  
	  $this->Career->set($this->data);
      return true; 
	  }
	  
	  
	  function _processEnglishProficiency(){
		
	
      return true; 
	  }
	  function _processDisabilities(){
		
	
      return true; 
	  }
	  function _processReferee(){
		
	
      return true; 
	  }
	  function _processFeedback(){
		
	
      return true; 
	  }
	
	protected function _afterComplete() {
            $wizardData = $this->Wizard->read();
            extract($wizardData);
			
	$this->AcademicHistory->save($this->data);		
    }
	
	
	

	 }
	 
?>