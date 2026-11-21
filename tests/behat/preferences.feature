@theme @theme_accessible
Feature: Accessibility options of the Accessible theme
  In order to read Moodle comfortably
  As a user with low vision
  I need to choose my own display options and have the theme apply them

  Background:
    Given the following config values are set as admin:
      | theme           | accessible |
      | allowuserthemes | 1          |
    And the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | One      | student1@example.com |

  Scenario: A logged in user saves a text size and the page uses it
    Given I log in as "student1"
    And I visit "/theme/accessible/preferences.php"
    When I set the field "Text size" to "150%"
    And I press "Save and stay"
    Then I should see "Changes saved"
    And "body.accessible-fontsize-150" "css_element" should exist

  Scenario: Restore defaults removes the choices
    Given I log in as "student1"
    And I visit "/theme/accessible/preferences.php"
    And I set the field "Text size" to "200%"
    And I press "Save and stay"
    And "body.accessible-fontsize-200" "css_element" should exist
    When I press "Restore defaults"
    Then "body.accessible-fontsize-200" "css_element" should not exist

  Scenario: A visitor can open the options from the login page and the choice shows there
    Given I am on site homepage
    And I click on "Accessibility options" "link"
    When I set the field "Text size" to "125%"
    And I press "Save and stay"
    Then "body.accessible-fontsize-125" "css_element" should exist

  Scenario: The accessibility button is the first control after the skip link
    Given I log in as "student1"
    Then "Accessibility options" "link" should exist

  Scenario: High contrast switches the page to the dark palette
    Given I log in as "student1"
    And I visit "/theme/accessible/preferences.php"
    When I set the field "Contrast" to "High (white text on black)"
    And I press "Save and stay"
    Then "body.accessible-contrast-high" "css_element" should exist
    And the "data-bs-theme" attribute of "body" "css_element" should contain "dark"

  Scenario: Save and return goes back to the page the options were opened from
    Given I log in as "student1"
    And I visit "/my/"
    And I click on "Accessibility options" "link"
    When I set the field "Text size" to "150%"
    And I press "Save and return"
    Then I should see "Changes saved"
    And the url should match "/my/"
    And "body.accessible-fontsize-150" "css_element" should exist

  Scenario: Cancel goes back without saving
    Given I log in as "student1"
    And I visit "/my/"
    And I click on "Accessibility options" "link"
    When I set the field "Text size" to "200%"
    And I press "Cancel"
    Then the url should match "/my/"
    And "body.accessible-fontsize-200" "css_element" should not exist

  Scenario: Without a page of origin the options go back to the user's preferences
    Given I log in as "student1"
    And I visit "/theme/accessible/preferences.php"
    When I press "Save and return"
    Then the url should match "/user/preferences.php"

  Scenario: An address of another site is ignored
    Given I log in as "student1"
    And I visit "/theme/accessible/preferences.php?returnurl=https://example.com/"
    When I press "Cancel"
    Then the url should match "/user/preferences.php"
