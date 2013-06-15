<?php 

class Config{
	
	public static function getGithubConfig(){
		return(array());
	}
	
	public static function getImageConfig(){

		$white = array(255, 255, 255);
		$black = array(0, 0, 0);
		
		return(array(
			
			/* Gravatar settings */
			'gravatar_url' => 'http://www.gravatar.com/avatar/{id}?s={size}',
			'gravatar_size' => 80,
				
			/* Signature font settings */
			'fontfile' => './assets/opensans.ttf',
			
			/* Image dimensions */
			'img_width' => 200,
			'img_heigth' => 85,
				
			/* Colors */
			'col' => array(
				'background' => $white,
			),
				
			/* Elements */
			'elements' => array(
				'username' => array(
					'fontsize' => 18,
					'offsetX' => 3,
					'offsetY' => 5,
				),
				'repos' => array(
					'fontsize' => 10,
					'offsetX' => 3,
					'offsetY' => 8,
				),
				'stars' => array(
					'img_file' => './assets/star.png',
					'text_offsetX' => 15,
					'img_offsetX' => 2,
					'img_offsetY' => 2,
				),
			),
		));
	}

}