# İnstallation
Download bCurl.php and require working file.

# Get Request
$curl = new bCurl();
$curl->get($url); 

# Post Request
$curl = new bCurl();
$data = array(
"username" => "bora",
"password" => "123"
);
$curl->post("http://borabozdogan.net.tr",$data);

# Curl Timeout
$curl->timeout(10);

# Curl Referer
$curl->referer("https://github.com");

# Curl Useragent
$curl->useragent("Google Bot");

# Curl Ssl Verify Peer
$curl->ssl_verify_peer(false);

# Curl Ssl Verify Host
$curl->ssl_verify_host(false);

# Curl Follow Location
$curl->follow_location(false);

# Curl Return Transfer
$curl->return_transfer(false);

# Curl Header (False or Data)
$curl->header(false);

# Contact
E-Mail : borayazilim45@mit.tc
WebSite : http://borabozdogan.net.tr


