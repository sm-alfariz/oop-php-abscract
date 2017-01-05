<?php

/**
 * Klass Abstrak Politkus (Politikus itu absrtrak ndk jelas apa dan siapa tujuannya apa)
 * User: fendi
 * Date: 05/01/17
 * Time: 16:29
 */
namespace Klass;
abstract class AbstractPolitikus
{
    public $nama;
    public $tipe_nya;
    public function PolitikusWhat()
    {
        return 'Nama : '. $this->nama.' Tipe: '.$this->tipe_nya;
    }

    /**
     * @return mixed
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getTipeNya()
    {
        return $this->tipe_nya;
    }

    /**
     * @param mixed $tipe_nya
     */
    public function setTipeNya($tipe_nya)
    {
        $this->tipe_nya = $tipe_nya;
    }

    abstract public function DetailPolitikus();
}