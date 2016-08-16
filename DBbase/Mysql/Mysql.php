<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/15
 * Time: 19:31
 */
class Mysql
{
    /**
     *php5.0后以mysql开头链接mysql数据库的都不在推荐使用
     */
    public function connect($host, $username, $password, $dbName, $charset)
    {
        //连接mysql
        $link = @mysql_connect($host, $username, $password) or die('数据库连接失败<br/>ERROR ' . mysql_errno() . ':' . mysql_error());
        //设置字符集
        mysql_set_charset($charset);
        //打开指定的数据库
        mysql_select_db($dbName) or die('指定的数据库打开失败');
        return $link;

    }
    public function connect1($config)
    {
        //连接mysql
        $link = @mysql_connect($config['host'], $config['username'], $config['password']) or die('数据库连接失败<br/>ERROR ' . mysql_errno() . ':' . mysql_error());
        //设置字符集
        mysql_set_charset($config['charset']);
        //打开指定的数据库
        mysql_select_db($config['dbName']) or die('指定的数据库打开失败');
        return $link;
    }

    /**建议使用该函数
     * 连接MYSQL函数,通过常量的形式来连接数据库
     * 自定义配置文件，配置文件中自定义常量，包含需要使用的信息
     * @return resource
     */
    public function connect2()
    {
        //连接mysql
        $link = @mysql_connect(DB_HOST, DB_USER, DB_PWD) or die('数据库连接失败<br/>ERROR ' . mysql_errno() . ':' . mysql_error());
        //设置字符集
        mysql_set_charset(DB_CHARSET);
        //打开指定的数据库
        mysql_select_db(DB_DBNAME) or die('指定的数据库打开失败');
        return $link;
    }

    /* array(
    'username'=>'king',
    'password'=>'123123',
    'email'=>'dh@qq.com'
    ) */

    /**
     * 插入记录的操作
     * @param array $array
     * @param string $table
     * @return boolean
     */
    public function insert($array, $table)
    {
        $keys   = join(',', array_keys($array));
        $values = "'" . join("','", array_values($array)) . "'";
        $sql    = "insert {$table}({$keys}) VALUES ({$values})";
        $res    = mysql_query($sql);
        if ($res) {
            return mysql_insert_id();
        } else {
            return false;
        }
    }

    /**
     * MYSQL更新操作
     * @param array $array
     * @param string $table
     * @param string $where
     * @return number|boolean
     */
    public function update($sets, $array, $table, $where = null)
    {
        foreach ($array as $key => $val) {
            $sets .= $key . "='" . $val . "',";
        }

        $sets  = rtrim($sets, ','); //去掉SQL里的最后一个逗号
        $where = $where == null ? '' : ' WHERE ' . $where;
        $sql   = "UPDATE {$table} SET {$sets} {$where}";
        $res   = mysql_query($sql);
        if ($res) {
            return mysql_affected_rows();
        } else {
            return false;
        }
    }

    /**
     * 删除记录的操作
     * @param string $table
     * @param string $where
     * @return number|boolean
     */
    public function delete($table, $where = null)
    {
        $where = $where == null ? '' : ' WHERE ' . $where;
        $sql   = "DELETE FROM {$table}{$where}";
        $res   = mysql_query($sql);
        if ($res) {
            return mysql_affected_rows();
        } else {
            return false;
        }
    }

    /**
     * 查询一条记录
     * @param string $sql
     * @param string $result_type
     * @return boolean
     */
    public function fetchOne($sql, $result_type = MYSQL_ASSOC)
    {
        $result = mysql_query($sql);
        if ($result && mysql_num_rows($result) > 0) {
            return mysql_fetch_array($result, $result_type);
        } else {
            return false;
        }
    }

    /**
     * 得到表中的所有记录
     * @param string $sql
     * @param string $result_type
     * @return boolean
     */
    public function fetchAll($sql, $result_type = MYSQL_ASSOC)
    {
        $result = mysql_query($sql);
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_array($result, $result_type)) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    /**取得结果集中的记录的条数
     * @param string $sql
     * @return number|boolean
     */
    public function getTotalRows($sql)
    {
        $result = mysql_query($sql);
        if ($result) {
            return mysql_num_rows($result);
        } else {
            return false;
        }

    }

    /**释放结果集
     * @param resource $result
     * @return boolean
     */
    public function freeResult($result)
    {
        return mysql_free_result($result);
    }

    /**断开MYSQL
     * @param resource $link
     * @return boolean
     */
    public function close($link = null)
    {
        return mysql_close($link);
    }

}
