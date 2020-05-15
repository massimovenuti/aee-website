<?php


class I18n
{
    /**
     * Current language used on the site.
     * Must be "en", "fr" or "de".
     *
     * @var string
     */
    protected string $currentLang = "";

    /**
     * Array containing all the strings of the site translated into $currentLang.
     *
     * @var array
     */
    protected array $lang = array();


    /**
     * Get the user language.
     * Fills the $lang array with the corresponding strings.
     */
    public function getUserLang()
    {
        if (!empty($_GET['lang']))
            $_SESSION['lang'] = strtolower($_GET['lang']);

        if (empty($_SESSION['lang'])) {
            $_SESSION['lang'] = 'fr';
        }

        $this->currentLang = $_SESSION["lang"];

        switch ($this->currentLang) {
            case 'en':
                $this->lang = include dirname(__FILE__) . '/../lang/en_EN.php';
                break;
            case 'de':
                $this->lang = include dirname(__FILE__) . '/../lang/de_DE.php';
                break;
            default:
                $this->lang = include dirname(__FILE__) . '/../lang/fr_FR.php';
                break;
        }
    }


    /**
     * Returns the string that corresponds to the key-value pair entered from the table $lang.
     * The keys and values available can be checked in the files in the "lang" directory.
     *
     * @param string $key
     * @param string $value
     * @return string String corresponding to the key-value pair.
     */
    public function get(
        string $key,
        string $value
    ): string
    {
        return $this->lang[$key][$value];
    }

    /**
     * Getter for var currentLang.
     *
     * @return string currentLang
     */
    public function getCurrentLang(): string
    {
        return $this->currentLang;
    }

}