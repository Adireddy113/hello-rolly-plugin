<?php
/*
Plugin Name: Hello Rolly
Description: This plugin keeps u motivated by displaying a random quote whenever the wordpress loads.
Version: 1.0
Author: Adireddy
Text Domain: hello-rolly
*/

defined('ABSPATH') or die ('U can not access this from browser');

class hr {
public $quotes = ["🌟 Do it with passion or not at all",
"🌱 Grow through what you go through",
"💡 Dream big. Start small",
"🔥 Stay hungry. Stay foolish",
"🧘 Peace begins with a smile"];

public function rand() {
$key = array_rand($this->quotes,1);
echo "<div style='text-align:center; font-size:20px; font-weight:bold;'>" .$this->quotes[$key]. "</div>";
}
}

function quo() {
$myq=new hr();
$myq->rand();
}

add_action('admin_head','quo');