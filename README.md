# Wordpress Foundation
> Helper classes for building Wordpress theme in the LIN3S way.

[![Build Status](https://travis-ci.org/LIN3S/WPFoundation.svg?branch=master)](https://travis-ci.org/LIN3S/WPFoundation)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lin3s/wp-foundation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LIN3S/WPFoundation/?branch=master)
[![HHVM Status](http://hhvm.h4cc.de/badge/lin3s/wp-foundation.svg)](http://hhvm.h4cc.de/package/lin3s/wp-foundation)
[![Total Downloads](https://poser.pugx.org/lin3s/wp-foundation/downloads)](https://packagist.org/packages/lin3s/wp-foundation)

[![Latest Stable Version](https://poser.pugx.org/lin3s/wp-foundation/v/stable.svg)](https://packagist.org/packages/lin3s/wp-foundation)
[![Latest Unstable Version](https://poser.pugx.org/lin3s/wp-foundation/v/unstable.svg)](https://packagist.org/packages/lin3s/wp-foundation)

## Why?
After implementing several Wordpress themes, we built what we think can be considered as best practices building this
kind of projects in a clean, consistent and fast way: thus was born [LIN3S][1]'s [Wordpress Standard Edition][2]. We are
really happy with it, but there are some tasks that are very repetitive and tedious, furthermore each developer usually
implements in a different way so, with this library we try to avoid these kind of troubles. At this moment, WPFoundation
only contains a set of **interfaces** and **abstract classes** (in the future who knows :)) to force all developers to
follow the same way becoming our code more consistent.

## Installation
The recommended and the most suitable way to install is through [Composer][3]. Be sure that the tool is installed
in your system and execute the following command:

```
$ composer require lin3s/wp-foundation
```

## Usage examples
The following code snippets are representative code samples of how can it use this library:

1. Configuration
  * [Assets](#assets)
  * [Theme](#theme)
2. PostTypes
  * [PostType](#posttype)
  * [Fields](#fields)
  * [RewriteRules](#rewriterules)


### Assets
    (...)

    use LIN3S\WPFoundation\Configuration\Assets\Assets as BaseAssets;
    
    class Assets extends BaseAssets
    {
        /**
         * {@inheritdoc}
         */
        public function assets()
        {
            wp_register_style(
                'metaslider-public',
                get_template_directory_uri() . '../../../plugins/ml-slider/assets/metaslider/public.css'
            );
            wp_register_style(
                'metaslider-flex-slider',
                get_template_directory_uri() . '../../../plugins/ml-slider/assets/sliders/flexslider/flexslider.css'
            );
            $this->addStylesheet('app', self::CSS, ['metaslider-public', 'metaslider-flex-slider']);
    
            if (WP_DEBUG) {
                $this
                    ->addScript('jquery.sidr.min', self::VENDOR . '/sidr')
                    ->addScript('waypoints', self::VENDOR . '/jquery-waypoints')
                    ->addScript('jquery.counterup', self::VENDOR . '/Counter-Up')
                    ->addScript('menu')
                    ->addScript('accordion')
                    ->addScript('counter', self::ASSETS_JS, ['jquery', 'jquery.sidr.min', 'waypoints', 'jquery.counterup'])
                    ->addScript('typekit', self::ASSETS_JS, [], '1.0.0', false);
    
            } else {
                $this->addScript('app.min', self::BUILD_JS, ['jquery', 'jquery.counterup', 'sidr']);
            }
        }
    }

### Theme
    (...)

    use LIN3S\WPFoundation\Configuration\Theme\Theme;

    class AwesomeTheme extends Theme
    {
        const VERSION = '0.1';
        const LANG = 'en';
    
        /**
         * {@inheritdoc}
         */
        public function classes()
        {
            new Assets();
            new ImageSizes();
    
            new CustomPostType();
    
            new IndexFields();
            new CustomFields();
    
            new CustomRewriteRules();
    
            new MainMenu();
        }
    
        /**
         * {@inheritdoc}
         */
        public function templates($templates)
        {
            return array_merge($templates, [
                'index'    => 'Index',
                'customs' => 'Customs',
            ]);
        }
    
        /**
         * {@inheritdoc}
         */
        public function context(array $context)
        {
            $context['mainMenu'] = new TimberMenu('main-menu');
            $data['lang'] = ICL_LANGUAGE_CODE;
    
            return $context;
        }
    }

### PostType
    (...)

    namespace Maquiauto\PostTypes;

    use LIN3S\WPFoundation\PostTypes\PostType;

    class CustomPostType extends PostType
    {
        const NAME = 'custom';
        const TAXONOMY_TYPE_CATEGORY = 'category-customs';
        const BASE_CUSTOM_URL = 'base-custom-url';
    
        /**
         * The category slug.
         *
         * @var string
         */
        private $category;
    
        /**
         * The subcategory slug.
         *
         * @var string
         */
        private $subcategory;
    
        /**
         * {@inheritdoc}
         */
        public function postType()
        {
            register_post_type(self::NAME,
                [
                    'labels'             => [
                        'name'          => 'Customs',
                        'singular_name' => 'Custom'
                    ],
                    'public'             => true,
                    'rewrite'            => [
                        'slug'       => self::BASE_CUSTOM_URL . '/%custom_category%%custom_subcategory%',
                        'with_front' => false
                    ],
                    'has_archive'        => true,
                    'publicly_queryable' => true,
                    'show_ui'            => true,
                    'query_var'          => true,
                    'capability_type'    => 'post',
                ]
            );
        }
    
        /**
         * {@inheritdoc}
         */
        public function taxonomyType()
        {
            register_taxonomy(self::TAXONOMY_TYPE_CATEGORY, self::NAME, [
                'labels'       => [
                    'name'          => 'Custom categories',
                    'singular_name' => 'Custom category'
                ],
                'sort'         => true,
                'hierarchical' => true,
                'query_var'    => true
            ]);
        }
    
        /**
         * {@inheritdoc}
         */
        public function permalink($permalink, $id = 0)
        {
            $post = get_post($id);
            if (is_object($post) && $post->post_type == self::NAME) {
                $terms = wp_get_object_terms($post->ID, self::TAXONOMY_TYPE_CATEGORY);
                $this->category = '';
                $this->subcategory = '';
                foreach ($terms as $key => $term) {
                    if (0 === $term->parent) {
                        $this->category = $term->slug;
                    } elseif (0 !== $term->parent) {
                        $this->subcategory = '/' . $term->slug;
                    }
                }
                $permalink = str_replace('%custom_category%', $this->category, $permalink);
                $permalink = str_replace('%custom_subcategory%', $this->subcategory, $permalink);
            }
    
            return $permalink;
        }
    
        /**
         * {@inheritdoc}
         */
        public static function serialize($customs)
        {
            if (is_array($customs)) {
                foreach ($customs as $key => $custom) {
                    $customs[$key]->image = new TimberImage(simple_fields_value('custom_image', $custom->id));
                    $customs[$key]->options = simple_fields_values('custom_options', $custom->id);
                    $customs[$key]->reference = simple_fields_value('custom_reference', $custom->id);
                }
    
                return $customs;
            }
    
            $custom = $customs;
    
            $custom->image = new TimberImage(simple_fields_value('custom_image', $custom->id));
            $custom->options = simple_fields_values('custom_options', $custom->id);
            $custom->reference = simple_fields_value('custom_reference', $custom->id);
    
            return $custom;
        }
    }

### Fields
    (...)

    use LIN3S\WPFoundation\PostTypes\Fields\Fields;

    class CustomFields extends Fields
    {
        /**
         * {@inheritdoc}
         */
        public function fields()
        {
            simple_fields_register_field_group(CustomPostType::NAME, [
                'name'       => 'Custom',
                'repeatable' => false,
                'fields'     => [
                    [
                        'name' => 'Image',
                        'slug' => 'custom_image',
                        'type' => 'file'
                    ],
                    [
                        'name' => 'Options',
                        'slug' => 'custom_options',
                        'type' => 'text'
                    ],
                    [
                        'name' => 'Reference',
                        'slug' => 'custom_reference',
                        'type' => 'text'
                    ]
                ]
            ]);
        }

        /**
         * {@inheritdoc}
         */
        public function connector()
        {
            simple_fields_register_post_connector('custom_connector',
                [
                    'name'         => 'Custom connector',
                    'field_groups' => [
                        [
                            'slug'     => 'custom',
                            'context'  => 'normal',
                            'priority' => 'default'
                        ]
                    ],
                    'post_types'   => CustomPostType::NAME
                ]
            );
            simple_fields_register_post_type_default('custom_connector', CustomPostType::NAME);
        }
    }

### RewriteRules
    (...)

    use LIN3S\WPFoundation\PostTypes\RewriteRules\RewriteRules;

    class CustomRewriteRules extends RewriteRules
    {
        /**
         * {@inheritdoc}
         */
        public function rewriteRules()
        {
            add_rewrite_rule(
                '^custom-base-url/([^/]*)/([^/]*)/([^/]*)/?$',
                'index.php?category=$matches[1]&subcategory=$matches[2]&custom=$matches[3]',
                'top'
            );

            add_rewrite_rule(
                '^custom-base-url/([^/]*)/([^/]*)/?$',
                'index.php?category=$matches[1]&subcategory=$matches[2]',
                'top'
            );
        }

        /**
         * {@inheritdoc}
         */
        public function rewriteTags()
        {
            add_rewrite_tag('%category%', '([^/]*)');
            add_rewrite_tag('%subcategory%', '([^/]*)');
            add_rewrite_tag('%custom%', '([^/]*)');
        }

        /**
         * {@inheritdoc}
         */
        public function templateInclude($template)
        {
            $controller = new CustomController();
    
            $method = '';
            if (get_query_var('category') !== ''
                && get_query_var('subcategory') !== ''
                && get_query_var('custom') != ''
            ) {
                $method = 'showAction';
            } elseif (get_query_var('category') !== ''
                && get_query_var('subcategory') !== ''
            ) {
                $method = 'listAction';
            }
    
            return $method === '' ? $template : $controller->$method();
        }
    }

[1]: http://lin3s.com
[2]: https://github.com/LIN3S/WordressStandard
[3]: https://getcomposer.org/download/

Licensing Options
-----------------
[![License](https://poser.pugx.org/lin3s/wp-foundation/license.svg)](https://github.com/LIN3S/WPFoundation/blob/master/LICENSE)