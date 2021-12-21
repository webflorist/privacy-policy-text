<?php

class FileGenerator
{

    const FORMAT =          ['json', 'php'];
    const INTERPOLATION =   ['curly-wrap', 'double-curly-wrap', 'colon-prefix'];
    const NUMERUS =         ['singular', 'plural'];

    private string $langDir;
    private string $distDir;

    public function __construct()
    {
        $currentDir = dirname(__FILE__);
        $this->langDir = $currentDir . '/lang';
        $this->distDir = $currentDir . '/dist';
    }

    public function generate()
    {

        mkdir($this->distDir);

        $localeFiles = array_diff(scandir($this->langDir), array('..', '.'));

        foreach ($localeFiles as $localeFile) {
            $locale = str_replace('.php', '', $localeFile);
            $srcFile = $this->langDir . '/' . $localeFile;

            foreach (self::FORMAT as $format) {
                foreach (self::INTERPOLATION as $interpolation) {
                    foreach (self::NUMERUS as $numerus) {
                        $this->renderFile($locale, $srcFile, $format, $interpolation, $numerus);
                    }
                }
            }
        }
    }


    private function renderFile(string $locale, string $srcFile, string $format, string $interpolation, string $numerus)
    {

        $outputFolder = $this->distDir . "/$format/$interpolation/$locale";
        $outputFilename = "$numerus.$format";
        $outputFile = "$outputFolder/$outputFilename";
        mkdir($outputFolder, 0777, true);

        $i = $this->createInterpolateFunction($interpolation);
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

    function createInterpolateFunction(string $interpolation): Closure
    {
        return function ($value) use ($interpolation) {
            if ($interpolation === 'curly-wrap')
                return "{$value}";

            if ($interpolation === 'double-curly-wrap')
                return "{{$value}}";

            if ($interpolation === 'colon-prefix')
                return ":$value";
        };
    }
}

(new FileGenerator())->generate();
