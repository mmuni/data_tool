<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 6/12/14
 * Time: 11:27 AM
 */

class ApplicationsController extends AppController {

    // This line imports all the models you want to use in this controller
    public $uses = array('Person', 'Address', 'ApplicationTemp','Country','login','person', 'Address', 'ApplicationTemp', 'UceSubject','UaceSubject', 'AcademicHistory','UceGrade','UaceGrade','UceHistory','UaceHistory');

        public function login() {
		/*	
        if ($this->request->is('post')) {
            // Create a variable that says if the user can proceed to the next page
            $cancontinue = false;
            $this->ApplicationTemp->create($this->request->data);
            // Was the login button clicked?
            $id = $this->ApplicationTemp->getIdByPhoneNumber();
            if(isset($this->request->data['login']) && $id > 0){

                // check if there is a record for the phone number
                $cancontinue = true;
            }
            // Was the create new button clicked?
            elseif (isset($this->request->data['create']) && $id == 0){
                if ($this->ApplicationTemp->save($this->request->data)) {
                    $cancontinue = true;
                    $id = $this->ApplicationTemp->id;
                    print "new id is".$this->ApplicationTemp->id;
                }
            }
            if($cancontinue) {
                $this->Session->write("currentid", $id);
                return $this->redirect(array('action' => 'personalbiodata'));
            }
        }
		*/
		
		$id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->saveUceData($id, $this->request->data['Login']);
            
			return $this->redirect(array('action' => 'personalbiodata'));
        }
        $this->request->data = $this->ApplicationTemp->getUceData($id);
			
    }

    public function personalbiodata() {
	
/**/
        $id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->savePersonData($id, $this->request->data['Person']);
            return $this->redirect(array('action' => 'addresses'));
        }
        $this->request->data = $this->ApplicationTemp->getPersonData($id);
    }
   /**
    $this->loadModel('countries');
       $countries = $this->countries->find('list'); //we get the course_programmes from the database
       $this->set('countries', $countries);
 
      if ($this->request->is('post')) {
            $this->countries->create();
            if ($this->countries->save($this->request->data)) {
                $this->Session->setFlash( __('The countries has been saved'), 'success');
                return $this->redirect(array('action' => 'countries'));
            } else {
                $this->Session->setFlash(__('The countries could not be saved. Please, try again'), 'error');
                //throw new InternalErrorException (__('The user could not be saved. Please, try again'));
            }
       }    
   }
   
   */
	public function addresses()
	
	{
 $id = $this->Session->read('currentid');
      if($this->request->is('post')){
           $this->ApplicationTemp->saveAddressData($id, $this->request->data['Address']);
            
			 if(isset($this->request->data['next'])){
                  return $this->redirect(array('action'=>'Courses'));
            }
                        elseif(isset($this->request->data['back'])){
                return $this->redirect(array('action'=>'personalbiodata'));
            }
			
			return $this->redirect(array('action' => 'Courses'));
        }
        $this->request->data = $this->ApplicationTemp->getAddressData($id);
          
           
       
        
        $this->loadModel('countries');
        $countries = $this->countries->find('list'); //we get the countries from the database
        $this->set('countries', $countries);
         
    
    }
	
    public function courses(){
      $id = $this->Session->read('currentid');
      if($this->request->is('post')){
           $this->ApplicationTemp->saveCourseData($id, $this->request->data['Courses']);
           
		   if(isset($this->request->data['next'])){
                  return $this->redirect(array('action'=>'uace'));
            }
                        elseif(isset($this->request->data['back'])){
                return $this->redirect(array('action'=>'addresses'));
            } 
		    return $this->redirect(array('action' => 'uace'));
        }
        $this->request->data = $this->ApplicationTemp->getCourseData($id);
          
                    
        
        $this->loadModel('course_types');
        $course_types = $this->course_types->find('list'); //we get the course_types from the database
        $this->set('course_types', $course_types);
         
        $this->loadModel('courses');
        $courses = $this->courses->find('list'); //we get the Courses from the database
        $this->set('courses', $courses);
 
        $this->loadModel('course_programmes');
       $course_programmes = $this->course_programmes->find('list'); //we get the course_programmes from the database
       $this->set('course_programmes', $course_programmes);
     
 
        } 
		
		 public function uace(){
 
		$id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->saveUaceData($id, $this->request->data['AcademicHistory']);
             if(isset($this->request->data['next'])){
                  return $this->redirect(array('action'=>'uce'));
            }
                        elseif(isset($this->request->data['back'])){
                return $this->redirect(array('action'=>'Courses'));
            }
			
			return $this->redirect(array('action' => 'uce'));
        }
        $this->request->data = $this->ApplicationTemp->getUaceData($id);
			      
	 	$this->loadModel('subjects');
        $subjects = $this->subjects->find('list', array('conditions' => array('subjects.level2' => "A"))); //we get the Subjects from the database
        $this->set('subjects', $subjects);
   
   
        $this->loadModel('grades');
        $grades = $this->grades->find('list', array('conditions' => array('grades.level2' => "A"))); //we get the Courses from the database
        $this->set('grades', $grades);	
	 
    }
	public function uce(){
      
   		$id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->saveUceData($id, $this->request->data['AcademicHistory']);
            
			 if(isset($this->request->data['next'])){
                  return $this->redirect(array('action'=>'academicqualification'));
            }
                        elseif(isset($this->request->data['back'])){
                return $this->redirect(array('action'=>'uace'));
            }
			return $this->redirect(array('action' => 'academicqualification'));
        }
        $this->request->data = $this->ApplicationTemp->getUceData($id);
		
        
		$this->loadModel('subjects');
        $subjects = $this->subjects->find('list', array('conditions' => array('subjects.level1' => "O"))); //we get the Subjects from the database
        $this->set('subjects', $subjects);
   
   
        $this->loadModel('grades');
        $grades = $this->grades->find('list', array('conditions' => array('grades.level1' => "O"))); //we get the Courses from the database
        $this->set('grades', $grades);			
			
        }

	 public function academicqualification()
	 {
		 $id = $this->Session->read('currentid');
      if($this->request->is('post')){
           $this->ApplicationTemp->saveAddressData($id, $this->request->data['Academicqualification']);
            
			 if(isset($this->request->data['next'])){
                  return $this->redirect(array('action'=>'career'));
            }
                        elseif(isset($this->request->data['back'])){
                return $this->redirect(array('action'=>'uce'));
            }
			
			return $this->redirect(array('action' => 'career'));
        }
        $this->request->data = $this->ApplicationTemp->getAddressData($id);
          
           
	     }
	
     public function english_proficiency()
	 {
	 $id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->saveRefereeData($id, $this->request->data['english_proficiency']);
			if(isset($this->request->data['back'])){
                  return $this->redirect(array('action'=>'career'));
            }
           
                return $this->redirect(array('action' => 'disability'));
            }
			
			$this->request->data = $this->ApplicationTemp->getRefereeData($id);
    
    }
	public function career()
    {
		 $id = $this->Session->read('currentid');
      if($this->request->is('post')){
           $this->ApplicationTemp->saveAddressData($id, $this->request->data['career']);
            
			 if(isset($this->request->data['next'])){
                  return $this->redirect(array('action'=>'english_proficiency'));
            }
                        elseif(isset($this->request->data['back'])){
                return $this->redirect(array('action'=>'Academicqualification'));
            }
			
			return $this->redirect(array('action' => 'english_proficiency'));
        }
        $this->request->data = $this->ApplicationTemp->getAddressData($id);
          
           
		}	
	
    public function references()
	
	{
	    }
	public function disability(){
  $id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->saveDisabilitiesData($id, $this->request->data['People_disabilities']);
            
			if(isset($this->request->data['back'])){
                  return $this->redirect(array('action'=>'english_proficiency'));
            }
			return $this->redirect(array('action' => 'referee'));
        }
        $this->request->data = $this->ApplicationTemp->getDisabilitiesData($id);
		
		$this->loadModel('disabilities');
        $disabilities = $this->disabilities->find('list'); //we get the disabilities from the database
        $this->set('disabilities', $disabilities);
    }	
		
		public function referee(){
	$id = $this->Session->read('currentid');
        if ($this->request->is('post')) {
            $this->ApplicationTemp->saveRefereeData($id, $this->request->data['Referee']);
			if(isset($this->request->data['back'])){
                  return $this->redirect(array('action'=>'disability'));
            }
           
                return $this->redirect(array('action' => 'feedback'));
            }
			
			$this->request->data = $this->ApplicationTemp->getRefereeData($id);
    }
		
	public function feedback(){
	if($this->request->is('post')){
            if(isset($this->request->data['back'])){
                  return $this->redirect(array('action'=>'referee'));
            }

        }

    }	
		
    public function finish() {
        $id = $this->Session->read('currentid');
        $this->set('person', $this->ApplicationTemp->getPersonData($id));
        $this->set('address', $this->ApplicationTemp->getAddressData($id));
        if($this->request->is('post')){
            if(isset($this->request->data['finish']) && $id > 0){
                $this->ApplicationTemp->savePermanent($id);
                $this->Session->delete('currentid');
                $this->redirect(array('action' => 'login'));
            } else if(isset($this->request->data['prev']) && $id > 0) {
                return $this->redirect(array('action' => 'address'));
            }
        }
    }
} 