<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(stricttypes=1);

namespace LIN3S\WPFoundation\PostTypes;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class CustomPostTypeOptions
{
    private $label;
    private $labels;
    private $description;
    private $public;
    private $hierarchical;
    private $excludeFromSearch;
    private $publiclyQueryable;
    private $showUi;
    private $showInMenu;
    private $showInNavMenus;
    private $showInAdminBar;
    private $showInRest;
    private $restBase;
    private $restControllerClass;
    private $menuPosition;
    private $menuIcon;
    private $capabilityType;
    private $capabilities;
    private $mapMetaCap;
    private $supports;
    private $registerMetaboxCb;
    private $taxonomies;
    private $hasArchive;
    private $rewrite;
    private $slug;
    private $withFront;
    private $feeds;
    private $pages;
    private $epMask;
    private $queryVar;
    private $canExport;
    private $deleteWithUser;
    private $builtIn;
    private $editLink;

    public function getLabel() : string
    {
        return $this->label;
    }

    public function setLabel(string $label) : self
    {
        $this->label = $label;

        return $this;
    }

    public function getLabels() : array
    {
        return $this->labels;
    }

    public function setLabels($labels) : self
    {
        $this->labels = $labels;

        return $this;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getPublic()
    {
        return $this->public;
    }

    public function setPublic($public) : self
    {
        $this->public = $public;

        return $this;
    }

    public function getHierarchical()
    {
        return $this->hierarchical;
    }

    /**
     * @param mixed $hierarchical
     *
     * @return PostTypeOptions
     */
    public function setHierarchical($hierarchical)
    {
        $this->hierarchical = $hierarchical;

        return $this;
    }

    public function getExcludeFromSearch()
    {
        return $this->excludeFromSearch;
    }

    /**
     * @param mixed $excludeFromSearch
     *
     * @return PostTypeOptions
     */
    public function setExcludeFromSearch($excludeFromSearch)
    {
        $this->excludeFromSearch = $excludeFromSearch;

        return $this;
    }

    public function getPubliclyQueryable()
    {
        return $this->publiclyQueryable;
    }

    /**
     * @param mixed $publiclyQueryable
     *
     * @return PostTypeOptions
     */
    public function setPubliclyQueryable($publiclyQueryable)
    {
        $this->publiclyQueryable = $publiclyQueryable;

        return $this;
    }

    public function getShowUi()
    {
        return $this->showUi;
    }

    /**
     * @param mixed $showUi
     *
     * @return PostTypeOptions
     */
    public function setShowUi($showUi)
    {
        $this->showUi = $showUi;

        return $this;
    }

    public function getShowInMenu()
    {
        return $this->showInMenu;
    }

    /**
     * @param mixed $showInMenu
     *
     * @return PostTypeOptions
     */
    public function setShowInMenu($showInMenu)
    {
        $this->showInMenu = $showInMenu;

        return $this;
    }

    public function getShowInNavMenus()
    {
        return $this->showInNavMenus;
    }

    /**
     * @param mixed $showInNavMenus
     *
     * @return PostTypeOptions
     */
    public function setShowInNavMenus($showInNavMenus)
    {
        $this->showInNavMenus = $showInNavMenus;

        return $this;
    }

    public function getShowInAdminBar()
    {
        return $this->showInAdminBar;
    }

    /**
     * @param mixed $showInAdminBar
     *
     * @return PostTypeOptions
     */
    public function setShowInAdminBar($showInAdminBar)
    {
        $this->showInAdminBar = $showInAdminBar;

        return $this;
    }

    public function getShowInRest()
    {
        return $this->showInRest;
    }

    /**
     * @param mixed $showInRest
     *
     * @return PostTypeOptions
     */
    public function setShowInRest($showInRest)
    {
        $this->showInRest = $showInRest;

        return $this;
    }

    public function getRestBase()
    {
        return $this->restBase;
    }

    /**
     * @param mixed $restBase
     *
     * @return PostTypeOptions
     */
    public function setRestBase($restBase)
    {
        $this->restBase = $restBase;

        return $this;
    }

    public function getRestControllerClass()
    {
        return $this->restControllerClass;
    }

    /**
     * @param mixed $restControllerClass
     *
     * @return PostTypeOptions
     */
    public function setRestControllerClass($restControllerClass)
    {
        $this->restControllerClass = $restControllerClass;

        return $this;
    }

    public function getMenuPosition()
    {
        return $this->menuPosition;
    }

    /**
     * @param mixed $menuPosition
     *
     * @return PostTypeOptions
     */
    public function setMenuPosition($menuPosition)
    {
        $this->menuPosition = $menuPosition;

        return $this;
    }

    public function getMenuIcon()
    {
        return $this->menuIcon;
    }

    /**
     * @param mixed $menuIcon
     *
     * @return PostTypeOptions
     */
    public function setMenuIcon($menuIcon)
    {
        $this->menuIcon = $menuIcon;

        return $this;
    }

    public function getCapabilityType()
    {
        return $this->capabilityType;
    }

    /**
     * @param mixed $capabilityType
     *
     * @return PostTypeOptions
     */
    public function setCapabilityType($capabilityType)
    {
        $this->capabilityType = $capabilityType;

        return $this;
    }

    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * @param mixed $capabilities
     *
     * @return PostTypeOptions
     */
    public function setCapabilities($capabilities)
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    public function getMapMetaCap()
    {
        return $this->mapMetaCap;
    }

    /**
     * @param mixed $mapMetaCap
     *
     * @return PostTypeOptions
     */
    public function setMapMetaCap($mapMetaCap)
    {
        $this->mapMetaCap = $mapMetaCap;

        return $this;
    }

    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * @param mixed $supports
     *
     * @return PostTypeOptions
     */
    public function setSupports($supports)
    {
        $this->supports = $supports;

        return $this;
    }

    public function getRegisterMetaboxCb()
    {
        return $this->registerMetaboxCb;
    }

    /**
     * @param mixed $registerMetaboxCb
     *
     * @return PostTypeOptions
     */
    public function setRegisterMetaboxCb($registerMetaboxCb)
    {
        $this->registerMetaboxCb = $registerMetaboxCb;

        return $this;
    }

    public function getTaxonomies()
    {
        return $this->taxonomies;
    }

    /**
     * @param mixed $taxonomies
     *
     * @return PostTypeOptions
     */
    public function setTaxonomies($taxonomies)
    {
        $this->taxonomies = $taxonomies;

        return $this;
    }

    public function getHasArchive()
    {
        return $this->hasArchive;
    }

    /**
     * @param mixed $hasArchive
     *
     * @return PostTypeOptions
     */
    public function setHasArchive($hasArchive)
    {
        $this->hasArchive = $hasArchive;

        return $this;
    }

    public function getRewrite()
    {
        return $this->rewrite;
    }

    /**
     * @param mixed $rewrite
     *
     * @return PostTypeOptions
     */
    public function setRewrite($rewrite)
    {
        $this->rewrite = $rewrite;

        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     *
     * @return PostTypeOptions
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function getWithFront()
    {
        return $this->withFront;
    }

    /**
     * @param mixed $withFront
     *
     * @return PostTypeOptions
     */
    public function setWithFront($withFront)
    {
        $this->withFront = $withFront;

        return $this;
    }

    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * @param mixed $feeds
     *
     * @return PostTypeOptions
     */
    public function setFeeds($feeds)
    {
        $this->feeds = $feeds;

        return $this;
    }

    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param mixed $pages
     *
     * @return PostTypeOptions
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    public function getEpMask()
    {
        return $this->epMask;
    }

    /**
     * @param mixed $epMask
     *
     * @return PostTypeOptions
     */
    public function setEpMask($epMask)
    {
        $this->epMask = $epMask;

        return $this;
    }

    public function getQueryVar()
    {
        return $this->queryVar;
    }

    /**
     * @param mixed $queryVar
     *
     * @return PostTypeOptions
     */
    public function setQueryVar($queryVar)
    {
        $this->queryVar = $queryVar;

        return $this;
    }

    public function getCanExport()
    {
        return $this->canExport;
    }

    /**
     * @param mixed $canExport
     *
     * @return PostTypeOptions
     */
    public function setCanExport($canExport)
    {
        $this->canExport = $canExport;

        return $this;
    }

    public function getDeleteWithUser()
    {
        return $this->deleteWithUser;
    }

    /**
     * @param mixed $deleteWithUser
     *
     * @return PostTypeOptions
     */
    public function setDeleteWithUser($deleteWithUser)
    {
        $this->deleteWithUser = $deleteWithUser;

        return $this;
    }

    public function getBuiltIn()
    {
        return $this->builtIn;
    }

    /**
     * @param mixed $builtIn
     *
     * @return PostTypeOptions
     */
    public function setBuiltIn($builtIn)
    {
        $this->builtIn = $builtIn;

        return $this;
    }

    public function getEditLink()
    {
        return $this->editLink;
    }

    /**
     * @param mixed $editLink
     *
     * @return PostTypeOptions
     */
    public function setEditLink($editLink)
    {
        $this->editLink = $editLink;

        return $this;
    }


    /*
* Array or string of arguments for registering a post type.
*
*     @type string      $label                 Name of the post type shown in the menu. Usually plural.
*                                              Default is value of $labels['name'].
*     @type array       $labels                An array of labels for this post type. If not set, post
*                                              labels are inherited for non-hierarchical types and page
*                                              labels for hierarchical ones. See getposttypelabels() for a full
*                                              list of supported labels.
*     @type string      $description           A short descriptive summary of what the post type is.
*                                              Default empty.
*     @type bool        $public                Whether a post type is intended for use publicly either via
 *                                              the admin interface or by front-end users. While the default
 *                                              settings of $excludefromsearch, $publiclyqueryable, $showui,
 *                                              and $showinnavmenus are inherited from public, each does not
 *                                              rely on this relationship and controls a very specific intention.
 *                                              Default false.
 *     @type bool        $hierarchical          Whether the post type is hierarchical (e.g. page). Default false.
 *     @type bool        $excludefromsearch   Whether to exclude posts with this post type from front end search
 *                                              results. Default is the opposite value of $public.
 *     @type bool        $publiclyqueryable    Whether queries can be performed on the front end for the post type
 *                                              as part of parserequest(). Endpoints would include:
 *                                              * ?posttype={posttypekey}
*                                              * ?{posttypekey}={singlepostslug}
*                                              * ?{posttypequeryvar}={singlepostslug}
*                                              If not set, the default is inherited from $public.
 *     @type bool        $showui               Whether to generate and allow a UI for managing this post type in the
*                                              admin. Default is value of $public.
 *     @type bool        $showinmenu          Where to show the post type in the admin menu. To work, $showui
*                                              must be true. If true, the post type is shown in its own top level
*                                              menu. If false, no menu is shown. If a string of an existing top
*                                              level menu (eg. 'tools.php' or 'edit.php?posttype=page'), the post
*                                              type will be placed as a sub-menu of that.
 *                                              Default is value of $showui.
 *     @type bool        $showinnavmenus     Makes this post type available for selection in navigation menus.
 *                                              Default is value $public.
 *     @type bool        $showinadminbar     Makes this post type available via the admin bar. Default is value
*                                              of $showinmenu.
 *     @type bool        $showinrest          Whether to add the post type route in the REST API 'wp/v2' namespace.
*     @type string      $restbase             To change the base url of REST API route. Default is $posttype.
 *     @type string      $restcontrollerclass REST API Controller class name. Default is 'WPRESTPostsController'.
 *     @type int         $menuposition         The position in the menu order the post type should appear. To work,
 *                                              $showinmenu must be true. Default null (at the bottom).
 *     @type string      $menuicon             The url to the icon to be used for this menu. Pass a base64-encoded
*                                              SVG using a data URI, which will be colored to match the color scheme
*                                              -- this should begin with 'data:image/svg+xml;base64,'. Pass the name
*                                              of a Dashicons helper class to use a font icon, e.g.
 *                                              'dashicons-chart-pie'. Pass 'none' to leave div.wp-menu-image empty
 *                                              so an icon can be added via CSS. Defaults to use the posts icon.
 *     @type string      $capabilitytype       The string to use to build the read, edit, and delete capabilities.
 *                                              May be passed as an array to allow for alternative plurals when using
*                                              this argument as a base to construct the capabilities, e.g.
 *                                              array('story', 'stories'). Default 'post'.
 *     @type array       $capabilities          Array of capabilities for this post type. $capabilitytype is used
*                                              as a base to construct capabilities by default.
 *                                              See getposttypecapabilities().
 *     @type bool        $mapmetacap          Whether to use the internal default meta capability handling.
 *                                              Default false.
 *     @type array       $supports              Core feature(s) the post type supports. Serves as an alias for calling
                                                                                                               *                                              addposttypesupport() directly. Core features include 'title',
 *                                              'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt',
 *                                              'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats'.
 *                                              Additionally, the 'revisions' feature dictates whether the post type
*                                              will store revisions, and the 'comments' feature dictates whether the
*                                              comments count will show on the edit screen. Defaults is an array
 *                                              containing 'title' and 'editor'.
 *     @type callable    $registermetaboxcb  Provide a callback function that sets up the meta boxes for the
                                                                                                            *                                              edit form. Do removemetabox() and addmetabox() calls in the
*                                              callback. Default null.
 *     @type array       $taxonomies            An array of taxonomy identifiers that will be registered for the
                                                                                                             *                                              post type. Taxonomies can be registered later with registertaxonomy()
*                                              or registertaxonomyforobjecttype().
 *                                              Default empty array.
 *     @type bool|string $hasarchive           Whether there should be post type archives, or if a string, the
*                                              archive slug to use. Will generate the proper rewrite rules if
 *                                              $rewrite is enabled. Default false.
 *     @type bool|array  $rewrite              {
 *         Triggers the handling of rewrites for this post type. To prevent rewrite, set to false.
 *         Defaults to true, using $posttype as slug. To specify rewrite rules, an array can be
*         passed with any of these keys:
 *
 *         @type string $slug       Customize the permastruct slug. Defaults to $posttype key.
 *         @type bool   $withfront Whether the permastruct should be prepended with WPRewrite::$front.
 *                                  Default true.
 *         @type bool   $feeds      Whether the feed permastruct should be built for this post type.
 *                                  Default is value of $hasarchive.
 *         @type bool   $pages      Whether the permastruct should provide for pagination. Default true.
 *         @type const  $epmask    Endpoint mask to assign. If not specified and permalinkepmask is set,
 *                                  inherits from $permalinkepmask. If not specified and permalinkepmask
*                                  is not set, defaults to EPPERMALINK.
 *     }
 *     @type string|bool $queryvar             Sets the queryvar key for this post type. Defaults to $posttype
*                                              key. If false, a post type cannot be loaded at
*                                              ?{queryvar}={postslug}. If specified as a string, the query
*                                              ?{queryvarstring}={postslug} will be valid.
 *     @type bool        $canexport            Whether to allow this post type to be exported. Default true.
 *     @type bool        $deletewithuser      Whether to delete posts of this type when deleting a user. If true,
 *                                              posts of this type belonging to the user will be moved to trash
*                                              when then user is deleted. If false, posts of this type belonging
*                                              to the user will *not* be trashed or deleted. If not set (the default),
 *                                              posts are trashed if posttypesupports('author'). Otherwise posts
*                                              are not trashed or deleted. Default null.
 *     @type bool        $builtin              FOR INTERNAL USE ONLY! True if this post type is a native or
 *                                              "built-in" posttype. Default false.
 *     @type string      $editlink            FOR INTERNAL USE ONLY! URL segment to use for edit link of
*                                            this post type. Default 'post.php?post=%d'.
     */
}
