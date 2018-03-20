<?php

  class useStatic{

    public static $var = "callFromClass";
    public static $hiddenVar = "thisVarIsHidden";

    public static function callHiddenVar(){
      echo "Calling variable " .self::$hiddenVar. "";
    }
  }

?>
