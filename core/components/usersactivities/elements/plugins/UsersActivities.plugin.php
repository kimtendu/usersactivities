<?php
switch ($modx->event->name) {
	case 'OnUserSave':
		// get date of new users
		if ($user && $mode == 'new') {
    		if ($profile = $user->getOne('Profile')) {
        		$id = $profile->get('id');
        		//$modx->log(1, "id",  $id);
        		$item = $modx->newObject('UsersActivities');
        		$item->set('id',$id);
        		$item->set('regdate',date('Y-m-d H:i:s'));
        		$item->save();
        		$profile->save();
    		}
		}
		break;
	case 'OnLoadWebDocument':
		//if user auth the get date 
		if ($modx->user->isAuthenticated($modx->context->key)) {
			$id = $modx->user->id;
			$item = $modx->getObject('UsersActivities',$id);
			$item->set('lastactivedate',date('Y-m-d H:i:s'));
            $item->save();
		}		break;
}