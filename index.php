<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_COOKIESESSION, TRUE);// обнуляем куки
curl_setopt($ch, CURLOPT_URL, 'https://www.ingress.com/intel/');
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
curl_setopt($ch, CURLOPT_COOKIE, 'APISID=9qCYd0ZFVJ3mIBJQ/AHV4Y01glwPJRLe7n');
/*curl_setopt($ch, CURLOPT_COOKIE, 'HSID=ABh8sXi6cAVmstqUp/AHV4Y01glwPJRLe7n');
curl_setopt($ch, CURLOPT_COOKIE, 'PREF=f1=50000000/AHV4Y01glwPJRLe7n');
curl_setopt($ch, CURLOPT_COOKIE, 'SACSID=~AJKiYcHoQatoextqSaokIGMk1uSI7Xopqe6pHt4nuNT_LpUIHrP5u4BixOHqRYvG_xVQTIwuhO7WOVgvY8IY6oMRwmwtVntEdKFnzTVILlRodVDsHXzwToloYzP6gl0XguW2VVSsPNBYc14S42WjBQK5IXYv4X4Oc4oPOciX6NpBmIMWGh9Wcsi64LM3Aoy2Q--L3wCzDHvPpA1cinGvxUSxofYjpyJ8ivDPHcooWVSoEz8XW7yoiQCzksrFUcljYNvS8NOOZvelto1A0y1DiRv4rkUMPj-Ypq8VJ2wJ5FqWXHBWBTreT-E');
curl_setopt($ch, CURLOPT_COOKIE, 'SAPISID=xaCyZyQ-ZVzhv4H_/Aiu6R0K-0e3GXDjLf');
curl_setopt($ch, CURLOPT_COOKIE, 'SID=RwVFCBvqun0YPfDeMZhcbuGu7_JZyusLjTueW40vTaUSheZ1cDcqhAcgJqeXStaIWScspA.');
curl_setopt($ch, CURLOPT_COOKIE, 'VISITOR_INFO1_LIVE=F2Lk-y-gp4g');
curl_setopt($ch, CURLOPT_COOKIE, 'YSC=O3z4q92OIl8');
curl_setopt($ch, CURLOPT_COOKIE, 'csrftoken=qRVED8a5m44Aoa3PFtrovoQyqwelsvxn');*/
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, null);

$result = curl_exec($ch);

echo $result;

curl_close($ch);
@unlink($cookies);
?>