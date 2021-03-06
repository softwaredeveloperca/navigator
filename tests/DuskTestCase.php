<?php

namespace Tests;

use Laravel\Dusk\TestCase as BaseTestCase;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Chrome\ChromeOptions;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        static::startChromeDriver();
    }

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    protected function driver()
    {
		$chromeOptions = new ChromeOptions();
		$chromeOptions->addArguments(['no-sandbox']);
		$capabilities = DesiredCapabilities::chrome();
		$capabilities->setCapability(ChromeOptions::CAPABILITY, $chromeOptions);
		
		return RemoteWebDriver::create(
			'http://localhost:9515',
			$capabilities, 150000, 150000
		);
		/*
        return RemoteWebDriver::create(
            'http://localhost:9515', DesiredCapabilities::chrome()
        );
		*/
    }
}
