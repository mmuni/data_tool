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
            'academic_qualifications',
            'employee_history',
            'english_proficiency',
            'disabilities',
            'references',
            'feedback',
            'review'
        );

        $this->set('countries', $this->Country->find('list'));
        $this->set('courses', $this->Course->find('list'));
        $this->set('course_programmes', $this->CourseProgramme->find('list'));
        $this->set('course_types', $this->CourseType->find('list'));
        $this->set('subjects',$this->Subject->find('list'));
		$this->set('Ogrades',$this->Grade->find('list', array('conditions' => array('Grade.level1' =>"O"))));
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
        return true;
    }
	
 function _processUce(){
	 
	  $this->AcademicHistory->set($this->data);
      return true;  
    }
	 function _processEmployeeHistory(){
	 
	  $this->AcademicHistory->set($this->data);
      return true;  
    }
}
