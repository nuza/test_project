<?php

class CommonBase {

    public static function createMassageDiv($type, $headding, $massage, $scroll = null, $id = "") {
        $rs = (is_numeric($scroll)) ? "<script type=\"text/javascript\" > gototop($scroll)</script>" : "";
        if ($type == 'suc') {
            $rs .= ' <div id="' . $id . '"  class="alert alert-success" >
                
                                      <h4>' . $headding . ' !</h4>
                                   ' . $massage . '
                                </div>';
        }
        if ($type == 'err') {
            $rs .= ' <div id="' . $id . '"  class="alert alert-error" >
                 
                                      <h4>' . $headding . ' !</h4>
                                   ' . $massage . '
                                </div>';
        }
        return $rs;
    }

    public static function getServer() {
        $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
        $protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
        $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":" . $_SERVER["SERVER_PORT"]);
        $host = $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . "/";
        return ($host == "http://localhost/") ? "http://localhost/winwin.lk/wwwroot/" : $host;
    }

    public static function is_page($page) {
        if ($page == basename($_SERVER['PHP_SELF'])) {
            return 'class="active"';
        } else {
            return '';
        }
    }

}

?>