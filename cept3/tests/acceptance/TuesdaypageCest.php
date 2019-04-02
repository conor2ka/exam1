namespace App\Tests;

use App\Tests\AcceptanceTester;

class TuesdayPageCest
{
    public function homePageContent(AcceptanceTester $I)
    {
        $I->amOnPage('/tuesday');
        $I->see('Tuesday week 11');
    }

}