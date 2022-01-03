<?php
class Belajar extends CI_Controller {

        public function index()
        {
                echo 'Belajar Code Igniter 3';
        }

        public function comments()
        {
                echo 'Look at this!';
        }
		
		public function shoes($sandals, $id)
        {
				echo "sepatuku" {$sandals} ukuran : {$id}";
                
        }
}