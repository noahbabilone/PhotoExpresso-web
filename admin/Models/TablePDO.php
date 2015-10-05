<?php
namespace AppModel;
use AppModel\DatabasePDO;


/**
 * @Class
 */
class TablePDO
{
    protected $table;
    protected $db;

    public function __construct()
    {
//        echo "tablePDO" .get_class($bd);
         $config = Config::getInstance(ROOT.'/public/Config.php');
         $this->db= new MysqlDatabase ($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), 
            $config->get('db_host'));
        
        //print_r(debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT));
        //print_r($this->db);
        if (is_null($this->table)) {
            //Factory
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }


    

    public function query($sql, $attributes = null, $one = false)
    {
        if ($attributes) {
            return $this->db->prepare(
                $sql,
                $attributes,
                 get_class($this),
                $one);
        } else {
            return $this->db->query($sql,
                get_class($this),
                $one);

        }
    }



    public function find($id)
    {
//            die ("SELECT * FROM ".$this->table." WHERE id= $id". get_class($this));
        return $this->query("SELECT * FROM " . $this->table . " WHERE id=?", [$id], str_replace('Table', 'Entity', get_class($this)), true);
    }

    public function update($idArticle, $fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $key => $val) {
            $sql_parts [] = $key . ' = ?';
            $attributes[] = $val;
        }
        $attributes[] = $idArticle;
        $sql_part = implode(',', $sql_parts);
        return $this->query("UPDATE " . $this->table . " SET " . $sql_part . " WHERE id =?", $attributes);
    }

    public function add($fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $key => $val) {
            $sql_parts [] = $key . ' = ?';
            $attributes[] = $val;
        }

        $sql_part = implode(',', $sql_parts);
        return $this->query("INSERT INTO " . $this->table . " SET " . $sql_part, $attributes);
    }

    public function extract($key, $value)
    {

        $record = $this->all();
        $return = [];

        foreach ($record as $val) {
            $return[$val->$key] = $val->$value;
        }
        return $return;
    }

    public function delete($idArticle)
    {

        return $this->query("DELETE FROM " . $this->table . " WHERE id=?", [$idArticle]);
    }

}// End Class Tables


