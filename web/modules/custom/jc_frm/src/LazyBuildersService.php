<?php
namespace Drupal\jc_frm;


class LazyBuildersService{

	public function page($userName){
		return [
			'#markup' => 'Your name is ' . $userName,
		];
	}
}
