<?php

include 'common.php';

echo '삭제 테스트'.chr(10).'처리결과 : ' ;

$result = $CashbillService->Delete('1231212312','123123');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>
