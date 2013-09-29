<?php
class Ranking {
    

    public function ordenaRanking(array $resultado){
        
        for($i = 0; $i< count($resultado); $i++)
        {
        echo $resultado[$i]['url'];
        echo $resultado[$i]['like_count'];
        }
        
    }
    
    
}

?>
