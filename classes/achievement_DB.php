<?php
class achievement_DB{

	public static function insert_achievement_intoDatabase($achievement,$description, $date, $user_id){
        $connect = DB::connect();
        $query = $connect->prepare('insert into achievement set achievement=?, description=? , date=? , user_id=?');
        $query->bind_param("sssi",$achievement,$description, $date, $user_id);
        $query->execute();
    }

    public static function update_achievement_inDatabase($id,$achievement,$description, $date){
        $connect = DB::connect();
        $query = $connect->prepare('update achievement set achievement=?, description=? , date=? where id=?'); 
        $query->bind_param("sssi",$achievement,$description, $date, $id);
        $query->execute();
    }

    public static function delete_achievement_fromDatabase($id){
        $connect = DB::connect();
        $query = $connect->prepare('delete from achievement where id=?');
        $query->bind_param("i",$id);
        $query->execute();
    }

    public static function select_all_achievements_fromDatabase($user_id){
        $connect = DB::connect();
        $query = $connect->prepare('select * from achievement where user_id=?');
        $query->bind_param("i",$user_id);
        $query->execute();
        $result = $query->get_result();
        return $result;
        
    }

    public static function select_one_achievement_fromDatabase($id,$user_id){
        $connect = DB::connect();
        $query = $connect->prepare('select * from achievement where id=? and user_id=?');
        $query->bind_param("ii",$id,$user_id);
        $query->execute();
        $result = $query->get_result();
        $row    = $result->fetch_assoc();
        return $row;
        
    }

    public static function search($content, $user_id){
        $content = $content.'%';
        $connect = DB::connect();
        $query = $connect->prepare("select * from achievement where user_id=? and achievement like ?");
        $query->bind_param("is",$user_id,$content);
        $query->execute();
        $result = $query->get_result();
        return $result;

    }
}