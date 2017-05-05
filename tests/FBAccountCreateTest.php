<?php
use PHPUnit_Extensions_Selenium2TestCase_Keys as Keys;

class FBAccountCreateTest extends PHPUnit_Extensions_Selenium2TestCase
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
        'raju.bfgbgdfgshahzan1998@rediffmail.com',
        'juhi.sharma1212@rediffmail.com',
        'Raju.shahzan12@outlook.com',
        'rahul.raj.sharma1999@yahoo.com',
        'abhishek.anand1999@yahoo.com',
        'pratish.kumar.1999@yahoo.com',
    ];

    const PASS = [
        'rockingcooldude',
        'rockingcooldude',
        'rockingcooldude',
        'rockingcooldude', 
        'rockingcooldude', 
        'rockingcooldude',
    ];
    public function testSessionClose()
    {
        $this->url('https://www.facebook.com'); 
        $this->byName('email')->value(self::EMAILS[3]);
        $this->byName('pass')->value(self::PASS[3]);
        $this->clickOnElement('loginbutton');
        $this->stop();
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://www.facebook.com');
    }

    // public function testFacebookCreation()
    // {
    //     $this->url('https://www.facebook.com'); 
    //     $this->byName('firstname')->value('Pratish');
    //     $this->byName('lastname')->value('Kumar');
    //     $this->byName('reg_email__')->value(self::EMAILS[0]);
    //     $this->byName('reg_email_confirmation__')->value(self::EMAILS[0]);
    //     $this->byName('reg_passwd__')->value(self::PASS[0]);
    //     $this->byCssSelector('select[name="birthday_day"] option[value="10"]')->click();        
    //     $this->byCssSelector('select[name="birthday_month"] option[value="12"]')->click();        
    //     $this->byCssSelector('select[name="birthday_year"] option[value="1992"]')->click();        
    //     $this->byCssSelector('input[value="2"]')->click();
    //     $this->byName('websubmit')->click();
    //     sleep(15);
    // }
}
?>