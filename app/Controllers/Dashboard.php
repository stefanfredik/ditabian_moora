<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\KuotaModel;
use App\Models\PendudukModel;
use App\Models\PesertaModel;
use App\Models\SubkriteriaModel;
use App\Models\Users;
use App\Models\UsersModel;

class Dashboard extends BaseController {
    var $meta = [
        "url"   => 'dashboard',
        "title" => "Dashboard",
        "subtitle" => "Halaman Dashboard",
        "icon"     => '<i class="bi bi-speedometer2"></i>'
    ];

    public function index() {
        $dataUser = new UsersModel();
        $dataPenduduk = new PendudukModel();
        $dataPeserta = new PesertaModel();
        $dataKuota = new KuotaModel();
        $dataKriteria = new KriteriaModel();
        $dataSubKriteria = new SubkriteriaModel();

        $data = [
            'meta' => $this->meta,
            'title' => 'Halaman Dashboard',
            "dataUserCount" => $dataUser->countAll(),
            "dataPendudukCount" => $dataPenduduk->countAll(),
            "dataPesertaCount" => $dataPeserta->countAll(),
            "dataKuotaCount" => $dataKuota->countAll(),
            "dataKriteriaCount" => $dataKriteria->countAll(),
            "dataSubKriteriaCount" => $dataSubKriteria->countAll(),
        ];

        return view("/dashboard/index", $data);
    }
}
