<?php
    $mhs = array (
        array("peter","1234","bali"),
        array("budi","5678","surabaya"),
        array("patih","4578","makasar"),
        array("kasi","0987","bengkulu"),

    );
    header('conten-type: application/json; charset=utf-8');
    echo json_encode($mhs);