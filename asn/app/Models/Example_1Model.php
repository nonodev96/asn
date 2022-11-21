<?php

namespace App\Models;

use CodeIgniter\Model;

class Example_1Model extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'example_1';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "example_1_id",
        "title",
        "message"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    
    protected $dynamicRules = [
        'update_example_1'  => [
            'title'     => 'required',
            'message'   => 'required',
        ]
    ];

    public function get_rule(string $rule): array
    {
        return $this->dynamicRules[$rule];
    }

    public function fetch_all_example_1(): array
    {
        return $this->findAll();
    }

    public function exist_example_1($key): bool
    {
        $this->where('label', $key);
        if ($this->countAllResults() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function insert_example_1($data): bool
    {
        $status = false;
        try {
            if (!$this->exist_example_1($data['title'])) {
                $status = $this->insert($data);
            }
        } catch (\ReflectionException $e) {
            var_dump($e);
        }
        return $status;
    }

    public function update_example_1($data, $id)
    {
        try {
            $this->where('example_1_id', $id)->update($id, $data);
        } catch (\ReflectionException $e) {
            var_dump($e);
        }
    }

    function delete_event($id)
    {
        $this->where('example_1_id', $id)->delete($id);
    }
}
