<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_invlab_nia");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
