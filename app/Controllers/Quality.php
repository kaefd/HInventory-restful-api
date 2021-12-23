<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\QualityModel;

class Quality extends ResourceController
{
    use ResponseTrait;
    protected $qualityModel;

    public function __construct()
    {
        $this->qualityModel = new QualityModel();
    }

    // get all qualities
    public function index()
    {
        $data = $this->qualityModel->findAll();
        return $this->respond($data, 200);
    }

    //get single data
    public function show($id = null)
    {
        $data = $this->qualityModel->getWhere(['id_quality' => $id])->getResult();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }
}
