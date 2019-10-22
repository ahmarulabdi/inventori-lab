<?php

class Keuangan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_keuangan;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $sumber_dana;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $dana_masuk;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $data_keluar;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $sisa_dana;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_invlab_nia");
        $this->setSource("keuangan");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'keuangan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Keuangan[]|Keuangan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Keuangan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
