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
		'Referee'
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
            'academic_history',
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
		$this->Person->set($this->data);
        return true;
    }
	
 function _processUce(){
      return true;  
    }

	function _processAcademicHistory(){
		pr($this->data);
		exit;
        return true;
    }
	



}
