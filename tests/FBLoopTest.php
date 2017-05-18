<?php
use PHPUnit_Extensions_Selenium2TestCase_Keys as Keys;

class FBLikerTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {   
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://www.facebook.com');
    }   

    public $email = 'sahurasmita228@rediffmail.com';
    public $password = 'r11s7s74';

    public function testFBLoop()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value($this->email);
        $this->byName('pass')->value($this->password);
        $this->clickOnElement('loginbutton');
        sleep(20);
        $this->avoidNotificationPopUp();
        sleep(5);
        while (1) {
            $this->checkForUpdates();
            sleep(1*60);    
        }
        
    }

    public function checkIfBlackListed()
    {
        sleep(2);
        if ( strpos($this->url() , 'checkpoint') !== false ) {
            var_dump('!!!!!!abort------' . $this->email . '------abort!!!!!!' );exit;
        }
    }

    public function checkForUpdates()
    {
        $this->url('https://sujokodisha.com/Likes-Bazaar/script/request.php');
        $requestString = $this->title();
        if ( $requestString ) {
            $request = explode(',', $requestString);
            $type = $request[0];
            $url = $request[1];
            $id = $request[2];

            switch ($type) {
                case 'Photo':  
                    $this->likePhoto($url, $id);
                    break;
                case 'Page':
                    $this->likePage($url, $id);
                    break;
                case 'FriendRequest':
                    $this->sendOrAcceptFriendReq($url, $id);
                    break;
                case 'Zomato':
                    $this->zomatoRate($url, $id);
                    break;
            }
        }
    }

    public function likePhoto($url, $id)
    {
        $this->url($url);
        $this->avoidNotificationPopUp();

        try {
            if ($this->byClassName('UFILinkBright')) {
                $status = 0; // already liked.
            }
        } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {

            $this->keys('l'.Keys::ENTER); // try liking.
            sleep(3);    
            $this->keys(Keys::ESCAPE);
            sleep(1);

            try {
                if ($this->byClassName('UFILinkBright')) {
                    $status = 1; // liked now.
                }
            } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {

                $this->keys('l'.Keys::ENTER); // try liking again.
                sleep(3);    
                $this->keys(Keys::ESCAPE);
                sleep(1);

                try {
                    if ($this->byClassName('UFILinkBright')) {
                        $status = 1;  // liked now.
                    }
                } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                    $status = -1;  // private pic.                
                }
            }
        }
        $this->url("https://sujokodisha.com/Likes-Bazaar/script/request-response.php?type=Photo&id=" . $id . "&status=" . $status);
    }

    public function likePage($url, $id)
    {
        $this->url($url);
        $this->avoidNotificationPopUp();
        
        try {
            $this->byClassName('likeButton')->click(); // try liking.
            sleep(1);
            $status = 1; // liked now.
        } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
            try {
                if ($this->byClassName('likedButton')) {
                    $status = 0; // liked already.
                } 
            } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                $status = -1; // private.
            }
        }

        $this->url("https://sujokodisha.com/Likes-Bazaar/script/request-response.php?type=Page&id=" . $id . "&status=" . $status);
    }

    public function sendOrAcceptFriendReq($email, $id)
    {
        $this->url('https://www.facebook.com/search/top/?q=' . $email); 
        $this->avoidNotificationPopUp();

        try {
            $this->byClassName('FriendRequestAdd')->click();
            sleep(1);
            $status = 0; // added now.
        } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
            try {
                $this->byClassName('FriendRequestIncoming')->click();
                sleep(1);
                $this->byCssSelector('.FriendListActionMenu .accept')->click();
                sleep(1);
                $status = 1; //accepted now.
            } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                 $status = -1; //private or not found.
            }
        }

        $this->url("https://sujokodisha.com/Likes-Bazaar/script/request-response.php?type=FriendRequest&id=" . $id . "&status=" . $status);
    }

    public function zomatoRate($url, $id)
    {
        $this->url($url);
        $this->byCssSelector('.rate_display_button')->click();
        try {
            $this->byCssSelector('.level-9')->click();
            $status = 1;
        } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
            $status = -1;
        }
        sleep(1);
        $this->url("https://sujokodisha.com/Likes-Bazaar/script/request-response.php?type=Zomato&id=" . $id . "&status=" . $status);
    }

    public function avoidNotificationPopUp()
    {
        $this->checkIfBlackListed();

        sleep(2);
        try {
            if ($this->byId('notification-permission-title')) {
                $this->byClassName('layerCancel')->click();
            }
        } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                 
        }
        sleep(2);
    }
}
?>