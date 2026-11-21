@theme @theme_accessible
Feature: Information tab of the theme settings
  In order to check the design and ask for support
  As an administrator
  I need the colour vision test, fonts, licences and support information in one place

  Background:
    # The theme scrolls smoothly; Behat clicks before the scroll ends, so the test uses the reduced motion option.
    Given the following config values are set as admin:
      | default_motion | reduced | theme_accessible |
    And the following config values are set as admin:
      | theme | accessible |
    And I log in as "admin"
    And I visit "/admin/settings.php?section=themesettingaccessible"
    And I click on "Information" "link" in the ".settingsform .nav-tabs" "css_element"

  Scenario: The tab shows the version, the support block and the licences
    Then I should see "Accessible theme version" in the ".accessible-about > h2" "css_element"
    And I should see "Support information"
    And I should see "Moodle:" in the "#accessible-about-support" "css_element"
    And I should see "GNU General Public License, version 3 or later"
    And I should see "SIL Open Font License, version 1.1"

  Scenario: The colour vision test shows every simulation
    Then "ul.accessible-about-previews svg.accessible-about-test" "css_element" should exist
    And I should see "Original colours"
    And I should see "Red-weak or red-blind (protan) - Strong"

  Scenario: The report button links to the issues page of the repository
    Then "Report an issue" "link" should exist
    And "a[target=_blank][rel~=noopener]" "css_element" should exist
    And I should not see "Available when the theme repository is published."

  @javascript
  Scenario: The support information can be copied
    When I press "Copy information"
    Then I should see "Information" in the ".accessible-about-copystatus .alert-info" "css_element"
    And I should see "Copied to the clipboard." in the ".accessible-about-copystatus .alert-info" "css_element"
