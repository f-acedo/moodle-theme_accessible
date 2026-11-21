@theme @theme_accessible
Feature: Guide of the theme
  In order to learn what the theme does and how it was checked
  As an administrator
  I need to open the guide from the Information tab

  Background:
    Given the following config values are set as admin:
      | theme | accessible |

  Scenario: The Information tab has a Documentation button that opens the guide in a new tab
    Given I log in as "admin"
    When I visit "/admin/settings.php?section=themesettingaccessible"
    And I click on "Information" "link" in the ".settingsform .nav-tabs" "css_element"
    Then I should see "Guide to the theme" in the ".accessible-about-guide h3" "css_element"
    And "Documentation" "link" should exist in the ".accessible-about-guide" "css_element"
    And "a[href$='/theme/accessible/guide.php'][target=_blank][rel~=noopener]" "css_element" should exist

  Scenario: The guide page shows the guide with a working contents list and a download link
    Given I log in as "admin"
    When I visit "/theme/accessible/guide.php"
    Then I should see "Accessible theme for Moodle: the complete guide" in the "h1" "css_element"
    And "What Accessible is" "link" should exist in the ".accessible-guide-content" "css_element"
    And "h2#1-what-accessible-is" "css_element" should exist
    And "Download the guide (Markdown file)" "link" should exist
