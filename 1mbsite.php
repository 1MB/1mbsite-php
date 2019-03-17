<?php
define("API_URL", "https://api.1mb.site");
function verifyKey($username, $key) {
  $postData = http_build_query(
    array(
      "action" => "keyverify",
      "username" => $username,
      "key" => $key
    )
  );
  $opts = array("http" =>
    array(
      "method" => "POST",
      "header" => "Content-Type: application/x-www-form-urlencoded",
      "content" => $postData
    )
  );
  $context  = stream_context_create($opts);
  $result = json_decode(file_get_contents(API_URL, false, $context), true);
  if ($result["error"] !== false) {
    return $result["error"];
  } else {
    return true;
  }
}
function deploy($site, $key, $resource, $code) {
  $postData = http_build_query(
    array(
      "action" => "deploy",
      "site" => $site,
      "key" => $key,
      "resource" => $resource,
      "code" => $code
    )
  );
  $opts = array("http" =>
    array(
      "method" => "POST",
      "header" => "Content-Type: application/x-www-form-urlencoded",
      "content" => $postData
    )
  );
  $context  = stream_context_create($opts);
  $result = json_decode(file_get_contents(API_URL, false, $context), true);
  if ($result["error"] !== false) {
    return $result["error"];
  } else {
    return true;
  }
}
function viewSite($site, $resource) {
  $postData = http_build_query(
    array(
      "action" => "view",
      "site" => $site,
      "resource" => $resource
    )
  );
  $opts = array("http" =>
    array(
      "method" => "POST",
      "header" => "Content-Type: application/x-www-form-urlencoded",
      "content" => $postData
    )
  );
  $context  = stream_context_create($opts);
  $result = json_decode(file_get_contents(API_URL, false, $context), true);
  if ($result["error"] !== false) {
    return $result["error"];
  } else {
    return $result["data"];
  }
}
?>
