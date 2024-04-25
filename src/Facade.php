<?php

/*
 * This file is part of Factory Muffin Faker.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\FactoryMuffin\Faker;

/**
 * This is the faker facade class.
 *
 * This class dynamically proxies static method calls to the underlying faker.
 *
 * @see League\FactoryMuffin\Faker\Faker
 *
 * @author Graham Campbell <graham@alt-three.com>
 *
 * @method static string          citySuffix()
 * @method static string          streetSuffix()
 * @method static string          buildingNumber()
 * @method static string          city()
 * @method static string          streetName()
 * @method static string          streetAddress()
 * @method static string          postcode()
 * @method static string          address()
 * @method static string          country()
 * @method static float           latitude($min = -90, $max = 90)
 * @method static float           longitude($min = -180, $max = 180)
 * @method static float[]         localCoordinates()
 * @method static int             randomDigitNotNull()
 * @method static mixed           passthrough($value)
 * @method static string          randomLetter()
 * @method static string          randomAscii()
 * @method static array           randomElements($array = ['a', 'b', 'c'], $count = 1, $allowDuplicates = false)
 * @method static mixed           randomElement($array = ['a', 'b', 'c'])
 * @method static int|string|null randomKey($array = [])
 * @method static array|string    shuffle($arg = '')
 * @method static array           shuffleArray($array = [])
 * @method static string          shuffleString($string = '', $encoding = 'UTF-8')
 * @method static string          numerify($string = '###')
 * @method static string          lexify($string = '????')
 * @method static string          bothify($string = '## ??')
 * @method static string          asciify($string = '****')
 * @method static string          regexify($regex = '')
 * @method static string          toLower($string = '')
 * @method static string          toUpper($string = '')
 * @method static int             biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
 * @method static string          hexColor()
 * @method static string          safeHexColor()
 * @method static array           rgbColorAsArray()
 * @method static string          rgbColor()
 * @method static string          rgbCssColor()
 * @method static string          rgbaCssColor()
 * @method static string          safeColorName()
 * @method static string          colorName()
 * @method static string          hslColor()
 * @method static array           hslColorAsArray()
 * @method static string          company()
 * @method static string          companySuffix()
 * @method static string          jobTitle()
 * @method static int             unixTime($max = 'now')
 * @method static \DateTime       dateTime($max = 'now', $timezone = null)
 * @method static \DateTime       dateTimeAD($max = 'now', $timezone = null)
 * @method static string          iso8601($max = 'now')
 * @method static string          date($format = 'Y-m-d', $max = 'now')
 * @method static string          time($format = 'H:i:s', $max = 'now')
 * @method static \DateTime       dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null)
 * @method static \DateTime       dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null)
 * @method static \DateTime       dateTimeThisCentury($max = 'now', $timezone = null)
 * @method static \DateTime       dateTimeThisDecade($max = 'now', $timezone = null)
 * @method static \DateTime       dateTimeThisYear($max = 'now', $timezone = null)
 * @method static \DateTime       dateTimeThisMonth($max = 'now', $timezone = null)
 * @method static string          amPm($max = 'now')
 * @method static string          dayOfMonth($max = 'now')
 * @method static string          dayOfWeek($max = 'now')
 * @method static string          month($max = 'now')
 * @method static string          monthName($max = 'now')
 * @method static string          year($max = 'now')
 * @method static string          century()
 * @method static string          timezone($countryCode = null)
 * @method static void            setDefaultTimezone($timezone = null)
 * @method static string          getDefaultTimezone()
 * @method static string          file($sourceDirectory = '/tmp', $targetDirectory = '/tmp', $fullPath = true)
 * @method static string          randomHtml($maxDepth = 4, $maxWidth = 4)
 * @method static string          imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false, string $format = 'png')
 * @method static string          image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null, $gray = false, string $format = 'png')
 * @method static string          email()
 * @method static string          safeEmail()
 * @method static string          freeEmail()
 * @method static string          companyEmail()
 * @method static string          freeEmailDomain()
 * @method static string          safeEmailDomain()
 * @method static string          userName()
 * @method static string          password($minLength = 6, $maxLength = 20)
 * @method static string          domainName()
 * @method static string          domainWord()
 * @method static string          tld()
 * @method static string          url()
 * @method static string          slug($nbWords = 6, $variableNbWords = true)
 * @method static string          ipv4()
 * @method static string          ipv6()
 * @method static string          localIpv4()
 * @method static string          macAddress()
 * @method static string          word()
 * @method static array|string    words($nb = 3, $asText = false)
 * @method static string          sentence($nbWords = 6, $variableNbWords = true)
 * @method static array|string    sentences($nb = 3, $asText = false)
 * @method static string          paragraph($nbSentences = 3, $variableNbSentences = true)
 * @method static array|string    paragraphs($nb = 3, $asText = false)
 * @method static string          text($maxNbChars = 200)
 * @method static bool            boolean($chanceOfGettingTrue = 50)
 * @method static string          md5()
 * @method static string          sha1()
 * @method static string          sha256()
 * @method static string          locale()
 * @method static string          countryCode()
 * @method static string          countryISOAlpha3()
 * @method static string          languageCode()
 * @method static string          currencyCode()
 * @method static string          emoji()
 * @method static string          creditCardType()
 * @method static string          creditCardNumber($type = null, $formatted = false, $separator = '-')
 * @method static \DateTime       creditCardExpirationDate($valid = true)
 * @method static string          creditCardExpirationDateString($valid = true, $expirationDateFormat = null)
 * @method static array           creditCardDetails($valid = true)
 * @method static string          iban($countryCode = null, $prefix = '', $length = null)
 * @method static string          swiftBicNumber()
 * @method static string          name($gender = null)
 * @method static string          firstName($gender = null)
 * @method static string          firstNameMale()
 * @method static string          firstNameFemale()
 * @method static string          lastName($gender = null)
 * @method static string          title($gender = null)
 * @method static string          titleMale()
 * @method static string          titleFemale()
 * @method static string          phoneNumber()
 * @method static string          e164PhoneNumber()
 * @method static int             imei()
 * @method static string          realText($maxNbChars = 200, $indexSize = 2)
 * @method static string          realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2)
 * @method static string          macProcessor()
 * @method static string          linuxProcessor()
 * @method static string          userAgent()
 * @method static string          chrome()
 * @method static string          msedge()
 * @method static string          firefox()
 * @method static string          safari()
 * @method static string          opera()
 * @method static string          internetExplorer()
 * @method static string          windowsPlatformToken()
 * @method static string          macPlatformToken()
 * @method static string          iosMobileToken()
 * @method static string          linuxPlatformToken()
 * @method static string          uuid()
 */
class Facade
{
    /**
     * The underlying faker instance.
     *
     * @var \League\FactoryMuffin\Faker\Faker
     */
    private static $instance;

    /**
     * Get the underlying faker instance.
     *
     * We'll always cache the instance and reuse it.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public static function instance()
    {
        if (!self::$instance) {
            self::$instance = new Faker();
        }

        return self::$instance;
    }

    /**
     * Reset the underlying faker instance.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public static function reset()
    {
        self::$instance = null;

        return self::instance();
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @codeCoverageIgnore
     *
     * @param string $method    The method name.
     * @param array  $arguments The arguments.
     *
     * @return mixed
     */
    public static function __callStatic($method, $arguments)
    {
        switch (count($arguments)) {
            case 0:
                return self::instance()->$method();
            case 1:
                return self::instance()->$method($arguments[0]);
            case 2:
                return self::instance()->$method($arguments[0], $arguments[1]);
            case 3:
                return self::instance()->$method($arguments[0], $arguments[1], $arguments[2]);
            default:
                return call_user_func_array([self::instance(), $method], $arguments);
        }
    }
}
