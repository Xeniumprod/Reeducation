<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
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
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form'
            ],
            'authorize' => ['Controller'],
            'loginAction' => [
                'controller' => 'Users',
                'action' =>'login',
                'prefix' => false
            ],
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Users',
                'action' =>'login',
                'prefix' => false
            ],
            'authError' => __("Vous n'êtes pas autorisé à acceder à cette page."),
            'flash' => [
                'element' => 'error',
                'key' => 'flash'
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        if ((isset($this->request->params['prefix']) && ($this->request->params['prefix'] == 'admin'))) {
            $this->layout = 'admin';
        }
    }

    public function beforeRender(Event $event)
    {
        $this->set('username', $this->Auth->user('username'));
    }

    public function isAuthorized($user)
    {
        // Admin peuvent accéder à chaque action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        if ((isset($this->request->params['prefix']) && ($this->request->params['prefix'] === 'admin'))) {
            if($user['role'] == 'admin'){
                return true;
            }else{
                return false;
            }
        }
        // Par défaut refuser
        return false;
    }
}
