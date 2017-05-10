<?php
use PHPUnit_Extensions_Selenium2TestCase_Keys as Keys;
use Illuminate\Support\Facades\DB;

class FBLikerTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {   
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://www.facebook.com');
    }

    const URLS = [
        'https://www.facebook.com/photo.php?fbid=708423979318875&set=a.103364529824826.7563.100004538376348&type=3&theater',
        'https://www.facebook.com/photo.php?fbid=755335437913094&set=a.100385076741470.686.100003099331858&type=3&theater',
    ];

    const ACCOUNTS = [
        'juhi.sharma12@rediffmail.com' => '7809863931',
        'raju.shahzan@rediffmail.com'  => '7809863931',
    ];

    public function testRecursive()
    {
        foreach (self::ACCOUNTS as $email => $password) {
            $this->FBForRec($email, $password);
        }
    }

    public function FBForRec($email, $password)
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value($email);
        $this->byName('pass')->value($password);
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
            $this->keys(Keys::ESCAPE);
            sleep(0.5);
        }
        $this->clickOnElement("userNavigationLabel");
        sleep(1);    
        $this->byLinkText('Log out')->click();
    }
}
?>