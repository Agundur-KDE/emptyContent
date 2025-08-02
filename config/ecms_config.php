<?php
// kate: space-indent on; tab-width 4; indent-width 4; mixed-indent off; replace-tabs on; indent-mode cstyle;

/** \defgroup domain
 */

ECMS_CONFIG::$proto         = 'https';
ECMS_CONFIG::$subdomain     = 'wwww';
ECMS_CONFIG::$domain        = 'domain.tld';


/** \defgroup css
 */

ECMS_CONFIG::$default_css = 'main.css';


/** local|ftp|ssh **/
ECMS_CONFIG::$publish_methode ='ftp';


/** sftp config**/

ECMS_CONFIG::$ftp_path_to_publish_  = '/';
ECMS_CONFIG::$ftp_host             = '';
ECMS_CONFIG::$ftp_user             = '';
ECMS_CONFIG::$ftp_passwd           = '';


ECMS_CONFIG::$url                  = '';
ECMS_CONFIG::$htaccess_user        = '';
ECMS_CONFIG::$htaccess_passwd      = '';

ECMS_CONFIG::$ftp_force_ssl_off    = false;
ECMS_CONFIG::$ftp_force_active     = true;


/** \defgroup template **/

ECMS_CONFIG::$minify_html_output   = true;
ECMS_CONFIG::$sass_create_map      = false;