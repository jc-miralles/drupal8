<?php
namespace Drupal\jc_frm;


class LazyBuilderService{

	public function page($userName){
		return [
			'#markup' = 'Your name is ' . $userName,
		];
	}
}
