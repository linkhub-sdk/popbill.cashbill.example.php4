<?php

include 'common.php';

echo '현금영수증 요약정보 및 상태정보 확인 테스트'.chr(10).'처리결과 : ' ;


$result = $CashbillService->GetInfo('1231212312','123123');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	var_dump($result);
	
}
echo chr(10);
?>