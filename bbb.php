<?php

// 요청할 URL
$url = "http://apis.data.go.kr/B552584/ArpltnInforInqireSvc/getMinuDustFrcstDspth";

// GET 방식으로 전송할 파라미터. 여기서는 예시 값들을 사용합니다.
// 실제 요청에서는 이 값들을 적절한 값으로 교체해야 합니다.
$returnType = $_GET["returnType"]; // 응답 형식 (예: json, xml)
$searchDate = $_GET["searchDate"]; // 검색할 날짜 2024-03-27
$informCode = $_GET["informCode"]; // 정보 코드 (예: PM10, PM2.5 등)
$serviceKey = "자신의 Decoding Key를 넣으세요";

// 파라미터를 URL에 쿼리 스트링으로 추가
$fullUrl = sprintf("%s?returnType=%s&searchDate=%s&informCode=%s&serviceKey=%s", 
                   $url, $returnType, $searchDate, $informCode, $serviceKey);

// cURL 세션 초기화
$curl = curl_init();

// cURL 옵션 설정
curl_setopt($curl, CURLOPT_URL, $fullUrl); // 요청할 URL 설정
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 결과를 문자열로 반환받음
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증서 검증 안 함

// HTTP 요청 실행 및 응답 받기
$response = curl_exec($curl);

// cURL 세션 종료
curl_close($curl);

// 응답 출력
echo $response;

?>

아래 내용은 getMinuDustWeekFrcstDspth.php 파일 내용입니다

<?php

// 요청할 URL
$url = "http://apis.data.go.kr/B552584/ArpltnInforInqireSvc/getMinuDustWeekFrcstDspth";

// GET 방식으로 전송할 파라미터. 여기서는 예시 값들을 사용합니다.
// 실제 요청에서는 이 값들을 적절한 값으로 교체해야 합니다.
$returnType = $_GET["returnType"]; // 응답 형식 (예: json, xml)
$searchDate = $_GET["searchDate"]; // 검색할 날짜 2024-03-27
$serviceKey = "자신의 Decoding Key를 넣으세요";

// 파라미터를 URL에 쿼리 스트링으로 추가
$fullUrl = sprintf("%s?returnType=%s&searchDate=%s&numOfRows=200&pageNo=1&serviceKey=%s", 
                   $url, $returnType, $searchDate, $serviceKey);

// cURL 세션 초기화
$curl = curl_init();

// cURL 옵션 설정
curl_setopt($curl, CURLOPT_URL, $fullUrl); // 요청할 URL 설정
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 결과를 문자열로 반환받음
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증서 검증 안 함

// HTTP 요청 실행 및 응답 받기
$response = curl_exec($curl);

// cURL 세션 종료
curl_close($curl);

// 응답 출력
echo $response;

?>

아래 내용은 getCtprvnRltmMesureDnsty.php 파일 내용입니다

<?php

// 요청할 URL
$url = "http://apis.data.go.kr/B552584/ArpltnInforInqireSvc/getCtprvnRltmMesureDnsty";

// GET 방식으로 전송할 파라미터. 여기서는 예시 값들을 사용합니다.
// 실제 요청에서는 이 값들을 적절한 값으로 교체해야 합니다.
$returnType = $_GET["returnType"]; // 응답 형식 (예: json, xml)
$sidoName = urlencode($_GET["sidoName"]); // 시도명 예: 서울	
$ver = "1.0"; // 버전 1.0으로 고정
$serviceKey = "자신의 Decoding Key를 넣으세요 ";

// 파라미터를 URL에 쿼리 스트링으로 추가
$fullUrl = sprintf("%s?serviceKey=%s&returnType=%s&sidoName=%s&numOfRows=200&pageNo=1&ver=%s", 
                   $url, $serviceKey, $returnType, $sidoName, $ver);

// cURL 세션 초기화
$curl = curl_init();

// cURL 옵션 설정
curl_setopt($curl, CURLOPT_URL, $fullUrl); // 요청할 URL 설정
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 결과를 문자열로 반환받음
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증서 검증 안 함

// HTTP 요청 실행 및 응답 받기
$response = curl_exec($curl);

// cURL 세션 종료
curl_close($curl);

// 응답 출력
echo $response;

?>
