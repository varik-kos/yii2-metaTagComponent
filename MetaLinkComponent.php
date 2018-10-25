<?php
/**
 * Created by PhpStorm.
 * User: Varik
 * Date: 25.10.2018
 * Time: 17:46
 */

namespace app\components;


use yii\base\Component;

class MetaLinkComponent extends Component
{
    /**
     * Apple icon
     * all size
     */
    const APPLE_ICON_SIZE = [
        '57x57', '60x60', '72x72', '76x76', '114x114', '120x120', '144x144', '152x152', '180x180'
    ];

    /**
     * Size site icon
     */
    const SITE_ICONS = [
        '16x16', '32x32', '96x96'
    ];


    /**
     * @param string $dir
     * @param string $name
     * @return $this
     */

    public function getAppleTouchIcon( string $dir = '', string $name = 'apple-icon-' ){
        if ( !empty( $dir ) ){

            foreach ( self::APPLE_ICON_SIZE as $size ){
                \Yii::$app->view->registerLinkTag(
                    [
                        'rel' => 'apple-touch-icon',
                        'sizes' => $size,
                        'href' => $dir . '/' . $name . $size . '.png'
                    ]
                );
            }
        }
        return $this;
    }

    /**
     * @param string $dir
     */
    public function getSiteIcon( string $dir = '', string $name = 'favicon-' ){
        if ( !empty( $dir ) ){
            foreach ( self::SITE_ICONS as $size){
                \Yii::$app->view->registerLinkTag(
                    [
                        'rel' => 'icon',
                        'type' => 'image/png',
                        'sizes' => $size,
                        'href' => $dir . '/' . $name . $size . '.png'
                    ]
                );
            }
        }
    }

}