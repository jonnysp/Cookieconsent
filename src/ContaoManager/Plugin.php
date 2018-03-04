<?php


namespace Jonnysp\Cookieconsent\ContaoManager;

use Jonnysp\Cookieconsent\JonnyspCookieconsent;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(JonnyspCookieconsent::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['cookieconsent']),
        ];
    }
}
