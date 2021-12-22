<?php

class FileGenerator
{

    const FORMAT =          ['json', 'php'];
    const INTERPOLATION =   ['curly-wrap', 'double-curly-wrap', 'colon-prefix'];
    const NUMERUS =         ['singular', 'plural'];

    private string $currentDir;
    private string $langDir;
    private string $distDir;

    public function __construct()
    {
        $this->currentDir = dirname(__FILE__);
        $this->langDir = $this->currentDir . '/lang';
        $this->distDir = $this->currentDir . '/../dist';
    }

    public function generate()
    {

        self::rrmdir($this->distDir . '/json');
        self::rrmdir($this->distDir . '/php');
        mkdir($this->distDir);

        $localeFiles = array_diff(scandir($this->langDir), array('..', '.'));

        foreach ($localeFiles as $localeFile) {
            $locale = str_replace('.php', '', $localeFile);
            $srcFile = $this->langDir . '/' . $localeFile;

            foreach (self::FORMAT as $format) {
                foreach (self::INTERPOLATION as $interpolation) {
                    foreach (self::NUMERUS as $numerus) {
                        $outputFolder = $this->distDir . "/$format/$interpolation/$numerus";
                        mkdir($outputFolder, 0777, true);
                        $outputFilename = "$locale.$format";
                        $outputFile = "$outputFolder/$outputFilename";
                        $this->renderFile($srcFile, $outputFile, $format, $interpolation, $numerus);
                    }
                }
            }
        }

        $this->renderFile(
            $this->currentDir . '/providers.php',
            $this->distDir . '/json/providers.json',
            'json'
        );

        $this->renderFile(
            $this->currentDir . '/providers.php',
            $this->distDir . '/php/providers.php',
            'php'
        );
    }


    private function renderFile(string $srcFile, string $outputFile, string $format, string $interpolation = 'curly-wrap', string $numerus = 'plural')
    {
        $i = self::createInterpolateFunction($interpolation);
        $s = $numerus === 'singular';
        $translationData = require $srcFile;

        if ($format === 'php') {
            $phpCode = var_export($translationData, true);
            file_put_contents($outputFile, "<?php\n\nreturn\n$phpCode;\n");
        }

        if ($format === 'json') {
            $jsonCode = json_encode($translationData, JSON_PRETTY_PRINT);
            file_put_contents($outputFile, $jsonCode);
        }
    }

    private static function createInterpolateFunction(string $interpolation): Closure
    {
        return function ($value) use ($interpolation) {
            if ($interpolation === 'curly-wrap')
                return '{' . $value . '}';

            if ($interpolation === 'double-curly-wrap')
                return '{{' . $value . '}}';

            if ($interpolation === 'colon-prefix')
                return ':' . $value;
        };
    }

    private static function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . "/" . $object))
                        self::rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                    else
                        unlink($dir . DIRECTORY_SEPARATOR . $object);
                }
            }
            rmdir($dir);
        }
    }
}

(new FileGenerator())->generate();
