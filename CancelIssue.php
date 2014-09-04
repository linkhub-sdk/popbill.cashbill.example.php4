<?php

include 'common.php';

echo '발행 취소 테스트'.chr(10).'처리결과 : ' ;


$result = $CashbillService->CancelIssue('1231212312','123123','발행 취소 메모');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>
