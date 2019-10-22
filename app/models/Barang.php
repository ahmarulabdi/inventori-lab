<?php

class Barang extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_barang;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $nama_barang;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $keterangan_barang;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $merk;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $posisi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $minimum_stok;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_unit;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_invlab_nia");
        $this->setSource("barang");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'barang';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Barang[]|Barang|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Barang|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
