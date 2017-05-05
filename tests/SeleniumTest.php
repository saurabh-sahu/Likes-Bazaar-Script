<?php
use PHPUnit_Extensions_Selenium2TestCase_Keys as Keys;

class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {   
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://www.facebook.com');
    }

    const URLS = [
    'https://www.facebook.com/photo.php?fbid=708423979318875&set=a.103364529824826.7563.100004538376348&type=3&theater',//125 4:20
    'https://www.facebook.com/photo.php?fbid=695299170631356&set=a.103364529824826.7563.100004538376348&type=3&theater',//185
    'https://www.facebook.com/photo.php?fbid=652120514949222&set=a.103364529824826.7563.100004538376348&type=3&theater',//176
    'https://www.facebook.com/photo.php?fbid=650414835119790&set=a.103364529824826.7563.100004538376348&type=3&theater',//191
    ];

    const EMAILS = [
        'saurabhsahu474@gmail.com', 
        'saurabhsahu.nitr+ne@gmail.com', 
        '7809863931', 
        'raju.shahzan@rediffmail.com',
        'juhi.sharma12@rediffmail.com',
        'Raju.shahzan@outlook.com',
        'rahul.raj.sharma1993@yahoo.com',
        'abhishek.anand1989@yahoo.com',
        'pratish.kumar.1998@yahoo.com',
    ];

    const PASS = [
        'rockingcooldude', 
        'rockingcooldude', 
        '7809863931',
        '7809863931',
        '7809863931',
        '7809863931',
        'rockingcooldude', 
        'rockingcooldude', 
        'rockingcooldude',
    ];
    
    public function testFacebookLogin1()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[0]);
        $this->byName('pass')->value(self::PASS[0]);
        $this->clickOnElement('loginbutton');
        foreach (self::URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);    
        }
    }

    public function testFacebookLogin2()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[1]);
        $this->byName('pass')->value(self::PASS[1]);
        $this->clickOnElement('loginbutton');
        foreach (self::URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);    
        }
    }

    public function testFacebookLogin3()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[2]);
        $this->byName('pass')->value(self::PASS[2]);
        $this->clickOnElement('loginbutton');
        foreach (self::URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);    
        }
    }

    public function testFacebookLogin4()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[3]);
        $this->byName('pass')->value(self::PASS[3]);
        $this->clickOnElement('loginbutton');
        foreach (self::URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);    
        }
    }

    public function testFacebookLogin5()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[4]);
        $this->byName('pass')->value(self::PASS[4]);
        $this->clickOnElement('loginbutton');
        foreach (self::URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);    
        }
    }

    public function testFacebookLogin6()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[5]);
        $this->byName('pass')->value(self::PASS[5]);
        $this->clickOnElement('loginbutton');
        foreach (self::URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);    
        }
    }


//     public function testFacebookCreation()
//     {   
//         $count = 1;
//         /*$this->url('https://www.facebook.com'); 
//         $this->byName('firstname')->value('Saurabh');
//         $this->byName('lastname')->value('Sahu');
//         $this->byName('reg_email__')->value('rockinkoldude+1@gmail.com');
//         $this->byName('reg_email_confirmation__')->value('rockinkoldude+' . $count . '@gmail.com');
//         $this->byName('reg_passwd__')->value('rockingcooldude');
//         $this->byCssSelector('select[name="birthday_day"] option[value="10"]')->click();        
//         $this->byCssSelector('select[name="birthday_month"] option[value="12"]')->click();        
//         $this->byCssSelector('select[name="birthday_year"] option[value="1992"]')->click();        
//         $this->byCssSelector('input[value="2"]')->click();
//         $this->byName('websubmit')->click();
//         sleep(1);*/

//         $this->url('https://www.gmail.com');
//         $this->byCssSelector('#Email')->value('rockinkoldude@gmail.com');
//         $this->byCssSelector('#next')->click();
//         sleep(1);
//         $this->byCssSelector('#Passwd')->value('rockingcooldude');
//         $this->byCssSelector('#signIn')->submit();
//         $this->keys(Keys::ENTER);        
        
//         //$this->url('https://mail.google.com/mail/#search/rockinkoldude%2B' . $count . '%40gmail.com');
// sleep(2);

//         //$this->byXPath("//*[contains(text(), 'is your Facebook')]")->click();
//         $this->byCssSelector('tbody tr')->click();

// sleep(10);
        
//     }


//     public function testClicks()
//     {
//         $this->visit('/');
//         $this->byName('username')->value('Saurabh_321');
//         $this->byName('password')->value('saurabh_1');
//         $this->byCssSelector('form')->submit();
//         $this->visit('/en/View_Ads');
//         $elements = $this->byCssSelector(".ptc_ads");
//         $elements->click();
//         $this->visit('/en/View_Ads');
//     }

    protected function visit($path)
    {
        $this->url($path);
        return $this;
    }

    protected function see($text, $tag = 'body')
    {

        // java -jar selenium.jar
        //var_dump($this->byTag('body')->text());exit;
        //$this->assertEquals($text, $this->byTag($tag)->text());


        $usernameInput = $this->byName('email');
        $usernameInput->value('9040364545');
        $this->assertEquals('9040364545', $usernameInput->value());
        $passwordInput = $this->byName('pass');
        $passwordInput->value('');
        //$this->assertEquals('mypass', $passwordInput->value());
        $this->clickOnElement('loginbutton');
    }

}
?>