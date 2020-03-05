<?php
    if ($isi){
        $this->load->view($isi);
    }else{
        $this->load->view('error404');
    }
?>