<?php
use PHPUnit_Extensions_Selenium2TestCase_Keys as Keys;
use Illuminate\Support\Facades\DB;

class ZomatoReviewerTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {   
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://www.facebook.com');
    }



    public function testZomatoRate()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('r.ockinkoldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate1()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('ro.ckinkoldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate2()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('roc.kinkoldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate3()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rock.inkoldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate4()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rocki.nkoldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate5()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rockin.koldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate6()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rockink.oldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate7()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rockinko.ldude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate8()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rockinkol.dude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

    public function testZomatoRate9()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#login-email')->click();
        $this->byCssSelector('#ld-email')->value('rockinkold.ude@gmail.com');
        $this->byCssSelector('#ld-password')->value('rockingcooldude');
        $this->byCssSelector('#ld-submit-global')->click();
        sleep(3);
        $this->url('https://www.zomato.com/hyderabad/tea-trails-gachibowli');
        $this->byCssSelector('.rate_display_button')->click();
        $this->byCssSelector('.level-9')->click();
        sleep(3);
    }

/*
    public function testZomatoSignup1()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('r.ockinkoldude@gmail.com');//saurabh-sahu-41287712/edit
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup2()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('ro.ckinkoldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup3()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('roc.kinkoldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup4()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rock.inkoldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup5()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rocki.nkoldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup6()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rockin.koldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup7()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rockink.oldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup8()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rockinko.ldude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup9()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rockinkol.dude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    public function testZomatoSignup10()
    {
        $this->url('https://www.zomato.com/hyderabad');
        sleep(1);
        $this->byCssSelector('#signin-link')->click();
        sleep(1);
        $this->byCssSelector('#signup-email')->click();
        $this->byName('fullname')->value('Saurabh Sahu');
        $this->byName('email')->value('rockinkold.ude@gmail.com');
        $this->byName('password')->value('rockingcooldude');
        $this->byCssSelector('#sd-submit')->click();
sleep(2);
    }

    */


    // public function testZomato()
    // {
    //     $this->url('https://www.gmail.com');
    //     $this->byCssSelector('#identifierId')->value('rockinkoldude@gmail.com');
    //     $this->keys(keys::ENTER);
    //     sleep(1);
    //     $this->byName('password')->value('rockingcooldude');
    //     $this->keys(keys::ENTER);
    //     sleep(1);
    //     $this->url('https://www.zomato.com/hyderabad');
    //     sleep(1);
    //     $this->byCssSelector('#signin-link')->click();
    //     sleep(1);
    //     $this->byCssSelector('#customBtn')->click();
    //     $this->waitForPopUp('newWindow',6000);
    //     $this->selectWindow('newWindow');        
    //     $this->keys(keys::TAB);
    //     $this->keys(keys::ENTER);
    //     sleep(1);
    //     $this->byCssSelector('#submit_approve_access')->click();
    // }

}
?>  