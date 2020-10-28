<?php

/**
 * * php_user_filter class is an abstract decorator
 * @see https://www.php.net/manual/en/class.php-user-filter.php
 * @see https://www.php.net/manual/en/php-user-filter.filter.php
 * @see http://php.net/manual/en/function.stream-filter-register.php
 * @see http://etutorials.org/Server+Administration/upgrading+php+5/Chapter+8.+Streams+Wrappers+and+Filters/8.6+Creating+Filters/
 */
class LowerCaseInputStream extends php_user_filter
{

    function filter($in, $out, &$consumed, $closing)
    {

        /**
         * * Your primary goal inside filter( ) is to take data from the input bucket, convert it, and then add it to the output bucket. However, you can't just operate on the bucket resources directly; instead, you need to call a few helper functions to convert the data from a resource to an object that is modifiable in PHP. 
         * 
         * * The stream_bucket_make_writable( ) function retrieves a portion of the data from the input bucket and converts it to a PHP bucket object. This object has two properties: data and datalen. The data property is a string holding the bucket's data, whereas datalen is its length.
         * ...
         * 
         * @see http://etutorials.org/Server+Administration/upgrading+php+5/Chapter+8.+Streams+Wrappers+and+Filters/8.6+Creating+Filters/
         * ...
         * * This entire process takes place inside a while loop because the stream passes data to you in chunks instead of sending the entire dataset at once.
         */
        while ($bucket = stream_bucket_make_writeable($in)) {
            $bucket->data = strtolower($bucket->data);
            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON; //Filter processed successfully with data available in the out bucket brigade.  @see https://www.php.net/manual/en/php-user-filter.filter.php
    }
}
