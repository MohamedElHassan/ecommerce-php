<?php

function lang($phrase)
{

  static $lang = array(
    // Navbar Links
    'HOME_ADMIN'                => 'Home',
    'CATEGORIES'                => 'Sections',
    'ITEMS'                     => 'Items',
    'MEMBERS'                   => 'Members',
    'COMMENTS'                  => 'Comments',
    'VISIT_SHOP'                => 'Visit Shop',
    'EDIT_PROFILE'              => 'Edit Profile',
    'SETTINGS'                  => 'Settings',
    'LOGOUT'                    => 'Logout',
    'DEFAULT_PAGE_TITLE'        => 'E-Commerce default page title',
    // Members Page
    'USERNAME'                  => 'Username',
    'EMAIL'                     => 'Email',
    'PASSWORD'                  => 'Password',
    'FULLNAME'                  => 'Full Name',
    'SUBMIT_BTN'                => 'Submit'

  );
  return $lang[$phrase];
}
