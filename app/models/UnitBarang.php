<?php

class UnitBarang extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_unit;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=true)
     */
    public $jumlah;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    // public $tanggal_beli;

    /**
     *
     * @var integer
     * @Column(type="integer", length=50, nullable=true)
     */
    public $harga_beli;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_keuangan;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_invlab_nia");
        $this->setSource("unit_barang");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'unit_barang';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnitBarang[]|UnitBarang|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UnitBarang|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
