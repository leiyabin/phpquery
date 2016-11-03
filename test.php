<?php
include 'phpQuery/phpQuery.php';
$pq = phpQuery::newDocumentFile('http://bj.lianjia.com/');

$n1 = $pq->find('div.deal-price')->find('label.dataAuto')->text();
echo  trim($n1);
echo  '==========';
$n2 = $pq->find('div.listing-price')->find('label.dataAuto')->text();
echo  trim($n2);

echo  '==========';

$n3 = $pq->find('div.main')->find('li')->find('label')->text();
$n3 = trim($n3);
echo str_replace(PHP_EOL,',', $n3);