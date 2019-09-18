<?php
$opts = getopt('p:d:');

if(empty($opts['p'])) {
    echo 'be lack of path';die;
}

$path = $opts['p'];
$destination = $opts['d'] ?? '';

$directories = new DirectoryIterator($path);

foreach ($directories as $directory) {
    if($directory->isDot()) {
        continue;
    }

    $currentPath = $directory->getPathname();
    if(!empty($destination)){
	$fileName = $directory->getFilename();
	if($fileName == $destination) {
	    deploy($currentPath);
	}
    }else {
	deploy($currentPath);
    }
}

function deploy($path)
{
    if(file_exists($path . '/build.sh')) {
        system("cd $path && sh build.sh");
        $odpPath = dirname(dirname($path));
        system("cp -r {$path}/output/* {$odpPath}");
	system("rm -rf {$path}/output");
    }
}
