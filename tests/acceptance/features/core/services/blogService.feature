Feature: blogService
  In order to ...
  As a ...
  I need to ...

Scenario: Get all posts successfully

    Given a BLogService instance
    And a PostRepositoryInterface mock that returns an array of posts
    When calling getAllPosts method on the BLogService instance
    Then it should return an array of posts

#  Scenario: Get all posts when the repository returns no posts
#
#    Given a BLogService instance
#    And a PostRepositoryInterface mock that returns an empty array
#    When calling getAllPosts method on the BLogService instance
#    Then it should return an empty array
