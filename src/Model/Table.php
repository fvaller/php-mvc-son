<?php 

namespace System\Model;

abstract class Table
{

    protected $db;
    protected $table;
    
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->db->query($sql);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = 40";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);        
        $stmt->execute();
        //$stmt->rowCount()
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    
}
