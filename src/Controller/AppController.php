<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }




    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('frontend');
        $template = [
            'inputContainer' => '<div class="form-group input {{type}}">{{content}}</div>',
            'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
            'inputContainerError' => '<div class="form-group {{type}} error"> {{content}} {{error}}</div>',
            'error' => '<div class="error-message" style="color:red"> {{content}}</div>',
            'select' => '<div class="form-group"><select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>    </div>',
            'checkboxContainer' => '<div class="checkbox checkbox-info">{{content}}</div>',
            
        ];
        


        //$session = $this->request->getSession();
        //$user = $session->read('Auth.User');

        //$this->set('uid', $this->Auth->user('id'));
        //$this->set('uname', $this->Auth->user('first_name'));
        //$this->set('ulname', $this->Auth->user('last_name'));
        //$this->set('rol', $this->Auth->user('rol') );
        $this->set('template', $template);
        
    }


}
