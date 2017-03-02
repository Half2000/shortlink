<?php

Class Router {

    function delegate() {

        $route = (empty($_GET['link'])) ? '' : $_GET['link'];


        switch ($route) {
            case "":
                $this->initPage();
                break;
            case "add_link":
                $this->add($_POST['link']);
                break;
            default:
                $this->goLink($route);
        }
    }
    
    private function initPage() {
        $Sql = new Sql();
        $links = $Sql->getAllLinks();
        include(VIEW_DIR . 'default.php');
        $allLinks = include_once(VIEW_DIR . 'allLinks.php');
    }

    private function add($link) {
        $Sql = new Sql();
        $result = $Sql->checkLink($link);
        if ($result[0]['cnt'] == 0) {
             do {
                $short = $this->random_string();
            } while ($Sql->checkDuplicate($short)[0]['cnt'] != 0);
            $Sql->addLink($link, $short);
        }
        $links = $Sql->getAllLinks();
        $allLinks = include_once(VIEW_DIR . 'allLinks.php');
        echo $allLinks;
    }

    private function goLink($short) {
        $Sql = new Sql();
        $click = $Sql->getClick($short)[0]['click'] + 1;
        $Sql->addClick($short, $click);
        $result = $Sql->getFulllink($short);
        $link = $result[0]['original'];
        header ("Location: $link");
    }

    private function random_string() {
        $length = 6;
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $chars_length = strlen($chars) - 1;
        
        $string = $chars{rand(0, $chars_length)};
        for ($i = 1; $i < $length; $i = strlen($string)) {
            $random = $chars{rand(0, $chars_length)};
            if ($random != $string{$i - 1})
                $string .= $random;
        }
        return $string;
    }

}
