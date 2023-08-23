<?php

$where_am_i = "México";

$change_where_am_i = fn(&$where_am_i) => $where_am_i = "Colombia";
$change_where_am_i($where_am_i);

echo $where_am_i;
