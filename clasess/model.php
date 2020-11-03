<?php

class model extends db{
    
    protected $table = '';
    
    protected $fillable = [];
    public function received_data(){
        $fields = $this->fetch("SHOW COLUMNS FROM ".$this->table);
        foreach ($fields as $filed) {
            # code...
            $this->fillable[] = $filed['Field'];    
        }
        $data=[];
        foreach ($this->fillable as $k => $v) {
            if (property_exists($this, $v)) {
                $data[$v]=$this->$v;
            }
        }
        return $data;
    }
    
    public function save(){
        //get the prepared sql for insert.
        $data=$this->received_data();
        $sql  = 'INSERT INTO '.$this->table;
        $sql .= ' (';
        $sql .= implode(',',array_keys($data));
        $sql .= ") VALUES('";
        $sql .= implode("','", array_values($data));
        $sql .= "');";
        $res = $this->query($sql);
        
        if ($res) {
            /*
            * This function is predefined in the DB class.
            * It returns the last inserted id in the database.
            */
            return $this->last_inserted_id();
        }else{
            // throw new Exception( 'Query error:'.mysqli_error($con) );
            return false;
        }
    }

    public static function saveArray($data){
        //get the prepared sql for insert.
        if (!is_array($data) || count($data)<1) return false;
        $a = new static;
        $sql  = 'INSERT INTO '.$a->table;
        $sql .= ' (`';
        $sql .= implode('`,`',array_keys($data));
        $sql .= "`) VALUES('";
        $sql .= implode("','", array_values($data));
        $sql .= "');";
        $res = $a->query($sql);
        
        if ($res) {
            /*
            * This function is predefined in the DB class.
            * It returns the last inserted id in the database.
            */
            return $a->last_inserted_id();
        }else{
            // throw new Exception( 'Query error:'.mysqli_error($con) );
            return false;
        }
    }
    
    // UPDATE users SET col1='value',col2='value' WHERE id=3
    
    public function update(){
        $data=$this->received_data();
        $i=0;
        $sql="UPDATE {$this->table} SET ";
        foreach ($data as $k => $v) {
            $sql .= $k."='{$v}' ";
            if ($i < count($data)-1) {
                $sql .=',';
            }
            $i++;
        }
        $sql .= ' WHERE id='.$this->id;
        //perfom this SQL with query function which is predefined in the DB class.
        $res = $this->query($sql);
        
        if ($res) {
            return true;
        }else{
            throw new Exception( 'Query error:'.mysqli_error($con) );
        }
    }

    // updateArray Method usage
    // $x = array();
    // $x['status'] = 2;
    // table::updateArray($x,'id',$uid);
    public static function updateArray($data, $field, $value){
        $a = new static;
        $i=0;
        $sql="UPDATE {$a->table} SET ";
        foreach ($data as $k => $v) {
            $sql .= '`'.$k."`='{$v}' ";
            if ($i < count($data)-1) {
                $sql .=',';
            }
            $i++;
        }
        $sql .= " WHERE `".$field."`='".$value."'";
        //perfom this SQL with query function which is predefined in the DB class.
        $res = $a->query($sql);
        
        if ($res) {
            return true;
        }else{
            throw new Exception( 'Query error:'.mysqli_error($con) );
        }
    }

    public static function all(){
        $a = new static;
        return $a->fetch("SELECT * FROM {$a->table}");
    }
    
    public static function where($col , $val){
        $a = new static;
        $data = $a->fetch("SELECT * FROM {$a->table} WHERE `$col` = '$val' LIMIT 1");
        if ($data){
            return $data[0];
        }else{
            return False;
        }
    }
    
    public static function all_sql( $val){
        $a = new static;
        $data = $a->fetch("SELECT *,{$a->table}.id as mid FROM {$a->table}  $val");
        if ($data){
            return $data;
        }else{
            return False;
        }
    }
    
    public static function custom_sql($sql){
        $a = new static;
        $data = $a->fetch($sql);
        if ($data){
            return $data;
        }else{
            return False;
        }
    }

