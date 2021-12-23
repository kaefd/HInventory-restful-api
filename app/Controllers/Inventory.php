<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\InventoryModel;

class Inventory extends ResourceController
{
    use ResponseTrait;
    protected $inventoryModel;


    public function __construct()
    {
        $this->inventoryModel = new InventoryModel();
    }

    // get all inventories
    public function index()
    {
        $data = $this->inventoryModel->findAll();
        return $this->respond($data, 200);
    }

    //get single data
    public function show($id = null)
    {
        $data = $this->inventoryModel->getWhere(['id_inventory' => $id])->getResult();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }

    // create an inventory
    public function create()
    {
        $data = [
            'code'          => $this->request->getPost('code'),
            'name'          => $this->request->getPost('name'),
            'design'        => $this->request->getPost('design'),
            'code_quality'  => $this->request->getPost('code_quality'),
            'weight'        => $this->request->getPost('weight'),
            'qty_pcs'       => $this->request->getPost('qty_pcs'),
            'qty_ctn'       => $this->request->getPost('qty_ctn'),
            'total_pcs'     => $this->request->getPost('total_pcs')
        ];

        $data = $this->request->getRawInput();

        $this->inventoryModel->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];

        return $this->respond($response);
    }

    // update inventory
    public function update($id = null)
    {
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'code'          => $json->code,
                'name'          => $json->name,
                'design'        => $json->design,
                'code_quality'  => $json->code_quality,
                'weight'        => $json->weight,
                'qty_pcs'       => $json->qty_pcs,
                'qty_ctn'       => $json->qty_ctn,
                'total_pcs'     => $json->total_pcs

            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'code'          => $input['code'],
                'name'          => $input['name'],
                'design'        => $input['design'],
                'code_quality'  => $input['code_quality'],
                'weight'        => $input['weight'],
                'qty_pcs'       => $input['qty_pcs'],
                'qty_ctn'       => $input['qty_ctn'],
                'total_pcs'     => $input['total_pcs']
            ];
        }
        // Insert to Database
        $this->inventoryModel->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    // delete inventory
    public function delete($id = null)
    {
        $data = $this->inventoryModel->find($id);
        if ($data) {
            $this->inventoryModel->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];

            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }
}
