<?php

include 'common.php';


echo '알림팩스 전송 테스트'.chr(10).'처리결과 : ' ;

$result = $CashbillService->SendFAX('1231212312','123123','07075106766','07012341234');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>