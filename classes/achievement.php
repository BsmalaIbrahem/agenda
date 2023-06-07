<?php
class achievement{

    public function add_achievement($achievement,$description, $date, $user_id){
    	achievement_DB::insert_achievement_intoDatabase($achievement,$description, $date, $user_id);

    }


    public function update_achievement($id ,$achievement,$description, $date){
    	achievement_DB::update_achievement_inDatabase($id ,$achievement,$description, $date);
        $this->page_after_update($id);

    }

    private function page_after_update($id){
        echo '<script>window.location = "show_achievement.php?id='.$id.'"</script>';
    }

    public function delete_achievement($id){
    	achievement_DB::delete_achievement_fromDatabase($id);
        $this->page_after_addOrDelete();
    }

    private function page_after_addOrDelete(){
        echo '<script>location = "achievement.php"</script>';
    }

    public function display_achievements($user_id){
       return achievement_DB::select_all_achievements_fromDatabase($user_id);
    } 

    public function get_one_achievement($id, $user_id){
        return achievement_DB::select_one_achievement_fromDatabase($id,$user_id);
    }
    
    public function search_for_achievement($content, $user_id){
        return achievement_DB::search($content,$user_id);
    }
 
} 