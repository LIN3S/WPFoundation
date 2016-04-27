#CHANGELOG

This changelog references the relevant changes done in 1.0 and its minor versions.

To get the diff for a specific change, go to https://github.com/LIN3S/WPFoundation/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/WPFoundation/compare/v1.0.0...v1.0.1

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
