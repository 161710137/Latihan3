<?php
require_once 'jurusan.php';

$namanya = new jurusan('TKR','TSM','RPL');
echo "jurusan...".$namanya->get_tk().'<br>';
echo "jurusann...".$namanya->get_tm().'<br>';
echo "jurusannya...".$namanya->get_rp().'<br>';
?>