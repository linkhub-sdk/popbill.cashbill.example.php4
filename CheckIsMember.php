<?php

include 'common.php';


echo '팝빌 연동회원 가입여부 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $CashbillService->CheckIsMember('1231212312',$LinkID);

var_dump($result);

echo chr(10);

?>
