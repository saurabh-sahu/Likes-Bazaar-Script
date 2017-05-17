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
        //'https://www.facebook.com/photo.php?fbid=650414835119790&set=a.103364529824826.7563.100004538376348&type=3&theater',
        //'https://www.facebook.com/photo.php?fbid=637162239778383&set=a.103364529824826.7563.100004538376348&type=3&theater',
        'https://www.facebook.com/photo.php?fbid=723793217781951&set=a.103364529824826.7563.100004538376348&type=3&theater',
        'https://www.facebook.com/photo.php?fbid=723793217781951&set=a.103364529824826.7563.100004538376348&type=3&theater',
        'https://www.facebook.com/photo.php?fbid=108253816420348&set=a.108253846420345.1073741826.100017071905890&type=3&theater',
    ];

    const PAGE_URLS = [
        'https://www.facebook.com/likes.bazaar',
        'https://www.facebook.com/Harshi-Srivastava-1857529834534345',
    ];

    const ACCOUNTS = [
        [
            'email'    => 'sahurasmita228@gmx.com', //disabled
            'password' => 'r11s7s74',
        ],
        // [
        //     'email'    => 'sahurasmita228@hushmail.com', 
        //     'password' => 'r11s7s74',
        // ],
        // [
        //     'email'    => 'rashmi12cse080@hotmail.com',
        //     'password' => 'r11s7s74',
        // ],
        // [
        //     'email'    => 'rashmi12cse080@gmx.com',
        //     'password' => 'r11s74',
        // ],
        // [
        //     'email'    => 'rashmi12cse080@rediffmail.com',
        //     'password' => 'r11s7s74',
        // ],

    ];
   

    public function testFBManage1()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value(self::ACCOUNTS[0]['email']);
        $this->byName('pass')->value(self::ACCOUNTS[0]['password']);
        $this->clickOnElement('loginbutton');
        sleep(1);
        $this->avoidNotificationPopUp();
        $this->likePhotoList();
        //$this->sendOrAcceptFriendReq();
        //$this->addProfilePic();
        //$this->likePageList();
    }

    public function testFBManage2()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value(self::ACCOUNTS[1]['email']);
        $this->byName('pass')->value(self::ACCOUNTS[1]['password']);
        $this->clickOnElement('loginbutton');
        sleep(1);
        $this->avoidNotificationPopUp();
        $this->sendOrAcceptFriendReq();
        $this->addProfilePic();
        $this->likePageList();
        $this->likePhotoList();
    }

    public function testFBManage3()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value(self::ACCOUNTS[2]['email']);
        $this->byName('pass')->value(self::ACCOUNTS[2]['password']);
        $this->clickOnElement('loginbutton');
        sleep(1);
        $this->avoidNotificationPopUp();
        $this->sendOrAcceptFriendReq();
        $this->addProfilePic();
        $this->likePageList();
        $this->likePhotoList();
    }

    public function testFBManage4()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value(self::ACCOUNTS[3]['email']);
        $this->byName('pass')->value(self::ACCOUNTS[3]['password']);
        $this->clickOnElement('loginbutton');
        sleep(1);
        $this->avoidNotificationPopUp();
        $this->sendOrAcceptFriendReq();
        $this->addProfilePic();
        $this->likePageList();
        $this->likePhotoList();
    }

    public function testFBManage5()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->clear();
        $this->byName('email')->value(self::ACCOUNTS[4]['email']);
        $this->byName('pass')->value(self::ACCOUNTS[4]['password']);
        $this->clickOnElement('loginbutton');
        sleep(1);
        $this->avoidNotificationPopUp();
        $this->sendOrAcceptFriendReq();
        $this->addProfilePic();
        $this->likePageList();
        $this->likePhotoList();
    }


    public function sendOrAcceptFriendReq()
    {
        foreach (self::ACCOUNTS as $accounts ) {
            $this->url('https://www.facebook.com/search/top/?q=' . $accounts['email']); 
            sleep(1);

            try {
                $this->byClassName('FriendRequestAdd')->click();
                sleep(1);
            } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                 
            }

            try {
                $this->byClassName('FriendRequestIncoming')->click();
                sleep(1);
                $this->byCssSelector('.FriendListActionMenu .accept')->click();
                sleep(1);
            } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                 
            }
        }
    }

    public function avoidNotificationPopUp()
    {
        try {
            if ($this->byId('notification-permission-title')) {
                $this->byClassName('layerCancel')->click();
            }
        } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                 
        }
        
    }

    public function addProfilePic()
    {
        $this->url('https://www.facebook.com/profile.php'); 
        $this->byClassName('profilePicThumb')->click();
        sleep(30);
    }

    public function likePhotoList()
    {
        foreach (self::PHOTO_URLS as $url) {
            $this->url($url);
            sleep(3);
            try {
                if ($this->byClassName('UFILinkBright')) {
                    $status = 0;
                }
            } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                $this->keys('l'.Keys::ENTER);
                sleep(3);    
                $this->keys(Keys::ESCAPE);
                sleep(1);
                try {
                    if ($this->byClassName('UFILinkBright')) {
                        $status = 1;
                    }
                } catch (PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
                    $status = 'private';                
                }
            }
            
        }
        var_dump($status);
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