<?php
   class PublicAction extends Action{
	   public function code(){
              import('ORG.Util.Image');
              Image::buildImageVerify($length=5, $mode=1, $type='png', $width=60, $height=26, $verifyName='verify');
		   }
	   }
?>