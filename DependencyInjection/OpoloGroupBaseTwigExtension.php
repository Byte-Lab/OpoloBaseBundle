<?php

namespace OpoloGroup\BaseBundle\DependencyInjection;


class OpoloGroupBaseTwigExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    public function getGlobals()
    {
        return array(
            'opolo_group_base_base_layout' => 'OpoloGroupBaseBundle::base.html.twig'
        );
    }
}