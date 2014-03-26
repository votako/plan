<?php

  function get_profile_fields() {
    $db = new db();
    $fields = array();
    $db->exec_query('select * from ok_profile_fields');
    while($row = $db->get_data()) {
      $fields[$row[id]] = $row[name];
    }
    return $fields;
  }

  function get_profile_fields_sort() {
    $db = new db();
    $fields = array();
    $db->exec_query('select * from ok_prfile_fields');
    while($row = $db->get_data()) {
      $fields[$row[id]] = $row[weight];
    }
    return $fields;
  }

  function get_user($row,$t) {
    $db = new db();
    $sql = 'select * from ok_profile_fields f left outer join ok_profiles p on (p.field_id=f.id) where user_id='.$row[id].' order by group_weight,weight';
    $content = '';
    $db->exec_query($sql);
    $t->set('user_id',$row[id]);
    $count = 0;
    while($data = $db->get_data()) {
      $t->set('field_name_'.$data[field_id],$data[name]);
      $t->set('field_data_'.$data[field_id],$data[data]);
      $t->set('field_group_'.$data[field_id],$data[group]);
      $t->set('field_required_'.$data[field_id],$data[required]);
      $t->set('field_type_'.$data[field_id],$data[type]);
      $t->set('field_id_'.$data[field_id],$data[field_id]);
      $t->set('field_no_'.$data[field_id],$data[field_id]);
      $count++;
    }
    
    return $count;
  }

?>
