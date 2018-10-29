#CHANGELOG

This changelog references the relevant changes done in 1.0 and its minor versions.

To get the diff for a specific change, go to https://github.com/LIN3S/WPFoundation/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/WPFoundation/compare/v1.0.0...v1.0.1

* 1.8.0
    * Reworked `Fields` to rely in class methods instead of static ones.
    * Deprecated static method calls in classes implementing `FieldComponentInterface`.
    * Deprecated extending abstract `FieldComponent`. Implement `FieldComponentInterface::init()` instead.
* 1.7.1
    * Fixed issue with FieldComponent declarations not receiving a valid name parameter
    * Added `name()` method to `FieldConnector` interface.
* 1.7.0
    * Added new `PostType` constructor to declare new post type without the need to extend `PostType` class.
    * Added new `Menus` constructor to declare menus without the need to extend `Menus` class.
    * Added `Taxonomy` class to declare new terms.
    * Added `Fields` constructor allowing `Connector` usage to declare new fields.
    * Deprecated extending `PostType` class. Use new `PostType` constructor instead.
    * Deprecated extending `Menus` class. Use new `Menus` constructor instead.
    * Deprecated extending `CustomPostTypeFields` class. Use new `Fields` constructor instead.
    * Deprecated declaring taxonomies in `PostType` class. Use new `Taxonomy` constructor instead.
* 1.6.2, 1.6.3, 1.6.4
    * Fixed minor typos
* 1.6.1
    * Changed `trans` Twig function to work with WPML 3.5.0
* 1.6.0
    * WPTemplateSelector is now an included feature.
    * Fixed call of `rewriteRules` method inside PostType base class.
    * Added foundations for login page customization using `Login` abstract class.
    * Added `LocalMailer` as an alternative to `Mailer` for mail sending strategies.
    * Added `xmlrpc_enabled` filter that reads XMLRPC_ENABLED global flag.
    * Decoupled ACF logic from Theme to the `LIN3S\WPFoundation\Configuration\Acf\Acf` abstract base class.
* 1.5.0
    * Added `developmentAssets` and `productionAssets` methods inside `AssetsInterface`.
    * Added protected method `registerAjaxUrls` in `Assets` that is invoked as sixth parameter inside `addScript` method.
    * Deprecated `assets` method inside `Assets`class.
    * Added `addScreenAttributes` to `FieldsInterface`.
    * Fixed `CustomPostTypeFields` `removeScreenAttributes` function.
* 1.4.1
    * Fixed issues due to wrong check for `FieldComponentInterface::definition()` existence in child class
    * Now PHP 5.5 is required due to class name resolution via ::class used in `FieldComponent` class
* 1.4.0
    * Added `FieldComponentInterface` with `definition()` and `register()` methods.
    * Deprecated `FieldComponent` constructor overriding, override `definition()` instead.
