<?php

function b_ephemerids_show()
{
    global $xoopsDB;

    $block = [];

    $myts = MyTextSanitizer::getInstance();

    // get current date

    $today = getdate();

    $day = $today['mday'];

    $mon = $today['mon'];

    $year = $today['year'];

    $formatted_date = $today['month'] . ' ' . $today['mday'];

    $sql = 'SELECT yid,content FROM ' . $xoopsDB->prefix('ephemerids') . " WHERE did = $day AND ";

    $sql .= " mid = $mon ORDER BY yid, mid, did limit 0,6";

    $result = $xoopsDB->query($sql);

    $bdata = [];

    while ($myrow = $xoopsDB->fetchArray($result)) {
        $data = [];

        $title = $myts->displayTarea($myrow['content']);

        $data['year'] = $myrow['yid'];

        $data['content'] = $title;

        $bdata[] = $data;
    }

    $block['data'] = $bdata;

    $block['date'] = $formatted_date;

    return $block;
}




