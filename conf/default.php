<?php
/**
 * Options for the discussion plugin
 */

$conf['allowguests']     = 1;   // should unregistred users be able to comment?
$conf['linkemail']       = 0;   // link usernames with e-mail addresses
$conf['usegravatar']     = 1;   // use gravatars in comments
$conf['gravatar_size']   = 40;  // default size of gravatar: 20, 40 or 80 pixel
$conf['gravatar_rating'] = 'R'; // max rating of gravatar images: G, PG, R or X - see http://gravatar.com/rating.php
$conf['urlfield']        = 0;   // allow entering an URL
$conf['addressfield']    = 0;   // allow entering an address
$conf['datefield']       = 0;   // allow admins to set the date (for import)
$conf['usecocomment']    = 1;   // use coComment comment tracking
$conf['wikisyntaxok']    = 1;   // allow wiki syntax in comments

$conf['threads_showdate'] = 1;  // show date of last answer in thread list
$conf['threads_showuser'] = 1;  // show name of user who started the thread

//Setup VIM: ex: et ts=2 enc=utf-8 :