    public static function find($id){
        if (!is_numeric($id)){
            return False;
        }
        $a = new static;

        $data = $a->one("SELECT * FROM {$a->table} WHERE id='$id' LIMIT 1");
        if ($data){
            return $data;
        }else{
            return False;
        }
    }

    public function delete(){
        $a = new static;
        $id = $this->id;
        $sql = "DELETE FROM {$a->table} WHERE id={$id}";
        $this->query($sql);
    }

    public static function count_all(){
        $a = new static;
        return $a->count("SELECT * FROM {$a->table}");
    }
    public static function count_sql($val){
        $a = new static;
        return $a->count("SELECT * FROM {$a->table} $val");
    }
    public static function sum_sql($col, $val){
        $a = new static();
        $data = $a->one("SELECT sum($col) as amount FROM {$a->table} $val limit 1");
        return $data['amount'];
    }

    public static function secure($el){
        $a = new static;
        $se = $a->con()->real_escape_string(htmlspecialchars($el));
         return $se;
    }
    public static function get_row(){
        $row = array();
        $a = new static;
        $rows = $a->all();
        foreach ($rows as $key => $value) {
            $row[$value['id']] = $value;
        }
    return $row;
    }
    public static function get_ids(){
        $row = array();
        $a = new static;
        $ids = $a->fetch("SELECT `id` FROM {$a->table}");
        foreach ($ids as $id) {
            $row[] = $id['id'];
        }
    return $row;
    }
    public static function get_list(){
        $row = array();
        $a = new static;
       $rows = $a->all();
       foreach ($rows as $key => $value) {
           $row[$value['id']] = $value['name'];
       }
    return $row;
    }
    public static function option($y ="", $x ='1=1'){
        $a = new static;
        $res = '<option value="" >Select '.$a->table.' ...</option>';
        $data = $a->fetch("SELECT id,name FROM {$a->table} WHERE $x ");
        foreach ($data as $key => $value) {
            $id = $value['id'];
            $name = $value['name'];
            if ($id == $y) {
                $res.= "<option value='$id' selected> $name </option>";
            }else {
                $res.= "<option value='$id'> $name </option>";
            }
        }
        print_r ($res);
    }
    
    public function enum($y,$x = "0",$col = "status" ){
        $matches =[];
        $a = new static;
        $res = '<option value="" >Select '.$y.' ...</option>';
        $type = $a->fetch("SHOW COLUMNS FROM  {$a->table} WHERE Field =\"$col\"" );
        $type = $type[0]['Type'];
        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $enums = explode("','", $matches[1]);
        foreach($enums as $name){  
            if ($name == $x) {
                $res.= "<option value='$name' selected> $name </option>";
            }else{
                $res.= "<option value='$name'> $name </option>";
            }
        }
        print_r ($res);
    }
    public function update_status($id,$val){
        $a = new static;
        $a->id = $id;
        $a->status = $val;
        return $a->update();
    }
    // public function all_where_sql($val1,$val2){
    //  $a = new static;
    //  $val1 = $this->all_sql();
    //  $val2 = $this->all_where(w1,w2);
    //  return $this->a($val1,$val2);
    // }
    public static function option_cat($y ="", $x ='1=1'){
        $a = new static;
        $res = '<option value="" >Select Category ...</option>';
        $data = $a->fetch("SELECT id,cat FROM {$a->table} WHERE $x ");
        foreach ($data as $key => $value) {
            $id = $value['id'];
            $cat = $value['cat'];
            if ($id == $y) {
                $res.= "<option value='$id' selected> $cat </option>";
            }else {
                $res.= "<option value='$id'> $cat </option>";
            }
        }
        print_r ($res);
    }
    public static function option_item($y ="", $x ='1=1'){
        $a = new static;
        $res = '<option value="" >Select Category ...</option>';
        $data = $a->fetch("SELECT id,title FROM {$a->table} WHERE $x ");
        foreach ($data as $key => $value) {
            $id = $value['id'];
            $title = $value['title'];
            if ($id == $y) {
                $res.= "<option value='$id' selected> $title </option>";
            }else {
                $res.= "<option value='$id'> $title </option>";
            }
        }
        print_r ($res);
    }
}
