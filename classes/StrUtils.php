<?php

class strUtils {
    private string $str;
    public $bold;
    public $italic;
    public $underline;
    public $capitalize;

    public function __construct ($str, $bold, $italic, $underline, $capitalize) {
        $this->setStr($str);
        $this->setBold($bold);
        $this->setItalic($italic);
        $this->setUnderline($underline);
        $this->setCapitalize($capitalize);
    }

    public function getStr(): string
    {
        return $this->str;
    }

    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    public function getBold()
    {
        return "<bold> $this->str </bold>";
    }

    public function setBold($bold): void
    {
        $this->bold = $bold;
    }

    public function getItalic()
    {
        return "<i> $this->str </i>";
    }

    public function setItalic($italic): void
    {
        $this->italic = $italic;
    }

    public function getUnderline()
    {
        return "<span style='text-decoration: underline'> $this->str </span>";
    }

    public function setUnderline($underline): void
    {
        $this->underline = $underline;
    }

    public function getCapitalize()
    {
        return "<span style='text-transform: capitalize'> $this->str </span>";
    }

    public function setCapitalize($capitalize): void
    {
        $this->capitalize = $capitalize;
    }

    public function uglify () {
        echo "<span style='text-decoration: underline; text-transform: capitalize'><bold><i> $this->str </i></bold></span>";
    }
}


