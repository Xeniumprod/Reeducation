<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Validation\Validator;

class UsersTable extends Table
{
	public function initialize(array $config)
    {
        $this->table('users');
        $this->primaryKey('id');
   	}

    /**
     * Create validation rules.
     *
     * @param \Cake\Validation\Validator $validator The Validator instance.
     *
     * @return \Cake\Validation\Validator
     */
    public function validationCreate(Validator $validator)
    {
        return $validator
            ->notEmpty('lastname', __('Le champ nom ne doit pas être vide.'))
            ->notEmpty('firstname', __('Le champ prénom ne doit pas être vide.'))
            ->notEmpty('activite', __('Le champ activite ne doit pas être vide.'))
            ->notEmpty('password', __('Le champ password ne doit pas être vide.'))
            ->add('password', [
                'alphaNumeric' => [
                    'rule' => array('custom', '/[a-z0-9._-]{4,20}$/i'),
                    'message' => __('Ce mot de passe est incorrect.')
                ]
            ])
            ->add('password', [
                'compareWith' => [
                    'rule' => ['compareWith', 'repassword'],
                    'message' => 'Les mots de passe ne sont pas identiques.'
                ]
            ]);
    }
}