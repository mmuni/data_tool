<?php

App::uses('FormHelper', 'View/Helper');

class ApplicationsFormHelper extends FormHelper {

    public function create($model = null, $options = array()) {
        $defaultOptions = array(
            'role' => 'form',
            'class' => 'form-horizontal',
            'inputDefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'div' => array('class' => 'form-group'),
                'class' => array('form-control'),
                #'label' => array('class' => 'col-lg-2 control-label'),
                #'between' => '<div class="col-lg-3">',
                #'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
            )
        );

        $options = Hash::merge($defaultOptions, $options);
        return parent::create($model, $options);

        if (!empty($options['inputDefaults'])) {
            $options = array_merge(
                $defaultOptions['inputDefaults'],
                $options['inputDefaults']
             );
        } else {
            $options = array_merge($defaultOptions, $options);
        }
    }
}
