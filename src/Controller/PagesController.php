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
class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Bases');
        //$this->loadModel('Horaires');
    }

    public function isAuthorized($user)
    {
        // Tous les utilisateurs enregistrés peuvent consulter leur profil
        if (in_array($this->request->action, ['index', 'generic', 'elements', 'hdj'])){
            return true;
        }
        return parent::isAuthorized($user);
    }

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {
        $user_id = $this->request->session()->read('Auth.User.id');
        $bases = $this->Bases->find()->where(['kinesitherapeute' => $user_id]);
        $this->set(compact('bases'));
    }

    public function generic()
    {

    }

    public function elements()
    {

    }

    public function hdj()
    {
        
    }

    public function bdd()
    {
        $bases = $this->Bases->find('all');
        $this->set(compact('bases'));
        $data = $bases->toArray();
        //$horaires = $this->Horaires->find()->where(['heure' => 'claire']);
        //$this->set(compact('toto'));

    }
}
