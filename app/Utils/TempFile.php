<?php

namespace App\Utils;

class TempFile
{
    public static string $tempPath;

    public static string $tempFileName;

    /**
     * @param string $dir
     * @return TempFile
     */
    public static function setCacheDir(string $dir)
    {
        $instance = new self;

        $instance::$tempPath = $dir;

        return $instance;
    }

    /**
     * Write content to a temp file
     *
     * @param $content
     * @param $extension
     * @param null $fileName
     * @return false|int
     */
    public function write($content, $extension, $fileName = null)
    {
        $tempFileName = sprintf('%s.%s', $fileName ?? time(), $extension);
        $tempFile = fopen(self::$tempPath . DIRECTORY_SEPARATOR . $tempFileName, 'w+');
        $isWritten = fwrite($tempFile, $content);
        fclose($tempFile);

        self::$tempFileName = $tempFileName;

        return $isWritten;
    }

    /**
     * @return string
     */
    public function getTempFileName()
    {
        return self::$tempFileName;
    }

    /**
     * Remove temp file
     *
     * @return bool
     */
    public function removeTempFile()
    {
        return unlink(self::$tempPath . DIRECTORY_SEPARATOR . self::$tempFileName);
    }

    /**
     * @return string
     */
    public function getFullPath()
    {
        return self::$tempPath . DIRECTORY_SEPARATOR . self::$tempFileName;
    }
}