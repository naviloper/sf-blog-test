<?php

declare(strict_types=1);

namespace App\Tests\Step\Acceptance\core\services;

class blogService extends \App\Tests\AcceptanceTester
{
 /**
     * @Given a BLogService instance
     */
    public function aBLogServiceInstance()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `a BLogService instance` is not defined");
    }

   /**
    * @Given a PostRepositoryInterface mock that returns an array of posts
    */
    public function aPostRepositoryInterfaceMockThatReturnsAnArrayOfPosts()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `a PostRepositoryInterface mock that returns an array of posts` is not defined");
    }

   /**
    * @When calling getAllPosts method on the BLogService instance
    */
    public function callingGetAllPostsMethodOnTheBLogServiceInstance()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `calling getAllPosts method on the BLogService instance` is not defined");
    }

   /**
    * @Then it should return an array of posts
    */
    public function itShouldReturnAnArrayOfPosts()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `it should return an array of posts` is not defined");
    }
}
