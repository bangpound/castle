<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Application\AssetsBundle\ApplicationAssetsBundle(),
            new Application\UserBundle\ApplicationUserBundle(),
            new Bangpound\Atom\DataBundle\BangpoundAtomDataBundle(),
            new Bangpound\Bundle\AngularJsBundle\BangpoundAngularJsBundle(),
            new Bangpound\Bundle\CastleBundle\BangpoundCastleBundle(),
            new Bangpound\Bundle\CastleSearchBundle\BangpoundCastleSearchBundle(),
            new Bangpound\Bundle\GuzzleProxyBundle\BangpoundGuzzleProxyBundle(),
            new Bangpound\Bundle\PubsubBundle\BangpoundPubsubBundle(),
            new Bangpound\Bundle\TwitterStreamingBundle\BangpoundTwitterStreamingBundle(),
            new Bangpound\PhirehoseBundle\BangpoundPhirehoseBundle(),
            new Caxy\Bundle\ElasticsearchBundle\CaxyElasticsearchBundle(),
            new Doctrine\Bundle\CouchDBBundle\DoctrineCouchDBBundle(),
            new Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new JavierEguiluz\Bundle\EasyAdminBundle\EasyAdminBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Liip\MonitorBundle\LiipMonitorBundle(),
            new Nelmio\CorsBundle\NelmioCorsBundle(),
            new OldSound\RabbitMqBundle\OldSoundRabbitMqBundle(),
            new Sp\BowerBundle\SpBowerBundle(),
            new Sputnik\Bundle\PubsubBundle\SputnikPubsubBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Bangpound\Bundle\InvokerBundle\BangpoundInvokerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
