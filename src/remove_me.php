<?php

declare(strict_types=1);

// This file is here to test your debugger, cs-fixer, psalm and any other tool you want

// By default there is no declare strict type header so running cs-fixer it would be added

// The next block is here to test psalm
$array = json_decode('{}', true);
$result = $array['field'] + 7;

return $result;
