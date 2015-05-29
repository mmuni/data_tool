<?php
App::uses('ApplicationManagerAppController', 'ApplicationManager.Controller');

use RandomLib\Factory;

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
    public $helpers = array(
	    'Wizard'
    );

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
		'ApplicationsCourses',
		'EnglishProficiency',
		'Career',
		'PeopleDisability',

    );

    public $components = array('Wizard.Wizard');

    public $layout = 'application_wizard';

    public function beforeFilter(){
        $this->Auth->allow('wizard', 'index', 'resume');
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

        $this->Wizard->roaming =true;
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

    public function resume(){
    }

    public function wizard($step = null) {
        $this->Wizard->process($step);
    }

/**
 * [Wizard Process Callbacks]
 */
    function _prepareIndex(){
	    $factory = new RandomLib\Factory;
	    $generator = $factory->getLowStrengthGenerator();
	    $code = $generator->generate(8);

	    $this->set('code', $code);
    }

    function _processIndex(){
      return true;
    }
    function _processBiodata(){
        $this->Person->set($this->data);
		$this->ContactDetail->set($this->data);
       // if ($this->Person->validates() && $this->ContactDetail->validates()) {
          //  return true;
        //}
       // return false;
    }

    function _prepareBiodata(){
      $religions = array(
        'christianity' => 'Christian',
        'islam' => 'Islam',
        'secular' => 'Secular/Nonreligious/Agnostic/Atheist',
        'hinduism' => 'Hinduism',
        'chinese' => 'Chinese Traditional Religion',
        'buddhism' => 'Buddhism',
        'primal-indigenous' => 'Primal Indigenous',
        'african' => 'African Traditional & Diasporic',
        'sikhism' => 'Sikhism',
        'juche' => 'Juche',
        'spiritism' => 'Spiritism',
        'judaism' => 'Judaism',
        'bahai' => "Baha'i",
        'jainism' => 'Jainism',
        'shinto' => 'Shinto',
        'cao-dai' => 'Cao Dai',
        'zoroastrianism' => 'Zoroastrianism',
        'tenrikyo' => 'Tenrikyo',
        'neo-paganism' => 'Neo-Paganism',
        'unitarian-universalism' => 'Unitarian-Universalism',
        'rastafarianism' => 'Rastafarianism',
        'scientology' => 'Scientology'
      );
      $this->set(compact('religions'));
    }

    function _processAddress(){
	    $this->Address->set($this->data);

	    if ($this->Address->validates()) {
		    return true;
	    }
	    return false;
    }

    function _processCourses(){

	$this->ApplicationsCourses->set($this->data);
        return true;
    }

    function _processUace(){




		$this->Institution->set($this->data);
		$this->ContactDetail->set($this->data);
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



	$this->Institution->set($this->data);
	$this->ContactDetail->set($this->data);
	$this->AcademicHistory->set($this->data);
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

		$this->Career->set($this->data);
		$this->ContactDetail->set($this->data);


      return true;
	  }

	  function _processEnglishProficiency(){

	$this->EnglishProficiency->set($this->data);
      return true;
	  }
	  function _processDisabilities(){


		$this->PeopleDisability->set($this->data);

		return true;
	  }

	  function _processReferee(){

		$this->Referee->set($this->data);

      return true;
	  }
	  function _processFeedback(){


		$this->Feedback->set($this->data);

      return true;
	  }
	function _prepareReview(){
		$wizardData = $this->Wizard->read();
		extract($wizardData);
		$this->set(compact('index', 'biodata', 'address', 'courses', 'uace', 'uce', 'academic_history', 'employee_history', 'english_proficiency', 'disabilities', 'referee', 'feedback', 'review'));
	}

		function _processReview(){

			//$wizardData = $this->Wizard->read();
			//extract($wizardData);
			//pr($wizardData);

      return true;
	  }
	 function _afterComplete() {
            $wizardData = $this->Wizard->read();
            extract($wizardData);

	$this->Person->save();
	$this->Address->save();
	$this->ApplicationsCourses->save();
	$this->Institution->save();
	$this->ContactDetail->save();
	$this->AcademicHistory->save();
	$this->Career->save();
	$this->EnglishProficiency->save();
	$this->Referee->save();
	$this->Feedback->save();
	}




	 }

?>
