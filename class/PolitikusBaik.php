<?php

/**
 * Created by PhpStorm.
 * User: fendi
 * Date: 05/01/17
 * Time: 16:36
 */
use Klass\AbstractPolitikus;
class PolitikusBaik extends AbstractPolitikus
{
    public $tipe_nya ;
    protected $action ;
    public function DetailPolitikus()
    {
        $this->action = ' tidak menaikkan biaya administrasi Pengurusan STNK/BPKB krn memang bkn korupsi '.
            ' tapi bentuk legalitas perampokan'."\n";
        $this->tipe_nya = ' Baik '."\n";
        return parent::PolitikusWhat().$this->action;
    }

    public function setNama($nama)
    {
        parent::setNama($nama);
    }

    public function getNama()
    {
        return parent::getNama();
    }

    public function setTipeNya($tipe_nya)
    {
        $tipe_nya = $this->tipe_nya;
        parent::setTipeNya($tipe_nya);
    }

    public function getTipeNya()
    {
        return parent::getTipeNya();
    }
}

