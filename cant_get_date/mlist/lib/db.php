<?

  class db
  {
      var $db_name;
      var $db_host;
      var $db_user;
      var $db_password;

      var $id_sql;
      var $num_rows;
      var $num_fields;
      var $middle_num;
      var $id_result;
      var $result;
      var $id_last;

      var $error;
      var $errorno;
      var $connect_error;

      var $debug;

      var $tmp_tables;
      var $cnt_tmp_tables;
      //--------------------------------------------------------------------
      // Конструктор класса 
      //
      //--------------------------------------------------------------------

      function db()
      {
          $this -> db_name        = DB_NAME;
          $this -> host           = DB_HOST;
          $this -> user           = DB_USER;
          $this -> password       = DB_PASS;

          $this -> tmp_tables     = array();
          $this -> cnt_tmp_tables = 0;
          $this -> connect();
          
          return true;
      }
      //------------------          END          --------------------------
      //--------------------------------------------------------------------
      // 
      //
      //--------------------------------------------------------------------

      function connect()
      {
          $connect_error = false;
          if(!@mysql_connect($this -> host, $this -> user, $this -> password) or !@mysql_select_db($this -> db_name))
          {
              print " Error mysql connect !";
              exit;
              $this -> $connect_error = true;
          }
      }
      //------------------          END          --------------------------
      //--------------------------------------------------------------------
      // Функция выполняет sql запрос к базе данный
      // передаваемый параметр строка запроса
      //--------------------------------------------------------------------
        
      function exec_query($query)
      {
          if($this -> debug)
          {
              print "Query text : ";
              print $query."<br>";
          }

          $this -> id_sql = @mysql($this->db_name,$query);
                
          $this -> num_rows = @mysql_num_rows($this->id_sql);
          $this -> num_fields = @mysql_num_fields($this->id_sql);
          $this -> id_last = @mysql_insert_id();
          $this -> middle_num = ceil ($this -> num_rows / 2);
          $this -> id_result = 0;
                
          $this -> error = @mysql_error();
          $this -> error_no = @mysql_errno();

          if($this -> debug)
          {
              if ($this -> error_no)
              {
                  print "<b>Error in query : ";
                  print $this -> error."</b><br>";
              } else
              {
                  print "Query : OK<BR>";
              }
          }
          return true;
      }
      //------------------          END          --------------------------
      //--------------------------------------------------------------------
      // Возвращает следующие значение из сделанного запроса
      //
      //--------------------------------------------------------------------
        
      function get_data()
      {
          $sql = $this -> id_sql;

          $result = @mysql_fetch_assoc($sql);

          $this -> id_last = @mysql_insert_id($sql);

          $this -> error = @mysql_error();
          $this -> error_no = @mysql_errno();
          $this -> id_result++;

          $this -> result = $result;

          if($this -> debug)
          {
              if($this -> error_no)
              {
                  print "<b>Error in get_data :";
                  print $this -> error."</b><br>";
              }
          }
          return $result;
      }
      //------------------          END          --------------------------
      //--------------------------------------------------------------------
      // 
      //
      //--------------------------------------------------------------------

      function select_into_table($select_query)
      /* save result of select query into temp table. 
         field names must be uniquie and have 1 word.
         RETURN : name of temp table.
         temp tables can be dropped by calling drop_into_tables();
      */
      {
          $result = "tmp".time().(string)((double) microtime() * 1000000);

          $an_filename = str_replace("\\","/","/tmp/$result.tmp");

          $this -> exec_query($select_query);

          $field_name  = "";
          $create_sql  = "create table $result( ";
          $insert_part = "(";

          for ($i = 0; $i < $this -> num_fields; $i++)
          {
              $field_name  = @mysql_field_name($this -> id_sql,$i);
            
              $create_sql  .= $field_name." ";
              $insert_part .="$field_name,";

              $f_type  = @mysql_field_type($this -> id_sql,$i);
              $f_len   = @mysql_field_len ($this -> id_sql,$i);
              switch ($f_type)
              {
                  case "string": {
                                     $create_sql  .="varchar($f_len),";
                                     break;
                                 }
                  case "blob"  : {
                                     $create_sql .="text,";
                                     break;
                                 }
                  default      : $create_sql .="$f_type,";
              };
          };
          $create_sql  = substr($create_sql,0,strlen($create_sql)-1).")";
          $insert_part = substr($insert_part,0,strlen($insert_part)-1).")";
          $values_pattern = $insert_part;
          $insert_part    = "insert into $result $insert_part values ";

          $i = 0;
          while ($this -> get_data())
          {
              $values[$i] = preg_replace("/(\w+)/e",'"\'".str_replace("\'","\\\'",$this->result["'.'\\1'.'"])."\'"',$values_pattern);
              $i++;
          };
          $this -> exec_query($create_sql);
          $this -> exec_query("lock tables $result write");
          for ($i = 0; $i < count($values); $i++)
          {
              $this -> exec_query($insert_part.$values[$i]);
          };
          $this -> exec_query("unlock tables");

          $this -> tmp_tables[$this -> cnt_tmp_tables] = $result;
          $this -> cnt_tmp_tables++;
          sleep(1);
          return $result;
      }

      function drop_into_tables()
      /* remove all tables created by select_into_table() */

      {
          for ($i = 0; $i < $this -> cnt_tmp_tables; $i++)
          {
              $this -> exec_query("drop table ".$this -> tmp_tables[$i]);
          }
          $this -> cnt_tmp_tables = 0;
      }

      function field_name($field_index)
      { 
          $result  = @mysql_field_name($this -> id_sql,$field_index);
          $this -> error = @mysql_error();
          $this -> error_no = @mysql_errno();
          if($this -> debug)
          {
              if ($this -> error_no)
              {
                  print "<b>Error in field_name :";
                  print $this -> error."</b><br>";
              }
          }

          return $result;
      }

      function reset_data_pointer()
      {
          @mysql_data_seek($this -> id_sql,0);

          $this -> error = @mysql_error();
          $this -> error_no = @mysql_errno();

          if($this -> debug)
          {
              if ($this -> error_no)
              {
                  print "<b>Error in data_seek :";
                  print $this -> error."</b><br>";
              }
          }
      }
      //------------------          END          --------------------------
      //--------------------------------------------------------------------
      // 
      //
      //--------------------------------------------------------------------
        
      function seek_data_pointer($num)
      {
          $this -> reset_data_pointer();

          @mysql_data_seek($this -> id_sql,$num);

          $this -> error = @mysql_error();
          $this -> error_no = @mysql_errno();

          if($this -> debug)
          {
              if ($this -> error_no)
              {
                  print "<b>Error in data_seek :";
                  print $this -> error."</b><br>";
              }
          }
                
      }
      //------------------          END          --------------------------
  }

?>
