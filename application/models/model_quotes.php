<?php

	class Model_quotes extends CI_Model {

    function getQuotes() {
      return $this->db->query("SELECT * FROM quotes");
    }

  }


?>
