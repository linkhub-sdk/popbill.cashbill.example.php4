<?php

include 'common.php';

echo '관리번호 사용여부 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $CashbillService->CheckMgtKeyInUse('1231212312','123123');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {
	echo $result ? '사용중' : '미사용중';
}
echo chr(10);
?>
