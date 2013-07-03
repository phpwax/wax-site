<?
//$engine = "BackgroundFile";
//$life = (60*60*24*365*10); //10 years - will be using expiry queue

Config::$config_array = array(
  /*
  "cms-responsive"=>array(
      "desktop"=> array("w"=>"100%", "h"=>"500px", 'img'=>'/images/wildfire/icons/responsive/desktop.png'),
      "phone_portrait"=> array('w'=>'300px', 'h'=>'352px', 'img'=>'/images/wildfire/icons/responsive/phone-portrait.png'),
      "phone_landscape"=> array('w'=>'468px', 'h'=>'202px', 'img'=>'/images/wildfire/icons/responsive/phone-landscape.png'),
      "tablet_portrait"=> array('w'=>'750px', 'h'=>'920px', 'img'=>'/images/wildfire/icons/responsive/tablet-portrait.png'),
      "tablet_landscape"=> array('w'=>'1010px', 'h'=>'660px', 'img'=>'/images/wildfire/icons/responsive/tablet-landscape.png')
    ),
  */
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
  //  "lifetime"=>$life,
  //  "engine"=> $engine,
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