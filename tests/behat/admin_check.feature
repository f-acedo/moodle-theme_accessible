@theme @theme_accessible
Feature: Administrator warnings about user themes
  In order to know why users cannot configure the theme
  As an administrator
  I need to be warned when "Allow user themes" is off

  Scenario: The status report warns when user themes are off
    Given the following config values are set as admin:
      | allowuserthemes | 0 |
    When I log in as "admin"
    And I navigate to "Reports > System status" in site administration
    Then I should see "User configuration of the Accessible theme"
    And I should see "is off, so users cannot set their own accessibility options"

  Scenario: The status report is satisfied when user themes are on
    Given the following config values are set as admin:
      | allowuserthemes | 1 |
    When I log in as "admin"
    And I navigate to "Reports > System status" in site administration
    Then I should see "Users can set their own accessibility options"
