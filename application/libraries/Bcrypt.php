<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bcrypt {
    private $rounds;

    public function __construct($params = array()) {
        $this->rounds = isset($params['rounds']) ? $params['rounds'] : 10;
        $this->CI =& get_instance();
    }

    public function hash($password) {
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => $this->rounds]);
        return $hash;
    }

    public function verify($password, $hashedPassword) {
        return password_verify($password, $hashedPassword);
    }
}
?>
