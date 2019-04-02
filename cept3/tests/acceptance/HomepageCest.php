namespace App\Tests;

use App\Tests\AcceptanceTester;

class HomePageCest
{
    public function homePageContent(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('home page');
    }

}