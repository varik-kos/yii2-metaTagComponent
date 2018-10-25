<?php
/**
 * Created by PhpStorm.
 * User: Varik
 * Date: 25.10.2018
 * Time: 16:03
 */

namespace app\components;


use yii\base\Component;

class MetaTagComponent extends Component
{
    /**
     * A Guide to Sharing for Webmasters
     * Open Graph Markup
     * https://developers.facebook.com/docs/sharing/webmasters?locale=en_EN
     *
     */

    //These are the most basic meta tags that you should use for all content types
    //Basic Tags
    const META_NAME = 'name';
    const META_CONTENT = 'content';
    const META_TITLE = 'title';
    const META_DESCRIPTION = 'description';
    const META_KEYWORD = 'keywords';

    //Basic Tags
    const META_URL = 'og:url';
    const META_OG_IMG = 'og:image';
    const META_SITE_NAME = 'og:site_name';
    const META_AUTHOR = 'author';
    const META_TIME_PUBLISHED = 'article:published_time';

    const META_OG_TYPE = 'og:type';
    const META_OG_LOCALE = 'og:locale';

    const META_ROBOTS = 'robots';
    const META_THEME_COLOR = 'theme-color';

    // To use Facebook Statistics
    const META_FB_APP_ID = 'fb:app_id';

    // Twitter meta
    const META_TW_CARD = 'twitter:card';
    const META_TW_SITE = 'twitter:site';
    const META_TW_CREATOR = 'twitter:creator';
    const META_TW_TITLE = 'twitter:title';
    const META_TW_DESCRIPTION = 'twitter:description';
    const META_TW_IMG = 'twitter:image';

    const META_VERIFY_SEARCH_GOOGLE = 'google-site-verification';
    const META_VERIFY_SEARCH_YANDEX = 'yandex-verification';

    /**
     * Images
     * https://developers.facebook.com/docs/sharing/best-practices#images
     *
     */
    const META_OG_IMG_URL = 'og:image:url';
    const META_OG_IMG_SEC_URL = 'og:image:secure_url';
    const META_OG_IMG_WIDTH = 'og:image:width';
    const META_OG_IMG_HEIGHT = 'og:image:height';


    /**
     * Register meta tag title and og:title
     * The title of your article without any branding such as your site name.
     * @param string $title
     * @param bool $og
     * @return $this
     */
    public function setTitle( string $title = '', bool $og = false){
        if ( !empty( $title ) ){
            $this->metaTag( self::META_TITLE, $title );

            if ( $og )
                $this->metaTag( 'og:' . self::META_TITLE, $title );

            \Yii::$app->view->title = $title;
        }
        return $this;
    }

    /**
     * Register meta tag description and og:description
     * A brief description of the content, usually between 2 and 4 sentences.
     * @param string $description
     * @param bool $og
     * @return $this
     */
    public function setDescription( string $description = '', bool $og = false ){
        if ( !empty( $description ) ){
            $this->metaTag( self::META_DESCRIPTION, $description );
            if ( !$og )
                $this->metaTag( 'og:' . self::META_DESCRIPTION, $description );
        }
        return $this;
    }

    /**
     * Register meta tag keyword
     * @param string $keywords
     * @return $this
     */
    public function setKeywords( string $keywords= '' ){
        if ( !empty( $keywords ) ){
            $this->metaTag( self::META_KEYWORD, $keywords );
        }
        return $this;
    }

    //https://developers.facebook.com/docs/sharing/webmasters?locale=en#basic

    /**
     * Register meta tags og:url, og:image, og:site_name, author
     * @param string $url
     * @param string $img
     * @param string $name_site
     * @param string $author
     * @return $this
     */
    public function setOgMataTag( string $url = '', string $img = '', string $name_site = '', string $author = ''){
        if ( !empty( $url ) )
            $this->metaTag( self::META_URL, $url );

        if ( !empty( $img ) )
            $this->metaTag(self::META_OG_IMG, $url );

        if ( !empty( $name_site ) )
            $this->metaTag(self::META_SITE_NAME, $name_site );

        if ( !empty( $author ) )
            $this->metaTag(self::META_AUTHOR, $author );

        return $this;
    }

    /**
     * Register meta tag robot
     * @param string $robots
     * @return $this
     */
    public function setRobots( $robots = '' ){
        if ( !empty( $robots ) )
            $this->metaTag(self::META_ROBOTS, $robots );

        return $this;
    }

    /**
     * Register verify search meta tag
     * @param string $google
     * @param string $yandex
     * @return $this
     */
    public function setVerifyCodesSearch( string $google = '', string $yandex = '' ){
        if ( !empty( $google ) )
            $this->metaTag(self::META_VERIFY_SEARCH_GOOGLE, $google);

        if ( !empty( $yandex ) )
            $this->metaTag(self::META_VERIFY_SEARCH_YANDEX, $yandex);

        return $this;
    }



    private function metaTag( string $name = '', string $content = '' ){
        return \Yii::$app->view->registerMetaTag( [ self::META_NAME => $name, self::META_CONTENT => $content], $name );
    }
}