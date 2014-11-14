<?php
require_once('simpletest/autorun.php');


class AllTests extends TestSuite {

    function AllTests() {
        $this->TestSuite('All tests');

        $dir    = getcwd();
        $files = scandir($dir);

        foreach($files as $file)
        {
            if(is_file($file) && $file != "index.php" && $file != "HelperFunctions.php")
            {
                $this->addFile($file);
            }
        }
    }
}
?>