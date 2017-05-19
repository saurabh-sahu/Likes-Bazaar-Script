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

    const PHOTO_URLS = [
        'https://www.facebook.com/photo.php?fbid=755335437913094&set=a.100385076741470.686.100003099331858&type=3&theater',
    ];

    const PAGE_URLS = [
        'https://www.facebook.com/likes.bazaar',
    ];

    const ACCOUNTS = [
        'email' =>    'password',
        
    ];

    public function testRecursive()
    {
        foreach (self::ACCOUNTS as $email => $password) {
            $this->FBForRec($email, $password);
        }
    }

    public function FBForRec($email, $password)
    {
        echo $email;
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value($email);
        $this->byName('pass')->value($password);
        $this->clickOnElement('loginbutton');
        $this->likePageList();
        $this->likePhotoList();
        $this->clickOnElement("userNavigationLabel");
        sleep(1);    
        $this->byLinkText('Log out')->click();
    }

    public function likePhotoList()
    {
        foreach (self::PHOTO_URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(1);  
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys('l'.Keys::ENTER);
            sleep(3);    
            $this->keys(Keys::ESCAPE);
            sleep(0.5);
        }
    }

    public function likePageList()
    {
        foreach (self::PAGE_URLS as $url) {
            $this->url($url);
            sleep(1);
            $this->keys(Keys::ESCAPE);
            sleep(1);
            $this->keys(Keys::ESCAPE);
            $this->byClassName('likeButton')->click();
        }
    }

}
?>
