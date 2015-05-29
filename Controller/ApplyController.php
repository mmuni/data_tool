<?php
class ApplyController extends AppController {

    var $uses = array(
        'Person',
        'Country',
        'Address',
        'AddressPerson',
        'Course',
        'CourseProgramme',
        'CourseType',

        'Application',
        'ApplicationCourse',
    );

    var $components = array('Wizard.Wizard');

    function beforeFilter(){
        $this->layout = 'apply_wizard';

        $this->Auth->allow(array('wizard', 'confirm'));
        $this->Wizard->completeUrl = '/apply/confirm';
        $this->Wizard->steps = array(
            'biodata',
            'address',
            'courses',
            'review',
        );
    }

    function confirm(){

    }

    function wizard($step = null){
        $this->Wizard->process($step);
    }

/**
 * [Wizard Process Callbacks]
 */
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

        $this->set('countries', $this->Country->find('list'));
    }

    function _processBiodata(){
        $this->Person->set($this->data);

        if ($this->Person->validates()){
             return true;
        }
        return false;
    }

    function _prepareAddress(){
        $this->set('countries', $this->Country->find('list'));
    }

    function _processAddress(){
        $this->Address->set($this->data);
        if ($this->Address->validates()){
             return true;
        }
        return false;
    }

    function _prepareCourses(){
        $this->set('courses', $this->Course->find('list'));
        $this->set('course_programmes', $this->CourseProgramme->find('list'));
        $this->set('course_types', $this->CourseType->find('list'));
    }

    function _processCourses(){

        $this->ApplicationCourse->set($this->data);

        if ($this->ApplicationCourse->validates()){
            return true;
        }
        return false;
    }

    function _prepareReview(){
        $wizardData = $this->Wizard->read();

        // $this->ApplicationCourse->set($wizardData['courses']);
        if ($this->ApplicationCourse->validates()){
            $this->ApplicationCourse->save();
            pr($wizardData['courses']);
            exit;
        }

        return false;
    }

    function _afterComplete() {
        $wizardData = $this->Wizard->read();

        extract($wizardData);

        // *** Person ***
        $dob = sprintf('%s-%s-%s',
            $biodata['Person']['date_of_birth']['year'],
            $biodata['Person']['date_of_birth']['month'],
            $biodata['Person']['date_of_birth']['day']
        );

        $this->Person->recursive = -1;
        $p = $this->Person->findBySurnameAndOthernameAndDateOfBirth(
            $biodata['Person']['surname'],
            $biodata['Person']['othername'],
            $dob
        );
        if ($p) { $this->Person->id = $p['Person']['id']; }
        $this->Person->save($biodata['Person']);

        // *** Address ***
        $this->Address->save($address['Address']);

        // *** AddressPerson ***
        $this->AddressPerson->set(
            array(
                'AddressPerson' => array(
                    'person_id' => $this->Person->id,
                    'address_id' => $this->Address->id
                )
            )
        );

        if ($this->AddressPerson->validates()){
            $this->AddressPerson->save();
        }

        // create the application
        $this->Application->set(array(
            'Application' => array(
                 'person_id' => $this->Person->id,
            )
        ));
        $this->Application->save();

        foreach ($courses['ApplicationCourse'] as $c) {
             $courses['application_id'] = $this->Application->id;
        }

        $this->ApplicationCourse->set($courses['ApplicationCourse']);
        $this->ApplicationCourse->save();
    }
}
