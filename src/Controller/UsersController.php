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

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        //$this->loadModel('Posts');
    }

    public function isAuthorized($user)
    {
        // Tous les utilisateurs enregistrés peuvent consulter leur profil
        if (in_array($this->request->action, ['profile', 'account', 'settings', 'delete'])){
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        //On autorise ces actions sans etre logué
        $this->Auth->allow(['login', 'signup', 'logout']);
    }

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function login()
    {
        if($this->request->session()->read('Auth.User')){
            return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
        }
        $user = $this->Users->newEntity($this->request->data, ['validate' => 'create']);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                if(isset($this->request->data['remember_me']))
                {
                    //die();
                    $this->Cookie->configKey('CookieAuth', [
                        'expires' => '+1 year',
                        'httpOnly' => true
                    ]);
                    $this->Cookie->write('CookieAuth', [
                        'username' => $this->request->data('username'),
                        'password' => $this->request->data('password')
                    ]);
                }
                $this->Auth->setUser($user);               
                return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
            }
            else{
                $this->Flash->error(__("Mauvais identifiants."), ['key' => 'login']);
                $this->request->data['username'] = '';
                $this->request->data['password'] = '';
            }
        }
        $this->set(compact('user'));
    }

    public function signup()
    {
        $user = $this->Users->newEntity($this->request->data, ['validate' => 'create']);
        if ($this->request->is('post')) {
            $username = strtoupper("196".substr($this->request->data('lastname'), 0, 3).substr($this->request->data('firstname'), 0, 3));
        	$this->request->data['username'] = $username;
            $this->request->data['role'] = 'user';
            $user = $this->Users->patchEntity($user, $this->request->data());
            if (!$user->errors()){             
                if ($this->Users->save($user)) {
                    $this->Auth->setUser($user->toArray());
                    $this->Flash->success(__("L'utilisateur a été correctement ajouté."));
                    return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
                }                              
            }else{
                $this->Flash->error(__("Erreurs de validation."), ['key' => 'signup']);
            }
        }
        $this->set(compact('user'));
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}