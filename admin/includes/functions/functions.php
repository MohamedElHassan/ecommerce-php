<?php

/*
** Title Functions that echo the page title in case the page
** has the Variable $pageTitle and Echo Default Title for Other Pages
*/
function getTitle()
{
  global $pageTitle;
  if (isset($pageTitle)) {
    echo $pageTitle;
  } else {
    echo lang('DEFAULT_PAGE_TITLE');
  }
}
