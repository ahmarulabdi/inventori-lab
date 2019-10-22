<?php

class DetailPembelian extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_unit;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_barang;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_invlab_nia");
        $this->setSource("detail_pembelian");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'detail_pembelian';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DetailPembelian[]|DetailPembelian|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DetailPembelian|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
