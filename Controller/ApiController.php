<?php
App::uses('AppController', 'Controller');

class ApiController extends AppController
{

/**
 * Valid http status codes
 *
 * @var string
 */
    public $status = array(
        200 => array('status' => 200, 'error' => null),
        400 => array('status' => 400, 'error' => 'bad request'),
        404 => array('status' => 404, 'error' => 'not found'),
    );

/**
 * Called after the controller action is run, but before the view is rendered.
 *
 * Used to ensure that json responses are handled correctly by the action
 *
 * @link http://book.cakephp.org/view/984/Callbacks
 * @return void
 */
    public function beforeRender()
    {
        parent::beforeRender();

        Configure::write('debug', 0);
        $this->request->action = 'response';
        $this->layout = false;
    }

/**
 * Returns a set of packages that may match an install query
 *
 * @return void
 */
    public function one_install()
    {
        if (empty($this->request->params['url']['package'])) {
            return $this->set('results', $this->status[400]);
        }

        $this->loadModel('ApiPackage');
        $results = $this->ApiPackage->find('install', array(
            'request' => $this->request->params['url']
        ));

        if (!$results) {
            $results = array();
        }

        $results = array_merge($this->status[200], array(
            'count' => count($results),
            'results' => $results
        ));
        return $this->set(compact('results'));
    }
}
