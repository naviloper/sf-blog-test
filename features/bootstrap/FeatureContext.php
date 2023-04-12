<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    /**
     * @Given a BLogService instance
     */
    public function aBlogserviceInstance()
    {
        #throw new PendingException();
    }

    /**
     * @Given a PostRepositoryInterface mock that returns an array of posts
     */
    public function aPostrepositoryinterfaceMockThatReturnsAnArrayOfPosts()
    {
       # throw new PendingException();
    }

    /**
     * @When calling getAllPosts method on the BLogService instance
     */
    public function callingGetallpostsMethodOnTheBlogserviceInstance()
    {
        #throw new PendingException();
    }

    /**
     * @Then it should return an array of posts
     */
    public function itShouldReturnAnArrayOfPosts()
    {
       # throw new PendingException();
    }
}
