<?
  if (getenv('COMSPEC') == ''){
    // unix/linux
    //$colorer_path = "/usr/bin/colorer"
    $colorer_path = "/home/project-web/colorer/cgi-bin/colorer -c /home/project-web/colorer/files/catalog.xml";
  }else{
    //win32
    $colorer_path = "d:/projects/colorer/bin/colorer.exe";
  };

  function check($val){
    $val = str_replace('..', '', $val);
    $val = str_replace('|', '', $val);
    $val = str_replace('&', '', $val);
    $val = str_replace('>', '', $val);
    $val = str_replace('<', '', $val);
    if (!preg_match("/^\/tmp/", $val) && preg_match("/\//", $val)){
      $val = "no!";
    }
#    $val = str_replace(':', '', $val);
#    $val = str_replace('\\', '', $val);
#    $val = str_replace('/', '', $val);
    return $val;
  }

?>