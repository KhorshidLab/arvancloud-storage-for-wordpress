<?php
namespace WP_Arvan\OBS;
/**
 * The file that loads the AWS S3 client for storage
 *
 *
 * @link       khorshidlab.com
 * @since      1.0.0
 *
 * @package    Wp_Arvancloud_Storage
 * @subpackage Wp_Arvancloud_Storage/includes
 */

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
use Aws\S3\MultipartUploader;
use Aws\Exception\MultipartUploadException;
use WP_Arvan\OBS\Helper;

$credentials = Helper::get_storage_settings();

if( $credentials ) {
    
    // require the sdk from your composer vendor dir
    require ACS_PLUGIN_ROOT . '/vendor/autoload.php';

    // Instantiate the S3 class and point it at the desired host
    $client = new S3Client([
        'region'   => '',
        'version'  => '2006-03-01',
        'endpoint' => $credentials['endpoint-url'],
        'use_aws_shared_config_files' => false,
        'credentials' => [
            'key'     => $credentials['access-key'],
            'secret'  => $credentials['secret-key']
        ],
        // Set the S3 class to use objects. arvanstorage.com/bucket
        // instead of bucket.objects. arvanstorage.com
        'use_path_style_endpoint' => true
    ]);
}