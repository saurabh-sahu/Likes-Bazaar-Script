<?php
use PHPUnit_Extensions_Selenium2TestCase_Keys as Keys;

class FBLikerTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {   
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://www.facebook.com');
    }

    const URLS = [
    'https://www.facebook.com/photo.php?fbid=755335437913094&set=a.100385076741470.686.100003099331858&type=3&theater',//54
    //'https://www.facebook.com/photo.php?fbid=585693944877245&set=a.100385076741470.686.100003099331858&type=3&theater',//34
    //'https://www.facebook.com/photo.php?fbid=291350624311580&set=a.100385076741470.686.100003099331858&type=3&theater',//17
    ];

    const EMAILS = [
        'saurabhsahu474@gmail.com', 
        'saurabhsahu.nitr+ne@gmail.com', 
        '7809863931', 
        //'raju.shahzan@rediffmail.com',
        //'juhi.sharma12@rediffmail.com',
        // 'Raju.shahzan@outlook.com',//   auth prob
        // 'rahul.raj.sharma1993@yahoo.com', // auth prob
        // 'abhishek.anand1989@yahoo.com', // auth prob 
        // 'ruthfrost474@gmail.com',// 1 auth prob 
        // 'ruthfrost474@yahoo.com',// 2
        // 'ruthfrost474@reddif.com',// 3 reddif password: rockingcool
        // 'ruthfrost474@outlook.com',// 4 outlook pasword: rockingcooldude_1
        //'ruthfrost@zoho.com',//not happening
        //'saurabhsahu474@yahoo.com',//not happening
    ];

    const PASS = [
        'rockingcooldude', 
        'rockingcooldude', 
        '7809863931',
        // '7809863931',
        // '7809863931',
        // '7809863931',
        // 'rockingcooldude', 
        // 'rockingcooldude', 
        // 'rockingcooldude', 
        // 'rockingcooldude', 
        // 'rockingcooldude', 
        // 'rockingcooldude',
        //'rockingcooldude', 
        //'rockingcooldude',
    ];

    public function testFacebookLogin1()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[0]);
        $this->byName('pass')->value(self::PASS[0]);
        $this->clickOnElement('loginbutton');
        echo $this->active();
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

    // public function testFacebookLogin6()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[5]);
    //     $this->byName('pass')->value(self::PASS[5]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);    
    //     }
    // }

    // public function testFacebookLogin7()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[6]);
    //     $this->byName('pass')->value(self::PASS[6]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(3);    
    //     }
    // }

    // public function testFacebookLogin8()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[7]);
    //     $this->byName('pass')->value(self::PASS[7]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(3);    
    //     }
    // }
    // public function testFacebookLogin9()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[8]);
    //     $this->byName('pass')->value(self::PASS[8]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(3);    
    //     }
    // }
    // public function testFacebookLogin10()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[9]);
    //     $this->byName('pass')->value(self::PASS[9]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(3);    
    //     }
    // }
    // public function testFacebookLogin11()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[10]);
    //     $this->byName('pass')->value(self::PASS[10]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(3);    
    //     }
    // }

    // public function testFacebookLogin12()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('email')->value(self::EMAILS[11]);
    //     $this->byName('pass')->value(self::PASS[11]);
    //     $this->clickOnElement('loginbutton');
    //     foreach (self::URLS as $url) {
    //         $this->url($url);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(1);  
    //         $this->keys(Keys::ESCAPE);
    //         sleep(1);
    //         $this->keys('l'.Keys::ENTER);
    //         sleep(3);    
    //     }
    // }

}
?>