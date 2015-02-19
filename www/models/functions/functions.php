<?php
    function News_getAll(){
        mysql_connect('localhost', 'root', '');
        mysql_select_db('testt');
        $sql = 'SELECT * FROM news Order by id desc';
        $res = mysql_query($sql);

        $ret = [];
        while (false !== $row = mysql_fetch_assoc($res)) {
            $ret[] = $row;
        }
        return $ret;
    }
