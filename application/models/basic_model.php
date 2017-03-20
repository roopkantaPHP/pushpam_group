<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Basic_model extends CI_Model {
    public function list_table($tablename) {
        return $this->db->select('*')
                    ->from($tablename)
                    ->get()
                    ->result();
    }

    public function list_table_array($tablename) {
        return $this->db->select('*')
                    ->from($tablename)
                    ->get()
                    ->result_array();
    }

    //List table orderby
    public function list_table_orderby($tablename,$orderby_column,$orderby_value='asc') {
        return $this->db->select('*')
                    ->from($tablename)
                    ->order_by($orderby_column,$orderby_value)
                    ->get()
                    ->result();
    }

    public function update_table_where2($tablename,$array,$col1,$val1,$col2,$val2)
    {
        $this->db->where($col1,$val1);
        $this->db->where($col2,$val2);
        $this->db->update($tablename,$array);
    }

    public function get_from_table($tablename,$columnname,$value){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname,$value)
                        ->get()
                        ->result();
    }

    public function get_from_table_group($tablename,$columnname,$value, $group_field){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname,$value)
                        ->group_by($group_field)
                        ->get()
                        ->result();
    }

    public function get_values_from_table($tablename,$values,$columnname,$value){

        return $this->db->select($values)
                        ->from($tablename)
                        ->where($columnname,$value)
                        ->get()
                        ->result();
    }

    public function get_values_from_table_where2($tablename,$values,$columnname,$value,$columnname1,$value2){

        return $this->db->select($values)
                        ->from($tablename)
                        ->where($columnname,$value)
                        ->where($columnname1,$value2)
                        ->get()
                        ->result();
    }

    public function get_from_table_where4($tablename,$col1,$val1,$col2,$val2,$col3,$val3,$col4,$val4){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->where($col3,$val3)
                        ->where($col4,$val4)
                        ->get()
                        ->result();
    }

    public function get_from_table_where3($tablename,$col1,$val1,$col2,$val2,$col3,$val3){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->where($col3,$val3)
                        ->get()
                        ->result();
    }

    public function get_from_table_where2($tablename,$col1,$val1,$col2,$val2){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->get()
                        ->result();
    }
    //roopkanta 22nd feb 2016
    public function get_from_table_where_in($tablename,$col1,$val1,$col2,$val2){
        return $this->db->select('*')
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where_in($col2,$val2)
                        ->get()
                        ->result();
    }


    public function get_from_table_orderby($tablename,$columnname,$value,$orderby_column,$orderby_value='asc'){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname,$value)
                        ->order_by($orderby_column,$orderby_value)
                        ->get()
                        ->result();
    }

    public function get_from_table_where2_orderby($tablename,$columnname1,$value1,$columnname2,$value2,$orderby_column,$orderby_value='asc'){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname1,$value1)
                        ->where($columnname2,$value2)
                        ->order_by($orderby_column,$orderby_value)
                        ->get()
                        ->result();
    }

    public function get_from_table_where3_orderby($tablename,$columnname1,$value1,$columnname2,$value2,$columnname3,$value3,$orderby_column,$orderby_value='asc'){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname1,$value1)
                        ->where($columnname2,$value2)
                        ->where($columnname3,$value3)
                        ->order_by($orderby_column,$orderby_value)
                        ->get()
                        ->result();
    }

    public function get_from_table_where2_orderby1($tablename,$columnname1,$value1,$columnname2,$value2,$orderby_column,$orderby_value='asc'){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname1,$value1)
                        ->where($columnname2,$value2)
                        ->order_by($orderby_column,$orderby_value)
                        ->limit(0,2)
                        ->get()
                        ->result();
    }

    public function get_from_table_where3_orderby1($tablename,$columnname1,$value1,$columnname2,$value2,$columnname3,$value3,$orderby_column,$orderby_value='asc'){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($columnname1,$value1)
                        ->where($columnname2,$value2)
                        ->where($columnname3,$value3)
                        ->order_by($orderby_column,$orderby_value)
                        ->limit(0,2)
                        ->get()
                        ->result();
    }
    /********************* ADD **************************/

    //Add to table : return inserted id
    public function add_to_table($tablename,$array)
    {
        $this->db->insert($tablename,$array);
        return $this->db->insert_id();
    }

    public function add_batch_table($tablename,$array) {
        $this->db->insert_batch($tablename,$array);
        return $this->db->insert_id();
    }

    /********************* EDIT/UPDATE **************************/

    //Update a table
    public function update_table($tablename,$array,$columnname,$value)
    {
        $this->db->where($columnname,$value);
        $this->db->update($tablename,$array);
    }

    public function update_table_where3($tablename,$array,$col1,$val1,$col2,$val2,$col3,$val3)
    {
        $this->db->where($col1,$val1);
        $this->db->where($col2,$val2);
        $this->db->where($col3,$val3);
        $this->db->update($tablename,$array);
    }

    /********************* Delete for settings table **************************/

    //delete a table
    public function delete_table($tablename, $columnname, $value)
    {
        $this->db->where($columnname,$value);
        $this->db->delete($tablename);
    }

    //delete a table
    public function delete_table_where2($tablename, $col1, $value1, $col2, $value2)
    {
        $this->db->where($col1,$value1);
        $this->db->where($col2,$value2);
        $this->db->delete($tablename);
    }

    //delete a table
    public function delete_table_where3($tablename, $col1, $value1, $col2, $value2, $col3, $value3)
    {
        $this->db->where($col1,$value1);
        $this->db->where($col2,$value2);
        $this->db->where($col3,$value3);
        $this->db->delete($tablename);
    }
    //delete a table with where_in condition
    //roopkanta 22nd feb 2016
    public function delete_table_where_in($tablename, $col1, $value1, $col2, $value2)
    {
        $this->db->where($col1,$value1);
        $this->db->where_in($col2,$value2);
        $this->db->delete($tablename);

    }

    /*---------------------****************RANJITH******************-----------------------*/
    //Common Select
    public function select_row($where,$table,$select) {
        return $this->db->select($select)
                        ->from($table)
                        ->where($where)
                        ->get()
                        ->row();
    }

    public function select_query($where,$table,$select,$group_by) {
        return $this->db->select($select)
                        ->from($table)
                        ->where($where)
                        ->group_by($group_by)
                        ->get()
                        ->result();
    }
    //Common Updation
    public function update_query($where,$table,$data) {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    //Common Insertion
    public function insert_query($table,$data) {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    //Common Deletion
    public function delete_query($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
    //Two tables Join
    public function select_join_query($where,$select,$table,$join_table,$join_condition) {
      return $this->db->select($select)
                        ->from($table)
                        ->join($join_table,$join_condition)
                        ->where($where)
                        ->get()
                        ->result();
    }

    public function get_date_sort($table,$where,$group_by,$order_by) {
        return $this->db->select('*')
                        ->from($table)
                        ->where($where)
                        ->group_by($group_by)
                        ->order_by($order_by,'DESC')
                        ->get()
                        ->result();
    }


    public function get_from_table_orderby_with_condition($tablename,$where,$orderby_column,$orderby_value='asc'){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($where)
                        ->order_by($orderby_column,$orderby_value)
                        ->get()
                        ->result();
    }

    public function get_query_result($query) {
        return $this->db->query($query)->result();
    }

    public function run_query($query) {
        return $this->db->query($query);
    }

    public function universal_text_all_details()
    {
        return $this->db->select('u.id_universal_text,u.title,u.text_levier,u.text_remuneration,u.area,u.interest,u.minimum_duration,u.is_delete,l.id_levier,l.libelle l_libelle,r.id_remuneration,r.libelle r_libelle,r.libelle2,r.libelle3')
                        ->from('universal_text u')
                        ->join('levier l','u.id_levier = l.id_levier')
                        ->join('remuneration r','u.id_remuneration = r.id_remuneration')
                        ->order_by('l.id_levier','asc')
                        ->get()
                        ->result();
    }
    public function universal_text_details($id_universal_text)
    {
        return $this->db->select('u.id_universal_text,u.title,u.text_levier,u.text_remuneration,u.area,u.interest,u.minimum_duration,u.is_delete,l.id_levier,l.libelle l_libelle,r.id_remuneration,r.libelle r_libelle,r.libelle2')
                        ->from('universal_text u')
                        ->join('levier l','u.id_levier = l.id_levier')
                        ->join('remuneration r','u.id_remuneration = r.id_remuneration')
                        ->where('u.id_universal_text',$id_universal_text)
                        ->get()
                        ->result();
    }

    public function get_from_wherein($tablename, $columnname, $values) {
        return $this->db->select('*')
                        ->from($tablename)
                        ->where_in($columnname, $values)
                        ->get()
                        ->result();
    }

    public function get_from_where($table_name, $where) {
        return $this->db->select('*')
                        ->from($table_name)
                        ->where($where)
                        ->get()
                        ->result();
    }

    public function get_from_table_where2_count($tablename,$col1,$val1,$col2,$val2){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->count_all_results();
    }

    public function custom_stats_sum_volume($col1,$val1,$col2,$val2){

        $q = $this->db->select('sum(volume) as volume')
                        ->from('stats_custom')
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->get();

        return ($q->num_rows == 1) ? $q->row('volume') : 0;
    }

    public function custom_stats_sum_volume_duplicate($col1,$val1,$col2,$val2,$start,$end){

        $q = $this->db->select('sum(volume) as volume')
                        ->from('stats_custom')
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->where('date BETWEEN "'.$start.'" AND "'.$end.'"')
                        ->get();

        return ($q->num_rows == 1) ? $q->row('volume') : 0;
    }

    public function custom_stats_sum_volume_kitmail($col1,$val1,$col2,$val2,$col3,$val3,$date,$kitmail_all_id){

        if($val3 == 0){
            $where = $col3 .' IN ('.$kitmail_all_id.')' ;
        }else{
            //$where = $col3 .'='. $val3;
            $where = "`".$col3."` = ".$val3;
           // ->where($col3,$val3)
        }

        $q = $this->db->select('sum(volume) as volume')
                        ->from('stats_custom')
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->where($where)
                        ->where('date',$date)
                        ->get();

        return ($q->num_rows == 1) ? $q->row('volume') : 0;
    }

    public function get_from_table_where3_column($tablename,$select, $col1,$val1,$col2,$val2,$col3,$val3){

        return $this->db->select($select)
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        ->where($col3,$val3)
                        ->get()
                        ->result();
    }

    public function select_query_no_groupby($where,$table,$select) {
        return $this->db->select($select)
                        ->from($table)
                        ->where($where)
                        ->get()
                        ->result();
    }

    public function get_values_from_table_where2_with_in($tablename,$values,$columnname,$value,$columnname1,$value2){

        return $this->db->select($values)
                        ->from($tablename)
                        //->where_in($columnname,$value)
                        ->where($columnname.' IN ('.$value.')')
                        ->where($columnname1,$value2)
                        ->get()
                        ->result();
    }

    public function get_from_where_in($table_name,$columnname,$value, $where) {
        return $this->db->select('*')
                        ->from($table_name)
                        //->where_in($columnname,$value)
                        ->where($columnname.' IN ('.$value.')')
                        ->where($where)
                        ->get()
                        ->result();
    }

    public function get_from_table_where2_in($tablename,$col1,$val1,$col2,$val2){

        return $this->db->select('*')
                        ->from($tablename)
                        //->where_in($col1,$val1)
                        ->where($col1.' IN ('.$val1.')')
                        ->where($col2,$val2)
                        ->get()
                        ->result();
    }

    public function get_from_table_in($tablename,$columnname,$value){

        return $this->db->select('*')
                        ->from($tablename)
                        //->where_in($columnname,$value)
                        ->where($columnname.' IN ('.$value.')')
                        ->get()
                        ->result();
    }

    public function get_from_table_where21($tablename,$col1,$val1,$col2,$val2,$num){

        return $this->db->select('*')
                        ->from($tablename)
                        ->where($col1,$val1)
                        ->where($col2,$val2)
                        //->limit($num)
                        ->order_by('id_csv','desc')
                        ->get()
                        ->result();
    }


}
