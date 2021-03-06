@mink:selenium2 @alice(Page)  @reset-schema
Feature: Create a Picture comparison slider widget

    Background:
        Given I maximize the window
        And I am on homepage

    Scenario: I create a new Picture comparison slider widget
        When I switch to "layout" mode
        Then I should see "New content"
        When I select "Picture comparison slider" from the "1" select of "main_content" slot
        Then I should see "Widget (Picture comparison slider)"
        And I should see "1" quantum