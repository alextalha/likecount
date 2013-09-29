<?php

class LikeUrl {

    public function getLikes(array $urls) {
        
        
        $link = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . implode(',', $urls);

        $url = file_get_contents($link);

        return $url;
    }

}

?>