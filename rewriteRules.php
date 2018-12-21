<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/PkgServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
    'src/Models/Pkg.php' => 'src/Models/:uc:package.php',
    'src/Controllers/ApiController.php' => 'src/Controllers/:uc:packageApiController.php',
    'src/Controllers/WebController.php' => 'src/Controllers/:uc:packageWebController.php',
];