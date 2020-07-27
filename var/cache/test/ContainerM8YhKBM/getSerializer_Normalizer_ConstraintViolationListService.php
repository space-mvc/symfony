<?php

namespace ContainerM8YhKBM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_ConstraintViolationListService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.constraint_violation_list' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';

        return $container->privates['serializer.normalizer.constraint_violation_list'] = new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->load('getSerializer_NameConverter_MetadataAwareService')));
    }
}
