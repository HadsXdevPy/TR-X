<?php
$Green = "\33[0;32m";
$GreenLight = "\33[32;1m";
$Blue = "\33[0;36m";
$BlueLight = "\33[36;1m";
$Red = "\33[31;1m";
$White = "\33[37;1m";
$black = "\33[30;1m";
$Yellow = "\33[33;1m";
$YellowLight = "\33[1;33m";
system('clear');
$data = @unserialize(file_get_contents("http://ip-api.com/php/".$ip));
echo "\33[31;1m
  _______   _______       ___ ___  
 |       | |   _   \     (   Y   ) 
 |.|   | | |.  l   /      \  1  /  
 `-|.  |-' |.  _   1      /  _  \  
   |:  |   |:  |   |     /:  |   \ 
   |::.|   |::.|:. |    (::. |:.  )
   `---'   `--- ---'     `--- ---' \n";
echo "\33[32;1mauthor      \33[1;33m: \33[37;1mHadsXdevPy\n";
echo "\33[32;1mversion     \33[1;33m: \33[37;1m1.9\n";
echo "\33[32;1mregion from \33[1;33m: \33[37;1mIndonesian\n";
echo "\33[32;1mTarget IP \33[1;33m:\33[37;1m ";
$ip = trim(fgets(STDIN));
if($data['status'] = 'success'){
	echo "\33[32;1mIP                 \33[1;33m: \33[37;1m".$data['query']."\n";
	echo "\33[32;1mCountry            \33[1;33m: \33[37;1m".$data['country']."\n";
	echo "\33[32;1mCountryCode        \33[1;33m: \33[37;1m".$data['countryCode']."\n";
	echo "\33[32;1mRegion             \33[1;33m: \33[37;1m".$data['region']."\n";
	echo "\33[32;1mRegionName         \33[1;33m: \33[37;1m".$data['regionName']."\n";
	echo "\33[32;1mCity               \33[1;33m: \33[37;1m".$data['city']."\n";
	echo "\33[32;1mZip                \33[1;33m: \33[37;1m".$data['zip']."\n";
	echo "\33[32;1mLat                \33[1;33m: \33[37;1m".$data['lat']."\n";
	echo "\33[32;1mLon                \33[1;33m: \33[37;1m".$data['lon']."\n";
	echo "\33[32;1mTimeZone           \33[1;33m: \33[37;1m".$data['timezone']."\n";
	echo "\33[32;1mIsp                \33[1;33m: \33[37;1m".$data['isp']."\n";
	echo "\33[32;1mOrg                \33[1;33m: \33[37;1m".$data['org']."\n";
	echo "\33[32;1mAs                 \33[1;33m: \33[37;1m".$data['as']."\n";
	echo "\33[32;1mLocation Cordinate \33[1;33m: \33[37;1m".$data['lat'];
echo ", ".$data['lon']."\n";
}
else{
	echo "\33[31;1mIP Wrong!!\n";
}
?>
