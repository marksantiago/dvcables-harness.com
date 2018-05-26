<?php
/**
 * Environment Configuration File
 *
 * `IS_PRODUCTION_ENV` 
 *     - Set to `true` if working with minified CSS and JS.
 *     - Set to `false` if working with non-minified CSS and JS.
 *
 * @since 1.0.0
 *
 */
define('IS_PRODUCTION_ENV', false);



/**
 * Set the Base URL
 *
 *
 *  # Set `IS_PRODUCTION_ENV` to equal `IS_REMOTE_BASE_URL` if production-ready,
 *     where `IS_REMOTE_BASE_URL` is set to match your production server hostname and path.
 *
 *  ## Set `IS_PRODUCTION_ENV` to equal `IS_LOCAL_BASE_URL` if working with
 *     minified CSS/JS, and serving locally,
 *     where `IS_LOCAL_BASE_URL` is set to match your local development server hostname and path.
 */
define('IS_REMOTE_BASE_URL', 'http://dvcables-harness.com/');
define('IS_LOCAL_BASE_URL', 'http://localhost/dvcables-harness.com/src/');

if(IS_PRODUCTION_ENV)
  define('BASE_URL', IS_REMOTE_BASE_URL);
else
  define('BASE_URL', IS_LOCAL_BASE_URL);
