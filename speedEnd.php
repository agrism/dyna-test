<?php
echo '<pre>';
print_r(array(
    'memory' => (memory_get_usage() - $mem) / (1024 * 1024),
    'seconds' => number_format((microtime(TRUE) - $time), 10)
));
