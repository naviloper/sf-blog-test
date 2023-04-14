Feature: PostRepository
  In order to ...
 
 
 Scenario: Retrieving all posts successfully
   Given the system has posts in the database
   When the system is requested to get all posts
   Then the system retrieves all posts from the database
   And converts each post to a business post
   And returns an array of business posts


# Scenario: No posts found in the database
#  Given the system has no posts in the database
#  When the system is requested to get all posts
#  Then the system should return an empty array
