<?
Config::$config_array = array(
  "repo_branch"=>"master",
  "development"=>array(
    "db"=>array(
      "dbtype"=>"mysql",
      "host"=>"localhost",
      "database"=>"app_development",
      "username"=>"root"
    ),
  ),
  "test"=>array(
    "db"=>array(
      "dbtype"=>"mysql",
      "host"=>"localhost",
      "database"=>"app_test",
      "username"=>"root"
    ),
  ),
  "production"=>array(
    "db"=>array(
      "dbtype"=>"mysql",
      "host"=>"localhost",
      "database"=>"app_production",
      "username"=>"app_production",
      "password"=>"secret"
    ),
  )
  //,"analytics" => array(
  //  "email"=>"",
  //  "password"=> "",
  //  "id"=> "",
  //  "tracker_id"=>""
  //),
  //"use_expiry_date"=>1,
  //"twitter"=>array(
  //  "username"=>""
  //),
  //"map_keys"=>array(
  //  ""=> ""
  //),
  //"layout_cache"=>array(
  //  "lifetime"=>60*60*24, //1 day
  //  "engine"=>"BackgroundFile",
  //  "exclude_post"=>"yes",
  //  "exclusions"=>array(
  //    "admin"=> "/(admin)/i",
  //    "cms"=> "#(cms)/#i",      
  //    "thanks"=> "/.*(thanks).*/i",
  //    "nocache"=> "/no-wax-cache/i",
  //    "preview"=> "/preview=/i"
  //  ),
  //  "namespace"=>array(
  //    "#(.*)[/]?#i",
  //    "#(.*)/(.*)#i"
  //   ),     
  //   "disable_sessions" => 1
  //),
  //"image_cache"=>array(
  //  "lifetime"=>"forever",
  //  "engine"=>"Image",
  //  "exclude_post"=> "no",
  //)
);

?>