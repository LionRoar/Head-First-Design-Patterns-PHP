<?php

/**
 * @see http://php.net/manual/en/function.stream-filter-register.php
 */
class LowerCaseInputStream extends php_user_filter {

    function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
        $bucket->data = strtolower($bucket->data);
        $consumed += $bucket->datalen;
        stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;//Return Code indicating that the userspace filter returned buckets in $out.
    }
}