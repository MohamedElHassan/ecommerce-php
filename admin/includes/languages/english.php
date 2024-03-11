<?php

function lang($phrase){
  
  static $lang = array(
    // Navbar Links
    'HOME_ADMIN'                =>'Home',
    'CATEGORIES'                =>'Sections',
    'ITEMS'                     =>'Items',
    'MEMBERS'                   =>'Members',
    'COMMENTS'                  =>'Comments',
    'VISIT_SHOP'                => 'Visit Shop',
    'EDIT_PROFILE'              => 'Edit Profile',
    'SETTINGS'                  => 'Settings',
    'LOGOUT'                    => 'Logout',
    'DEFAULT_PAGE_TITLE'        => 'Default',
  );
  return $lang[$phrase];
}