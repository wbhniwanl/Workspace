<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/15
 * Time: 22:58
 */
class PdoBb
{
    private $pdo = null;

    public $statement = null;

    public $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ",
    );

    public function construct($dsn, $user = '', $pass = '', $persistent = false, $charset = "utf8")
    {
        $this->options[PDO::MYSQL_ATTR_INIT_COMMAND] .= $charset;
        if ($persistent) {
            $this->options[PDO::ATTR_PERSISTENT] = true;
        }
        $this->pdo = new PDO($dsn, $user, $pass, $this->options);

    }
    /**
    全局属性设置，包括：列名格式和错误提示类型    可以使用数字也能直接使用参数
     */
    public function setAttr($param, $val = '')
    {
        if (is_array($param)) {
            foreach ($param as $key => $val) {
                $this->pdo->setAttribute($key, $val);
            }
        } else {
            if ($val != '') {
                $this->pdo->setAttribute($param, $val);
            } else {
                return false;
            }
        }
    }
    /**
    生成一个编译好的sql语句模版 你可以使用 ? :name 的形式
    返回一个statement对象
     */
    public function prepare($sql)
    {
        if (empty($sql)) {
            return false;
        }
        $this->statement = $this->pdo->prepare($sql);
        return $this->statement;
    }
    /**
    执行Sql语句，一般用于 增、删、更新或者设置  返回影响的行数
     */
    public function exec($sql)
    {
        if (empty($sql)) {
            return false;
        }
        try {
            return $this->pdo->exec($sql);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    /**
    执行有返回值的查询，返回PDOStatement  可以通过链式操作，可以通过这个类封装的操作获取数据
     */
    public function query($sql)
    {
        if (empty($sql)) {
            return false;
        }
        $this->statement = $this->pdo->query($sql);
        return $this->statement;
    }
    /**
    开启事务
     */
    public function beginTransaction()
    {
        return $this->pdo->beginTransaction();
    }
    /**
    提交事务
     */
    public function commit()
    {
        return $this->pdo->commit();
    }
    /**
    事务回滚
     */
    public function rollBack()
    {
        return $this->pdo->rollBack();
    }

    /**
     * 得到最后插入ID
     */
    public function lastInertId()
    {
        return $this->pdo->lastInsertId();
    }

    //**   PDOStatement 类操作封装    **//

    /**
    让模版执行SQL语句，1、执行编译好的 2、在执行时编译
     */
    public function execute($param = "")
    {
        if (is_array($param)) {
            try {
                return $this->statement->execute($param);
            } catch (Exception $e) {
                //return $this->errorInfo();
                return $e->getMessage();
            }
        } else {
            try {
                return $this->statement->execute();
            } catch (Exception $e) {
                /* 返回的错误信息格式
                [0] => 42S22
                [1] => 1054
                [2] => Unknown column 'col' in 'field list'
                return $this->errorInfo();
                 */
                return $e->getMessage();
            }
        }
    }

    /**
    参数1说明：
    PDO::FETCH_BOTH        也是默认的，两者都有（索引，关联）
    PDO::FETCH_ASSOC    关联数组
    PDO::FETCH_NUM        索引
    PDO::FETCH_OBJ            对象
    PDO::FETCH_LAZY        对象 会附带queryString查询SQL语句
    PDO::FETCH_BOUND    如果设置了bindColumn，则使用该参数
     */
    public function fetch($fetch_type = PDO::FETCH_ASSOC)
    {
        if (is_object($this->statement)) {
            return $this->statement->fetch($fetch_type);
        }
        return false;
    }
    /**
    参数1说明：
    PDO::FETCH_BOTH        也是默认的，两者都有（索引，关联）
    PDO::FETCH_ASSOC    关联数组
    PDO::FETCH_NUM        索引
    PDO::FETCH_OBJ        对象
    PDO::FETCH_COLUMN    指定列 参数2可以指定要获取的列
    PDO::FETCH_CLASS    指定自己定义的类
    PDO::FETCH_FUNC        自定义类 处理返回的数据
    PDO_FETCH_BOUND    如果你需要设置bindColumn，则使用该参数
    参数2说明：
    给定要处理这个结果的类或函数
     */
    public function fetchAll($fetch_type = PDO::FETCH_ASSOC, $handle = '')
    {
        if (empty($handle)) {
            return $this->statement->fetchAll($fetch_type);
        }
        return $this->statement->fetchAll($fetch_type, $handle);
    }
    /**
    以对象形式返回 结果 跟fetch(PDO::FETCH_OBJ)一样
     */
    public function fetchObject($class_name)
    {
        if (empty($clss_name)) {
            return $this->statement->fetchObject();
        }
        return $this->statement->fetchObject($class_name);
    }

    public function fetchColumn($intColumn = 0)
    {
        return $this->statement->fetchColumn($intColumn);
    }

    /**
    public function bindColumn($array=array(),$type=EXTR_OVERWRITE){
    if(count($array)>0){
    extract($array,$type);
    }
    //$this->statement->bindColumn()
    }
     */

    /**
    以引用的方式绑定变量到占位符(可以只执行一次prepare，执行多次bindParam达到重复使用的效果)
     */
    public function bindParam($parameter, $variable, $data_type = 'STR', $length = 0)
    {
        switch ($data_type) {
            case 'STR':
                $data_type = PDO::PARAM_STR;
                break;
            case 'INT':
                $data_type = PDO::PARAM_INT;
                break;
            default:
                $data_type = '';
                break;
        }
        return $this->statement->bindParam($parameter, $variable, $data_type, $length);
    }

    /**
    返回statement记录集的行数
     */
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
    public function count()
    {
        return $this->statement->rowCount();
    }
    public function columnCount()
    {
        $this->statement->execute();
        return $this->statement->columnCount();
    }
    public function getColumnMeta($intColumn)
    {
        return $this->statement->getColumnMeta($intColumn);
    }

    /**
    关闭
     */
    public function close()
    {
        return $this->statement->closeCursor();
    }

    public function closeCursor()
    {
        return $this->statement->closeCursor();
    }
    /**
    返回错误信息也包括错误号
     */
    private function errorInfo()
    {
        return $this->statement->errorInfo();
    }
    /**
    返回错误号
     */
    private function errorCode()
    {
        return $this->statement->errorCode();
    }

    //简化操作
    public function insert($table, $data)
    {
        if (!is_array($data)) {
            return false;
        }
        $cols = array();
        $vals = array();
        foreach ($data as $key => $val) {
            $cols[] = $key;
            $vals[] = "'" . $val . "'"; //字符串形式
        }
        $sql = "INSERT INTO {$table} (";
        $sql .= implode(",", $cols) . ") VALUES (";
        $sql .= implode(",", $vals) . ")";
        return $this->exec($sql);
    }
    public function insertBind($table, $arrayData)
    {
        if (!is_array($arrayData)) {
            return false;
        }
        $vals = array_keys($arrayData);
        $cols = array();
        /*
        $arrayobject  = new  ArrayObject( $arrayData );
        $iterator        =  $arrayobject->getIterator();
        while($iterator->valid()) {
        $vals[] =  ':' . $iterator->key() . '';
        $iterator->next();
        }
         */
        $c    = implode('', $vals);
        $cols = array_filter(explode(':', $c));

        $sql = "INSERT INTO {$table} (";
        $sql .= implode(",", $cols) . ") VALUES (";
        $sql .= implode(",", $vals) . ")";

        $this->statement = $this->pdo->prepare($sql);
        $this->statement->execute($arrayData);
        return $this->statement->rowCount();
    }

    public function update($table, $data, $where)
    {
        if (!is_array($data)) {
            return false;
        }
        $set = array();
        foreach ($data as $key => $val) {
            $set[] = $key . "='" . $val . "'";
        }
        $sql = "UPDATE {$table} SET ";
        $sql .= implode(",", $set);
        $sql .= " WHERE " . $where;
        return $this->exec($sql);
    }
    public function updateBind($sql, $arrayWhere)
    {
        if (empty($sql) || !is_array($arrayWhere)) {
            return false;
        }
        $this->statement = $this->pdo->prepare($sql);
        $this->statement->execute($arrayWhere);
        return $this->statement->rowCount();
    }

    public function delete($table, $where)
    {
        if (empty($table) || empty($where)) {
            return false;
        }
        $sql = "DELETE FROM {$table} WHERE " . $where;
        return $this->exec($sql);
    }
    public function deleteBind($sql, $arrayWhere)
    {
        if (empty($sql) || !is_array($arrayWhere)) {
            return false;
        }
        $this->statement = $this->pdo->prepare($sql);
        $this->statement->execute($arrayWhere);
        return $this->statement->rowCount();
    }
}
