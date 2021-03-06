<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'phpSettings'   => array(
        'display_startup_errors'        => true,
        'display_errors'                => true,
        'max_execution_time'            => 60,
        'date.timezone'                 => 'Pacific/Auckland',
        'mbstring.internal_encoding'    => 'UTF-8',
        'error_reporting'               => 'E_ALL|E_STRICT',
        'sendmail_from'                 => 'no-reply@bs.local'
    ),
    'site_settings' => array(
        'site_name' => 'Onyx Test Build',
        'site_url'  => 'http://onyxtestbuild.elasticbeanstalk.com/'
    ),
);