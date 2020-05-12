<?php


class I18n
{
    /**
     * @var string
     */
    protected string $currentLang;

    /**
     * @var array
     */
    protected array $lang;

    /**
     * I18n constructor.
     */
    public function __construct()
    {
        if (!empty($_GET["lang"])) {
            switch (strtolower($_GET["lang"])) {
                case "en":
                    $_SESSION["lang"] = 'en';
                    break;
                case "de":
                    $_SESSION["lang"] = 'de';
                    break;
                default:
                    $_SESSION["lang"] = 'fr';
                    break;
            }
        }

        if (empty($_SESSION["lang"])) {
            $_SESSION["lang"] = 'fr';
        }

        $this->currentLang = $_SESSION["lang"];

        var_dump($this->currentLang);

        switch ($this->currentLang) {
            case 'en':
                $this->lang = include 'assets/lang/en_EN.php';
                break;
            case 'de':
                $this->lang = include 'assets/lang/de_DE.php';
                break;
            default:
                $this->lang = include 'assets/lang/fr_FR.php';
                break;
        }
    }

    public function get(
        string $key,
        string $value
    ): string
    {
        return $this->lang[$key][$value];
    }

    /**
     * @return string
     */
    public function getCurrentLang(): string
    {
        return $this->currentLang;
    }

}